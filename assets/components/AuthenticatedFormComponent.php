<?php

namespace App\AssetComponents;

use App\ComponentForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(template: '@components/authenticated-form-component.html.twig')]
#[IsGranted('ROLE_ADMIN')]
class AuthenticatedFormComponent extends AbstractController
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