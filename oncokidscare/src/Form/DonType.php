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
        $builder
            ->add('compagnies', EntityType::class, [
                'class' => Compagnie::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true,
                'required' => true,
                'label' => 'Compagnies *',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('type_don', ChoiceType::class, [
                'choices' => [
                    'Financier' => 'financier',
                    'Matériel' => 'materiel'
                ],
                'attr' => ['class' => 'form-control']
            ])
            ->add('montant', MoneyType::class, [
                'required' => false,
                'currency' => 'EUR',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description_materiel', TextareaType::class, [
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('mode_paiement', ChoiceType::class, [
                'choices' => [
                    'Carte bancaire' => 'carte',
                    'Virement' => 'virement',
                    'Chèque' => 'cheque',
                    'Espèces' => 'especes'
                ],
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
        ]);
    }
}