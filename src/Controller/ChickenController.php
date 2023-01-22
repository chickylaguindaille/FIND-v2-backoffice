<?php

namespace App\Controller;

use App\Entity\Chicken;
use App\Form\ChickenType;
use App\Repository\ChickenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chicken')]
class ChickenController extends AbstractController
{
    #[Route('/', name: 'app_chicken_index', methods: ['GET'])]
    public function index(ChickenRepository $chickenRepository): Response
    {
        return $this->render('chicken/index.html.twig', [
            'chickens' => $chickenRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_chicken_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ChickenRepository $chickenRepository): Response
    {
        $chicken = new Chicken();
        $form = $this->createForm(ChickenType::class, $chicken);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chickenRepository->save($chicken, true);

            return $this->redirectToRoute('app_chicken_index', [], Response::HTTP_SEE_OTHER);
        }
        // exit(var_dump($form));

        return $this->renderForm('chicken/new.html.twig', [
            'chicken' => $chicken, 
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chicken_show', methods: ['GET'])]
    public function show(Chicken $chicken): Response
    {
        return $this->render('chicken/show.html.twig', [
            'chicken' => $chicken,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chicken_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chicken $chicken, ChickenRepository $chickenRepository): Response
    {
        $form = $this->createForm(ChickenType::class, $chicken);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chickenRepository->save($chicken, true);

            return $this->redirectToRoute('app_chicken_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chicken/edit.html.twig', [
            'chicken' => $chicken,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chicken_delete', methods: ['POST'])]
    public function delete(Request $request, Chicken $chicken, ChickenRepository $chickenRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chicken->getId(), $request->request->get('_token'))) {
            $chickenRepository->remove($chicken, true);
        }

        return $this->redirectToRoute('app_chicken_index', [], Response::HTTP_SEE_OTHER);
    }
}
