<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;

class FindController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     * @Template()
     */
    public function accueil(Request $request)
    {
        return $this->render('accueil.html.twig');
    }

//     /**
//     * @Route("/localisation/ville", name="ville")
//     * @Template()
//     */
//    public function villes(Request $request)
//    {
//        return $this->render('location/town.html.twig', [
//         'chickens' => $chickenRepository->findAll(),
//     ]);
//    }
}