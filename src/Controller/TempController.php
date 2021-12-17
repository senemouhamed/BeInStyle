<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TempController extends AbstractController
{
    /**
     * @Route("/temp", name="temp")
     */
    public function index(): Response
    {
        return $this->render('temp/index.html.twig', [
            'controller_name' => 'TempController',
        ]);
    }
}
