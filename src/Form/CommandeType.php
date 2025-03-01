<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CommandeType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $medicaments = $this->entityManager->getRepository(Medicament::class)->findAll();
        
        foreach ($medicaments as $medicament) {
            $builder->add('quantite_' . $medicament->getId(), IntegerType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'min' => 0,
                    'class' => 'form-control quantite-input'
                ],
                'label' => false
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
} 