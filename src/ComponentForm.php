<?php

namespace App;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ComponentForm extends AbstractType
{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
				$builder
					->add('username', TextType::class, [
						'required' => false,
						'attr' => [
							'placeholder' => 'E-Mail-Adresse oder Kundennummer',
						],
						'constraints' => [
							new NotBlank(),
						],
					])
					->add('password', PasswordType::class, [
						'required' => false,
						'always_empty' => false,
						'attr' => [
							'placeholder' => 'Passwort eingeben',
						],
						'constraints' => [
							new NotBlank(),
						],
					]);
		}

}