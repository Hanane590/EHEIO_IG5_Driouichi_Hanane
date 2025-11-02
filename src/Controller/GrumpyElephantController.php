<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GrumpyElephantController extends AbstractController
{
    #[Route('/grumpy/elephant', name: 'app_grumpy_elephant')]
    public function index(): Response
    {
        return $this->render('grumpy_elephant/index.html.twig', [
            'controller_name' => 'GrumpyElephantController',
        ]);
    }
}
