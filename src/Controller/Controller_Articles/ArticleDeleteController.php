<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleDeleteController extends AbstractController
{
    #[Route('/article/delete', name: 'article_delete')]
    public function index(): Response
    {
        return $this->render('article_delete/index.html.twig', [
            'controller_name' => 'ArticleDeleteController',
        ]);
    }
}
