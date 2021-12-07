<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteurDeleteController extends AbstractController
{
    #[Route('/auteur/delete', name: 'auteur_delete')]
    public function index(): Response
    {
        return $this->render('auteur_delete/index.html.twig', [
            'controller_name' => 'AuteurDeleteController',
        ]);
    }
}
