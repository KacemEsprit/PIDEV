<?php

namespace App\Form;

use App\Entity\ChatGroup;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChatGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du groupe',
                'attr' => [
                    'placeholder' => 'Entrez le nom du groupe',
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Décrivez le but de ce groupe',
                    'rows' => 3,
                    'class' => 'form-control'
                ]
            ])
            ->add('guidelines', TextareaType::class, [
                'label' => 'Règles du groupe',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Règles et directives pour les membres (optionnel)',
                    'rows' => 3,
                    'class' => 'form-control'
                ]
            ])
            
            ->add('members', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'multiple' => true,
                'expanded' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-select',
                    'data-live-search' => 'true'
                ],
                'label' => 'Membres'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ChatGroup::class,
        ]);
    }
}