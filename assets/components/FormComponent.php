<?php

namespace App\Components;

use App\Form\FormModel;
use App\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent('FormComponent', template: '@components/form.html.twig')]
class FormComponent extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    #[LiveProp(writable: true)]
    public ?FormModel $initialFormData = null;

    protected function instantiateForm(): FormInterface
    {
        $this->initialFormData = $this->initialFormData ?? new FormModel();
        return $this->createForm(FormType::class, $this->initialFormData);
    }

    #[LiveAction]
    public function save(): Response
    {
        $this->submitForm();

        return new Response('success');
    }
}