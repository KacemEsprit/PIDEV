<?php
<<<<<<< HEAD

=======
>>>>>>> 0ed33a6b (KacemSuivi)
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints\Regex;
>>>>>>> 0ed33a6b (KacemSuivi)

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter your last name',
=======
                    new NotBlank(['message' => 'Veuillez entrer votre nom de famille.']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom de famille doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Votre nom de famille ne peut pas dépasser {{ limit }} caractères.',
>>>>>>> 0ed33a6b (KacemSuivi)
                    ]),
                ],
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter your first name',
=======
                    new NotBlank(['message' => 'Veuillez entrer votre prénom.']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre prénom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Votre prénom ne peut pas dépasser {{ limit }} caractères.',
>>>>>>> 0ed33a6b (KacemSuivi)
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter your email',
=======
                    new NotBlank(['message' => 'Veuillez entrer votre email.']),
                    new Length([
                        'max' => 180,
                        'maxMessage' => 'Votre email ne peut pas dépasser {{ limit }} caractères.',
>>>>>>> 0ed33a6b (KacemSuivi)
                    ]),
                ],
            ])
            ->add('tel', TextType::class, [
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter your phone number',
=======
                    new NotBlank(['message' => 'Veuillez entrer votre numéro de téléphone.']),
                    new Regex([
                        'pattern' => '/^\d{8}$/',
                        'message' => 'Veuillez entrer un numéro de téléphone valide (8 chiffres).',
>>>>>>> 0ed33a6b (KacemSuivi)
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter your address',
=======
                    new NotBlank(['message' => 'Veuillez entrer votre adresse.']),
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Votre adresse ne peut pas dépasser {{ limit }} caractères.',
>>>>>>> 0ed33a6b (KacemSuivi)
                    ]),
                ],
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Patient' => User::ROLE_PATIENT,
                    'Donateur' => User::ROLE_DONATEUR,
                ],
<<<<<<< HEAD
=======
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner un rôle.']),
                ],
>>>>>>> 0ed33a6b (KacemSuivi)
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'constraints' => [
<<<<<<< HEAD
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
=======
                    new NotBlank(['message' => 'Veuillez entrer un mot de passe.']),
                    new Length([
                        'min' => 6,
                        'max' => 4096,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Votre mot de passe ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ]);
>>>>>>> 0ed33a6b (KacemSuivi)
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
