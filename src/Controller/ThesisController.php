<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThesisController extends AbstractController
{
    /**
     * @Route("/thesis", name="thesis")
     */
    public function index()
    {
        return $this->render('thesis/thesis.html.twig', [
            'controller_name' => 'ThesisController',
        ]);
    }
}
