<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\RapportDetat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RapportDetatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateRapport', null, [
                'widget' => 'single_text',
            ])
            ->add('age')
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    "Femme" => "Femme",
                    "Homme" => "Homme",
                    
                ],
                'multiple' => false, // une seule valeur possible
            ])
            ->add('tensionArterielle')
            ->add('pouls')
            ->add('temperature')
            ->add('saturationOxygene')
            ->add('imc')
            ->add('niveauDouleur')
            ->add('traitement', ChoiceType::class, [
                'choices' => [
                    "Chimiothérapie" => "Chimiothérapie",
                    "Chirurgie" => "Chirurgie",
                    "Dialyse" => "Dialyse",
                    "Réanimation" => "Réanimation",
                ],
                'multiple' => false, // une seule valeur possible
            ])
            
            ->add('doseMedicament')
            ->add('frequenceTraitement',ChoiceType::class, [
                'choices' => [
                    "hebdomadaire" => "hebdomadaire",
                    "quotidien" => "quotidien",
                    "mensuel" => "mensuel",
                    
                ],
              
                'multiple' => false, // une seule valeur possible
            ])
            ->add('perteDeSang')
            ->add('tempsOperation')
            ->add('dureeSeance')
            ->add('filtrationSang')
            ->add('creatinine')
            ->add('scoreGlasgow')
            ->add('respirationAssistee', ChoiceType::class, [
                'choices' => [
                    'Oui' => 1,
                    'Non' => 0,
                ],
             
                'multiple' => false, // une seule valeur possible
            ])
            ->add('complications')
            ->add('patient', EntityType::class, [
                'class' => User::class,
                'query_builder' => function ($userRepository) {
                    return $userRepository->createQueryBuilder('u')
                        ->where('u.role = :role')
                        ->setParameter('role', User::ROLE_PATIENT)
                        ->orderBy('u.nom', 'ASC'); // Trier les patients par nom
                },
                'choice_label' => function (User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom(); // Affiche Nom Prénom
                },
                'placeholder' => 'Sélectionnez un patient',
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RapportDetat::class,
        ]);
    }
}
