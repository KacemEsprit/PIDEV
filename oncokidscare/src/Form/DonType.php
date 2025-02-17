<?php

namespace App\Form;

use App\Entity\Don;
use App\Entity\Compagnie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Ajout des champs du formulaire
        $builder
            ->add('type_don', ChoiceType::class, [
                'choices' => [
                    'Financier' => 'financier',
                    'Matériel' => 'materiel'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('montant', MoneyType::class, [
                'required' => false,
                'currency' => 'TND',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description_materiel', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('mode_paiement', ChoiceType::class, [
                'choices' => [
                    'Bank donation' => 'bank',
                    'Offline donation' => 'offline',
                    'Paypal' => 'paypal'
                ],
                'required' => false,
                'placeholder' => 'Sélectionnez un mode de paiement',
                'attr' => ['class' => 'form-control']
            ])
            ->add('preuve_don', FileType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Don::class,
            'is_individual_donor' => false
        ]);
    }
}
