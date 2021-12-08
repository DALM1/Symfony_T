<?php

namespace App\Controller;

use App\Entity\Dtb;
use App\Form\DtbType;
use App\Repository\DtbRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dtb')]
class DtbController extends AbstractController
{
    #[Route('/', name: 'dtb_index', methods: ['GET'])]
    public function index(DtbRepository $dtbRepository): Response
    {
        return $this->render('dtb/index.html.twig', [
            'dtbs' => $dtbRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'dtb_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dtb = new Dtb();
        $form = $this->createForm(DtbType::class, $dtb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dtb);
            $entityManager->flush();

            return $this->redirectToRoute('dtb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dtb/new.html.twig', [
            'dtb' => $dtb,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'dtb_show', methods: ['GET'])]
    public function show(Dtb $dtb): Response
    {
        return $this->render('dtb/show.html.twig', [
            'dtb' => $dtb,
        ]);
    }

    #[Route('/{id}/edit', name: 'dtb_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dtb $dtb, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DtbType::class, $dtb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('dtb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dtb/edit.html.twig', [
            'dtb' => $dtb,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'dtb_delete', methods: ['POST'])]
    public function delete(Request $request, Dtb $dtb, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dtb->getId(), $request->request->get('_token'))) {
            $entityManager->remove($dtb);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dtb_index', [], Response::HTTP_SEE_OTHER);
    }
}
