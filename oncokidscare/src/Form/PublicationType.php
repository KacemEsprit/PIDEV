<?php

namespace App\Form;

use App\Entity\Publication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Count;
use Symfony\Component\Validator\Constraints\NotNull;

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
    ]
])
            ->add('isAnonymous', CheckboxType::class, [
                'label' => 'Publier en anonyme',
                'required' => false,
                'attr' => [
                    'class' => 'anonymous-checkbox'
                ]
            ])
            ->add('category', ChoiceType::class, [
    'label' => 'Catégorie',
    'choices' => [
        'Témoignage' => 'Témoignage',
        'Question médicale' => 'Question médicale',
        'Conseil' => 'Conseil',
        'Autre' => 'Autre'
    ],
    'placeholder' => 'Choisir une catégorie',
    'attr' => [
        'class' => 'form-select',
        'required' => true
    ],
    'constraints' => [
        new NotNull()
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