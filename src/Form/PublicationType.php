<?php

namespace App\Form;

use App\Entity\Publication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Count;

class PublicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenu', TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Partagez votre expérience ou posez une question...',
                    'rows' => 4
                ],
                'label' => false
            ])
            ->add('imageFiles', FileType::class, [
                'label' => 'Photos (maximum 5)',
                'multiple' => true,
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Count([
                        'max' => 5,
                        'maxMessage' => 'Vous ne pouvez pas télécharger plus de {{ limit }} photos'
                    ]),
                    new All([
                        'constraints' => [
                            new File([
                                'maxSize' => '5M',
                                'mimeTypes' => [
                                    'image/jpeg',
                                    'image/png',
                                    'image/gif'
                                ],
                                'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, GIF)',
                            ])
                        ]
                    ])
                ],
                'attr' => [
                    'accept' => 'image/*',
                    'class' => 'form-control',
                    'multiple' => 'multiple',
                    'data-max-files' => '5'
                ]
            ])
            ->add('isAnonymous', CheckboxType::class, [
                'label' => 'Publier en anonyme',
                'required' => false,
                'attr' => [
                    'class' => 'anonymous-checkbox'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
        ]);
    }
}
