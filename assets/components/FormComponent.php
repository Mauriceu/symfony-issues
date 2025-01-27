<?php

namespace App\AssetComponents;

use App\ComponentForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(template: '@components/form-component.html.twig')]
class FormComponent extends AbstractController
{
    use DefaultActionTrait;
		use ComponentWithFormTrait;

		protected function instantiateForm(): FormInterface
		{
				return $this->createForm(ComponentForm::class);
		}

		public function login(): void
		{
				throw new UnprocessableEntityHttpException();
		}
}