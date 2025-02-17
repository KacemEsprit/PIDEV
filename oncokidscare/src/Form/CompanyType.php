<?php

namespace App\Form;

use App\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                ]
            ])
            ->add('siret', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le SIRET est obligatoire']),
                    new Length([
                        'exact' => 14,
                        'exactMessage' => 'Le SIRET doit contenir exactement 14 caractères',
                    ])
                ]
            ])
            ->add('addresse', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse est obligatoire']),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Company::class,
        ]);
    }
}
