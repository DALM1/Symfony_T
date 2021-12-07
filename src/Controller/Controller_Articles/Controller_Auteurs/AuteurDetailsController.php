<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteurDetailsController extends AbstractController
{
    #[Route('/auteur/details', name: 'auteur_details')]
    public function index(): Response
    {
        return $this->render('auteur_details/index.html.twig', [
            'controller_name' => 'AuteurDetailsController',
        ]);
    }
}
