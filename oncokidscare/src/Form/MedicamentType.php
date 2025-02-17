<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du médicament'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('quantite_stock', IntegerType::class, [
                'label' => 'Quantité en stock'
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Prix (TND)',
                'currency' => 'TND'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}