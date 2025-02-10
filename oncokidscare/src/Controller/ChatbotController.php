<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

#[Route('/chatbot')]
class ChatbotController extends AbstractController
{
    private $httpClient;
    private $logger;
    private $responses = [
        'salutations' => [
            "Bonjour ! Je suis l'assistant virtuel d'OncoKidsCare. Je peux vous renseigner sur nos services, les soins pédiatriques, et vous apporter du soutien.",
            "Bienvenue à OncoKidsCare ! Je suis là pour répondre à vos questions sur notre hôpital, les soins pédiatriques et la santé de votre enfant.",
            "Bonjour et bienvenue ! Je suis votre guide virtuel à OncoKidsCare. Comment puis-je vous aider aujourd'hui ?"
        ],
        'hopital_info' => [
            "OncoKidsCare est un hôpital pédiatrique spécialisé en oncologie. Nous offrons des soins complets : consultations, traitements, suivi psychologique, et activités pour les enfants. Notre équipe est composée de spécialistes dévoués au bien-être des enfants.",
            "Notre hôpital OncoKidsCare est un centre d'excellence en oncologie pédiatrique. Nous disposons d'équipements modernes, d'une équipe pluridisciplinaire, et proposons un accompagnement personnalisé pour chaque famille.",
            "À OncoKidsCare, nous combinons expertise médicale et approche humaine. Notre hôpital est conçu pour que les enfants se sentent le plus à l'aise possible, avec des espaces de jeux, une école à l'hôpital, et des chambres adaptées."
        ],
        'services_disponibles' => [
            "Nos services incluent : consultations spécialisées, chimiothérapie, radiothérapie, chirurgie, suivi psychologique, école à l'hôpital, activités récréatives, et soutien aux familles.",
            "OncoKidsCare propose une gamme complète de services : soins médicaux spécialisés, soutien psychologique, activités éducatives et ludiques, et accompagnement des familles.",
            "Nous offrons des services adaptés à chaque situation : soins oncologiques, suivi psychologique, activités pédagogiques, et diverses thérapies complémentaires pour le bien-être des enfants."
        ],
        'sante_mentale' => [
            "La santé mentale est une priorité à OncoKidsCare. Nos psychologues et psychiatres sont spécialisés dans l'accompagnement des enfants malades et de leurs familles. Nous proposons des thérapies individuelles et des groupes de parole.",
            "Nous comprenons l'importance du bien-être psychologique. Notre équipe de santé mentale propose un soutien adapté à chaque âge : art-thérapie, musicothérapie, et thérapies conventionnelles.",
            "Le soutien psychologique fait partie intégrante de nos soins. Nous aidons les enfants et leurs familles à gérer le stress, l'anxiété et les défis émotionnels liés à la maladie."
        ],
        'pediatrie_generale' => [
            "En plus de l'oncologie, nous assurons un suivi pédiatrique complet : croissance, développement, vaccination, et prévention. Notre équipe veille au bien-être global de votre enfant.",
            "Nos pédiatres suivent le développement général de votre enfant tout au long du traitement. Nous nous occupons aussi des aspects comme la nutrition, le sommeil et l'activité physique.",
            "La pédiatrie générale est essentielle dans notre approche. Nous surveillons la santé globale de votre enfant : alimentation, croissance, développement et vaccination."
        ],
        'activites_enfants' => [
            "OncoKidsCare propose de nombreuses activités adaptées : école à l'hôpital, ateliers créatifs, jeux thérapeutiques, et moments de détente. Notre but est de maintenir une vie aussi normale que possible.",
            "Nous organisons régulièrement des activités ludiques et éducatives : arts plastiques, musique, contes, et même des spectacles. Ces activités aident les enfants à mieux vivre leur séjour.",
            "Les activités font partie de notre programme de soins : école, jeux, arts créatifs, et sports adaptés. Elles permettent aux enfants de s'épanouir malgré la maladie."
        ],
        'soutien_familles' => [
            "Nous accompagnons toute la famille : groupes de parole pour les parents, soutien pour les frères et sœurs, aide sociale, et conseils pratiques pour la vie quotidienne.",
            "Le soutien familial est crucial. Nous proposons : aide psychologique, assistance sociale, groupes d'entraide entre parents, et conseils pour gérer le quotidien.",
            "Notre équipe aide les familles à tous les niveaux : soutien émotionnel, aide administrative, conseils pratiques, et mise en relation avec des associations de parents."
        ],
        'rendez_vous' => [
            "Pour prendre rendez-vous, vous pouvez contacter notre secrétariat au numéro principal de l'hôpital. Nous organiserons rapidement une consultation adaptée à vos besoins.",
            "Les rendez-vous peuvent être pris par téléphone ou sur place. Notre équipe s'efforce de proposer des créneaux qui conviennent au mieux à votre emploi du temps.",
            "Pour organiser une consultation, contactez notre accueil. En cas d'urgence, nous disposons d'un service dédié 24h/24."
        ],
        'default' => [
            "Je peux vous renseigner sur différents aspects d'OncoKidsCare : nos services médicaux, le soutien psychologique, les activités pour enfants, ou l'accompagnement des familles. Que souhaitez-vous savoir ?",
            "Je suis là pour répondre à vos questions sur notre hôpital. Je peux vous parler des soins, du soutien psychologique, des activités, ou de l'accompagnement familial. Quel sujet vous intéresse ?",
            "Comment puis-je vous aider ? Je peux vous informer sur nos services médicaux, le soutien psychologique, les activités pour enfants, ou l'aide aux familles."
        ]
    ];

    public function __construct(HttpClientInterface $httpClient, LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    private function classifyMessage(string $message): string
    {
        $message = strtolower($message);
        
        $keywords = [
            'salutations' => ['bonjour', 'salut', 'hello', 'bonsoir', 'hey', 'cc', 'coucou'],
            'hopital_info' => ['hopital', 'hôpital', 'oncokidscare', 'centre', 'clinique', 'établissement', 'service'],
            'services_disponibles' => ['service', 'disponible', 'proposer', 'offrir', 'prestation', 'consultation'],
            'sante_mentale' => ['mental', 'psy', 'psychologie', 'psychiatre', 'stress', 'anxiété', 'dépression', 'emotion'],
            'pediatrie_generale' => ['pediatrie', 'pédiatre', 'enfant', 'développement', 'croissance', 'vaccination'],
            'activites_enfants' => ['activité', 'jeu', 'école', 'animation', 'atelier', 'loisir', 'sport'],
            'soutien_familles' => ['famille', 'parent', 'frère', 'soeur', 'soutien', 'aide', 'accompagnement'],
            'rendez_vous' => ['rendez-vous', 'rdv', 'consultation', 'prendre', 'réserver', 'horaire']
        ];

        $maxMatches = 0;
        $bestCategory = 'default';

        foreach ($keywords as $category => $words) {
            $matchCount = 0;
            foreach ($words as $word) {
                if (strpos($message, $word) !== false) {
                    $matchCount++;
                }
            }
            if ($matchCount > $maxMatches) {
                $maxMatches = $matchCount;
                $bestCategory = $category;
            }
        }

        return $bestCategory;
    }

    private function getRandomResponse(string $category): string
    {
        $responses = $this->responses[$category] ?? $this->responses['default'];
        return $responses[array_rand($responses)];
    }

    #[Route('/test', name: 'chatbot_test', methods: ['GET'])]
    public function test(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
            'message' => 'Le chatbot est opérationnel'
        ]);
    }

    #[Route('/message', name: 'chatbot_message', methods: ['POST'])]
    public function message(Request $request): JsonResponse
    {
        try {
            $content = $request->getContent();
            $this->logger->info('Contenu reçu: ' . $content);
            
            if (empty($content)) {
                $this->logger->warning('Contenu vide reçu');
                return new JsonResponse([
                    'message' => 'Aucun message reçu'
                ]);
            }

            $data = json_decode($content, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $this->logger->error('Erreur JSON: ' . json_last_error_msg());
                throw new \Exception('JSON invalide: ' . json_last_error_msg());
            }

            $userMessage = $data['message'] ?? null;
            if (!$userMessage) {
                $this->logger->warning('Message manquant dans les données');
                throw new \Exception('Message manquant dans la requête');
            }

            $this->logger->info('Message utilisateur: ' . $userMessage);

            // Classification et réponse
            $category = $this->classifyMessage($userMessage);
            $response = $this->getRandomResponse($category);

            return new JsonResponse([
                'message' => $response
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Erreur générale: ' . $e->getMessage());
            return new JsonResponse([
                'error' => 'Une erreur est survenue: ' . $e->getMessage()
            ], 500);
        }
    }
}