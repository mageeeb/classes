<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GalerieContollerController extends AbstractController
{
    #[Route('/galerie/contoller', name: 'app_galerie_contoller')]
    public function index(): Response
    {
        return $this->render('galerie_contoller/index.html.twig', [
            'controller_name' => 'GalerieContollerController',
        ]);
    }
}
