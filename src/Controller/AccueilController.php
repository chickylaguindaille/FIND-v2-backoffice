<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;

use App\Entity\Ville;
use App\Form\VilleType;
use App\Repository\VilleRepository;
use App\Entity\Corporations;
use App\Form\CorporationsType;
use App\Repository\CorporationsRepository;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     * @Template()
     */
    public function accueil(VilleRepository $villeRepository, Request $request)
    {
        return $this->render('accueil.html.twig', [
            'villes' => $villeRepository->findAll(), 'corporations' => $villeRepository->findAll()
        ]);
    }
}