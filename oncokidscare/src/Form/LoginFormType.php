<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'Enter your email'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter an email.']),
                    new Email(['message' => 'Please enter a valid email address.']),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'attr' => ['placeholder' => 'Enter your password'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a password.']),
                ],
            ])
            ->add('_remember_me', CheckboxType::class, [
                'label' => 'Remember me',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Disable CSRF protection here because Symfony's security system already handles it
            //'csrf_protection' => false,
        ]);
    }}
