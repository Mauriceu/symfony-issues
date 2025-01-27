<?php

namespace App\AssetComponents;

use App\ComponentForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(template: '@components/anonymous-form-component.html.twig')]
class AnonymousFormComponent extends AbstractController
{
    use DefaultActionTrait;
		use ComponentWithFormTrait;

		protected function instantiateForm(): FormInterface
		{
				return $this->createForm(ComponentForm::class);
		}

		#[LiveAction]
		public function save(): Response
		{
				return new JsonResponse(['success' => true]);
		}
}