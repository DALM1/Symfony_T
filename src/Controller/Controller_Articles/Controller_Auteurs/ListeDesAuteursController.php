<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeDesAuteursController extends AbstractController
{
    #[Route('/liste/des/auteurs', name: 'liste_des_auteurs')]
    public function index(): Response
    {
        return $this->render('liste_des_auteurs/index.html.twig', [
            'controller_name' => 'ListeDesAuteursController',
        ]);
    }
}
