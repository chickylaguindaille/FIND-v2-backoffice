<?php

namespace App\Controller;

use App\Entity\Corporations;
use App\Form\CorporationsType;
use App\Repository\CorporationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/corporations')]
class CorporationsController extends AbstractController
{
    #[Route('/', name: 'app_corporations_index', methods: ['GET'])]
    public function index(CorporationsRepository $corporationsRepository): Response
    {
        return $this->render('corporations/index.html.twig', [
            'corporations' => $corporationsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_corporations_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CorporationsRepository $corporationsRepository): Response
    {
        $corporation = new Corporations();
        $form = $this->createForm(CorporationsType::class, $corporation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $corporationsRepository->save($corporation, true);

            return $this->redirectToRoute('app_corporations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('corporations/new.html.twig', [
            'corporation' => $corporation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_corporations_show', methods: ['GET'])]
    public function show(Corporations $corporation): Response
    {
        return $this->render('corporations/show.html.twig', [
            'corporation' => $corporation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_corporations_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Corporations $corporation, CorporationsRepository $corporationsRepository): Response
    {
        $form = $this->createForm(CorporationsType::class, $corporation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $corporationsRepository->save($corporation, true);

            return $this->redirectToRoute('app_corporations_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('corporations/edit.html.twig', [
            'corporation' => $corporation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_corporations_delete', methods: ['POST'])]
    public function delete(Request $request, Corporations $corporation, CorporationsRepository $corporationsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$corporation->getId(), $request->request->get('_token'))) {
            $corporationsRepository->remove($corporation, true);
        }

        return $this->redirectToRoute('app_corporations_index', [], Response::HTTP_SEE_OTHER);
    }
}
