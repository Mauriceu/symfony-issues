<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class AuthenticatedFormController extends AbstractController
{
    #[Route("/authenticated_form", name: "authenticated_form")]
    public function index(): Response
    {
        return $this->render('authenticated_form.html.twig');
    }
}
