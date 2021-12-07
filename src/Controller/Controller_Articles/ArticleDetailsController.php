<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleDetailsController extends AbstractController
{
    #[Route('/article/details', name: 'article_details')]
    public function index(): Response
    {
        return $this->render('article_details/index.html.twig', [
            'controller_name' => 'ArticleDetailsController',
        ]);
    }
}
