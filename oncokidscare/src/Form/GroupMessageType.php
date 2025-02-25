<?php

namespace App\Form;

use App\Entity\GroupMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GroupMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Écrivez votre message...',
                    'rows' => 3,
                    'class' => 'form-control message-input'
                ]
            ])
            ->add('voiceUrl', HiddenType::class, [
                'required' => false
            ])
            ->add('type', HiddenType::class, [
                'required' => false
            ])
            ->add('duration', HiddenType::class, [
                'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GroupMessage::class,
        ]);
    }
}