<?php

namespace App\Controller;

use App\Entity\Publication;
use App\Form\PublicationType;
use App\Repository\PublicationRepository;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Comment;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Security\Voter\PublicationVoter;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/publication')]
#[IsGranted('ROLE_USER')]
class PublicationController extends AbstractController
{
    private const MAX_WIDTH = 1920;
    private const MAX_HEIGHT = 1080;
    private const JPEG_QUALITY = 85;

    private function optimizeImage(string $imagePath): void
    {
        list($width, $height, $type) = getimagesize($imagePath);
        
        // Calculate new dimensions while maintaining aspect ratio
        $ratio = min(
            self::MAX_WIDTH / $width,
            self::MAX_HEIGHT / $height
        );

        if ($ratio < 1) {
            $newWidth = (int)($width * $ratio);
            $newHeight = (int)($height * $ratio);

            // Create new image
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
            // Load source image
            switch ($type) {
                case IMAGETYPE_JPEG:
                    $source = imagecreatefromjpeg($imagePath);
                    break;
                case IMAGETYPE_PNG:
                    $source = imagecreatefrompng($imagePath);
                    // Preserve transparency
                    imagealphablending($newImage, false);
                    imagesavealpha($newImage, true);
                    break;
                case IMAGETYPE_GIF:
                    $source = imagecreatefromgif($imagePath);
                    break;
                default:
                    return;
            }

            // Resize image
            imagecopyresampled(
                $newImage, $source,
                0, 0, 0, 0,
                $newWidth, $newHeight,
                $width, $height
            );

            // Save image
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($newImage, $imagePath, self::JPEG_QUALITY);
                    break;
                case IMAGETYPE_PNG:
                    imagepng($newImage, $imagePath, 9);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($newImage, $imagePath);
                    break;
            }

            // Free memory
            imagedestroy($newImage);
            imagedestroy($source);
        }
    }

    private function handleImageUpload($imageFile, string $uploadDir): ?string
    {
        try {
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
            $targetPath = $uploadDir . '/' . $newFilename;

            // Move uploaded file
            $imageFile->move($uploadDir, $newFilename);

            // Optimize the image
            $this->optimizeImage($targetPath);

            return '/uploads/publications/' . $newFilename;
        } catch (\Exception $e) {
            return null;
        }
    }

    public function __construct(
        private readonly SluggerInterface $slugger
    ) {}

    #[Route('/', name: 'app_publication_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PublicationRepository $publicationRepository): Response
    {
        $user = $this->getUser();
        if (!$user || (!in_array('ROLE_PATIENT', $user->getRoles()) && !in_array('ROLE_MEDECIN', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()))) {
            throw new AccessDeniedException('Accès réservé aux patients, médecins et administrateurs.');
        }

        $publication = new Publication();
        $publication->setDatePb(new \DateTime());
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFiles = $form->get('imageFiles')->getData();
            
            if ($imageFiles) {
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/publications';
                
                foreach ($imageFiles as $imageFile) {
                    $imageUrl = $this->handleImageUpload($imageFile, $uploadDir);
                    if ($imageUrl) {
                        $publication->addImageUrl($imageUrl);
                    }
                }
            }

            $user = $this->getUser();
            $publication->setUser($user);
            $publicationRepository->save($publication, true);

            return $this->redirectToRoute('app_publication_index');
        }

        return $this->render('publication/index.html.twig', [
            'publications' => $publicationRepository->findAllOrderedByDate(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/new', name: 'app_publication_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PublicationRepository $publicationRepository): Response
    {
        $user = $this->getUser();
        if (!$user || (!in_array('ROLE_PATIENT', $user->getRoles()) && !in_array('ROLE_MEDECIN', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()))) {
            throw new AccessDeniedException('Accès réservé aux patients, médecins et administrateurs.');
        }

        $publication = new Publication();
        $publication->setDatePb(new \DateTime());
        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFiles = $form->get('imageFiles')->getData();
            
            if ($imageFiles) {
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/publications';
                
                foreach ($imageFiles as $imageFile) {
                    $imageUrl = $this->handleImageUpload($imageFile, $uploadDir);
                    if ($imageUrl) {
                        $publication->addImageUrl($imageUrl);
                    }
                }
            }

            $user = $this->getUser();
            $publication->setUser($user);
            $publicationRepository->save($publication, true);

            return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publication/new.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_publication_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Publication $publication, CommentRepository $commentRepository): Response
    {
        $user = $this->getUser();
        if (!$user || (!in_array('ROLE_PATIENT', $user->getRoles()) && !in_array('ROLE_MEDECIN', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()))) {
            throw new AccessDeniedException('Accès réservé aux patients, médecins et administrateurs.');
        }

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setPublication($publication);
            $comment->setUser($this->getUser());
            $comment->setCreatedAt(new \DateTimeImmutable());
            $commentRepository->save($comment, true);

            return $this->redirectToRoute('app_publication_show', ['id' => $publication->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
            'commentForm' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_publication_edit', methods: ['GET', 'POST'])]
    #[IsGranted(PublicationVoter::EDIT, subject: 'publication')]
    public function edit(Request $request, Publication $publication, PublicationRepository $publicationRepository): Response
    {
        $user = $this->getUser();
        if (!$user || (!in_array('ROLE_PATIENT', $user->getRoles()) && !in_array('ROLE_MEDECIN', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()))) {
            throw new AccessDeniedException('Accès réservé aux patients, médecins et administrateurs.');
        }

        if ($publication->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cette publication.');
        }

        $form = $this->createForm(PublicationType::class, $publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFiles = $form->get('imageFiles')->getData();
            
            if ($imageFiles) {
                $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/publications';

                // Delete old images
                foreach ($publication->getImageUrls() as $oldImageUrl) {
                    $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $oldImageUrl;
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $publication->setImageUrls([]);

                foreach ($imageFiles as $imageFile) {
                    $imageUrl = $this->handleImageUpload($imageFile, $uploadDir);
                    if ($imageUrl) {
                        $publication->addImageUrl($imageUrl);
                    }
                }
            }

            $publicationRepository->save($publication, true);
            return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publication/edit.html.twig', [
            'publication' => $publication,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'app_publication_delete', methods: ['POST'])]
    #[IsGranted(PublicationVoter::DELETE, subject: 'publication')]
    public function delete(
        Request $request,
        Publication $publication,
        PublicationRepository $publicationRepository,
        CommentRepository $commentRepository
    ): Response
    {
        $user = $this->getUser();
        if (!$user || (!in_array('ROLE_PATIENT', $user->getRoles()) && !in_array('ROLE_MEDECIN', $user->getRoles()) && !in_array('ROLE_ADMIN', $user->getRoles()))) {
            throw new AccessDeniedException('Accès réservé aux patients, médecins et administrateurs.');
        }

        if ($this->isCsrfTokenValid('delete'.$publication->getId(), $request->request->get('_token'))) {
            try {
                // Delete image files
                foreach ($publication->getImageUrls() as $imageUrl) {
                    $imagePath = $this->getParameter('kernel.project_dir') . '/public' . $imageUrl;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Delete all comments
                foreach ($publication->getComments() as $comment) {
                    $commentRepository->remove($comment, true);
                }
                
                // Delete the publication
                $publicationRepository->remove($publication, true);
            } catch (\Exception $e) {
            }
        }

        return $this->redirectToRoute('app_publication_index', [], Response::HTTP_SEE_OTHER);
    }
}