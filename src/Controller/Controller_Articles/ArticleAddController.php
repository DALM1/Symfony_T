<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleAddController extends AbstractController
{
    #[Route('/article/add', name: 'article_add')]
    public function index(): Response
    {
        return $this->render('article_add/index.html.twig', [
            'controller_name' => 'ArticleAddController',
        ]);
    }
}
