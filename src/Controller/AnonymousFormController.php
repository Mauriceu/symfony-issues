<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AnonymousFormController extends AbstractController
{
    #[Route("/anonymous_form", name: "anonymous_form")]
    public function index(): Response
    {
        return $this->render('anonymous_form.html.twig');
    }
}
