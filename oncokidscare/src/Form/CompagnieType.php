<?php

namespace App\Form;

use App\Entity\Compagnie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;

class CompagnieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de la compagnie est requis',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('adresse', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'L\'adresse est requise',
                    ]),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('telephone', TelType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le numéro de téléphone est requis',
                    ]),
                    new Length([
                        'min' => 8,
                        'max' => 20,
                        'minMessage' => 'Le numéro doit contenir au moins {{ limit }} chiffres',
                        'maxMessage' => 'Le numéro ne peut pas dépasser {{ limit }} chiffres',
                    ]),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'L\'email est requis',
                    ]),
                    new Email([
                        'message' => 'L\'email "{{ value }}" n\'est pas valide.',
                    ]),
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('site_web', TextType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('siret', TextType::class, [
                'constraints' => [new NotBlank()],
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('logo', FileType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('statut_juridique', TextType::class, [
                'constraints' => [new NotBlank()],
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Compagnie::class,
        ]);
    }
}
