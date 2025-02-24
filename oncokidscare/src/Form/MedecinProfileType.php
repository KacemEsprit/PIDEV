<?php

namespace App\Form;


use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Regex;

class MedecinProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'label' => 'First Name',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your first name']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Your first name must be at least {{ limit }} characters long',
                        'maxMessage' => 'Your first name cannot be longer than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Last Name',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your last name']),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Your last name must be at least {{ limit }} characters long',
                        'maxMessage' => 'Your last name cannot be longer than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email']),
                    new Email(['message' => 'Please enter a valid email address']),
                    new Length([
                        'max' => 180,
                        'maxMessage' => 'Your email cannot be longer than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('tel', TextType::class, [
                'label' => 'Phone',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9\+\-\(\) ]{8,20}$/',
                        'message' => 'Please enter a valid phone number',
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Address',
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Your address cannot be longer than {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('picture', FileType::class, [
                'label' => 'Profile Picture',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'd-none',
                    'accept' => 'image/*',
                    'onchange' => 'previewImage(this)',
                    'id' => 'profile-picture-input'
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG, PNG, GIF)',
                        'maxSizeMessage' => 'The file is too large ({{ size }} {{ suffix }}). Maximum size is {{ limit }} {{ suffix }}.',
                    ]),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'New Password (leave blank to keep current)',
                'required' => false,
                'mapped' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password must be at least {{ limit }} characters long',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}