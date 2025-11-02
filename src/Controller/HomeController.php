<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    //#[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    
    #[Route('/welcome', name: 'app_welcome')]
    public function welcome(): Response
    {
        return new Response("<h2> Welcome Hanane </h2>");
    }

    #[Route('/hello/{smia}', name: 'app_Hello')]
    public function hello(string $smia): Response
    {
        return new Response("hello ".$smia." !");
    }

    //#[Route('/hi/{hanane}', name: 'app_hi')]
    public function hi(string $hanane="Anonymous"): Response
    {
        return new Response("hi ".$hanane." !");
    }
    
    
}
