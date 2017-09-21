<?php

namespace MicroCMS\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints as Assert;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', TextType::class, array(
                    'label'       => "Nom",
                    'required'    => true,
                    'constraints' => new Assert\NotBlank(),
                ))
                ->add('password', RepeatedType::class, array(
                    'type'            => PasswordType::class,
                    'constraints'     => new Assert\Length(['min' => 5]),
                    'invalid_message' => 'Les mots de passes ne sont pas identique !',
                    'options'         => array(
                        'required' => true
                    ),
                    'first_options'   => array(
                        'label'       => 'Mot de passe',
                        'required'    => true,
                        'attr'        => ['placeholder' => 'Minimum 6 caractères'],
                    ),
                    'second_options'  => array(
                        'label'       => 'Verification',
                        'attr'        => ['placeholder' => 'Répetez le mot de passe'],
                        'required'    => true,
                    ),
                ))
                ->add('role', ChoiceType::class, array(
                    'choices' => array(
                        'Admin' => 'ROLE_ADMIN',
                        'User'  => 'ROLE_USER'
                    )
        ));
    }

    public function getName() {
        return 'user';
    }

}
