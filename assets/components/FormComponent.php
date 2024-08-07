<?php

namespace App\Components;

use App\Form\FormModel;
use App\Form\FormType;
use DateTime;
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

    #[LiveProp(writable: true, useSerializerForHydration: true, format: 'Y-m-d')]
    public DateTime $from;

    public function __construct()
    {
        $this->from = new DateTime();
    }
}