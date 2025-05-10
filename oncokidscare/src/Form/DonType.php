<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Don;

class DonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_don', ChoiceType::class, [
                'choices' => [
                    'Financier' => 'financier',
                    'Matériel' => 'materiel'
                ],
                'expanded' => false,
                'multiple' => false,
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
                    'Stripe' => 'stripe'
                ],
                'required' => false,
                'attr' => ['class' => 'form-control js-payment-mode']
            ])
            ->add('preuve_don', FileType::class, [
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control']
            ]);

        // Ajout d'un écouteur d'événement pour gérer les validations conditionnelles
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();
            $form = $event->getForm();

            if (isset($data['mode_paiement'])) {
                if ($data['mode_paiement'] === 'stripe') {
                    $form->add('preuve_don', FileType::class, [
                        'required' => false,
                        'mapped' => false,
                        'attr' => ['class' => 'form-control']
                    ]);
                } elseif ($data['mode_paiement'] === 'bank') {
                    $form->add('preuve_don', FileType::class, [
                        'required' => true,
                        'mapped' => false,
                        'attr' => ['class' => 'form-control']
                    ]);
                }
            }
        });

        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $data = $event->getData();

            if ($data instanceof Don && $data->getModePaiement() === 'stripe') {
                $data->setPreuveDon(null);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Don::class,
            'is_individual_donor' => false,
        ]);

        $resolver->setAllowedTypes('is_individual_donor', 'bool');
    }
}
