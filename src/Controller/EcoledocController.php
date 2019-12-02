<?php

namespace App\Controller;

use App\Service\getDataFromBase;
use App\Entity\EcoleDoc;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EcoledocController extends AbstractController
{
    /**
     * @Route("/ecoledoc", name="ecoledoc")
     */
    // public function index(getDataFromBase $gd)
    public function index()
    {

        $entityManager=$this->getDoctrine()->getManager();
        $ecoleRepo = $entityManager->getRepository(EcoleDoc::class);
        $ecole = $ecoleRepo->findAll();

        // $gd->setEntity('EColeDoc');

        return $this->render('ecoledoc/index.html.twig', [
            // 'ecoles'=>$gd->getDatas(),
            'ecoles' => $ecoleRepo->findAll(),
        ]);
    }
}
