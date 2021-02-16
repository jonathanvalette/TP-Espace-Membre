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
     * @Route("/page2", name="page2")
     */
    public function index2(): Response
    {
        return $this->render('page/homepage/homepage2.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

        /**
     * @Route("/page3", name="page3")
     */
    public function index3(): Response
    {
        return $this->render('page/homepage/homepage3.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}
