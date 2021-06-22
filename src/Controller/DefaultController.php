<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {

    /**
     * @Route("/", name="homepage")
     */
    public function homepage() 
    {
        return $this->render('homepage/homepage.html.twig');
    }

}