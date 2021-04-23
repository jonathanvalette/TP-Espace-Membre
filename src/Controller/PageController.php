<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index(): Response
    {
        return $this->render('page/homepage/homepage.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

        /**
     * @Route("/resume", name="resume")
     */
    public function index2(): Response
    {
        return $this->render('page/homepage/homepage2.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

}
