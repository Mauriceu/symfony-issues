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
					->add('some_field', TextType::class, [
						'required' => false,
						'attr' => [
							'placeholder' => 'Some form field',
						],
						'constraints' => [
							new NotBlank(),
						],
					]);
		}

}