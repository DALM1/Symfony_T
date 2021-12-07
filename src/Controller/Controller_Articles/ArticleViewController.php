<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleViewController extends AbstractController
{
    #[Route('/article/view', name: 'article_view')]
    public function index(): Response
    {
        return $this->render('article_view/index.html.twig', [
            'controller_name' => 'ArticleViewController',
        ]);
    }
}
