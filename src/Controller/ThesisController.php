<?php

namespace App\Controller;

use App\Entity\These;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThesisController extends AbstractController
{
    /**
     * @Route("/thesis", name="thesis")
     */
    public function index()
    {
        $entityManager=$this->getDoctrine()->getManager();
        $theseRepo = $entityManager->getRepository(These::class);
        $these = $theseRepo->findAll();

        if(empty($these)){
            $t1 = new These();
            $t1->setTitle('Obélix pouvait-il s’intoxiquer?');
            $t1->setPhrase('Ou les maladies transmissibles du sanglier à l’homme');
            $t1->setDescription('Les associations de chasseurs multiplient les préventions pour alerter sur les dangers de la trichinose');
            $t1->setAdresse('lelab@gmail.com');
            $entityManager->persist($t1);

            $t2 = new These();
            $t2->setTitle('De l’impact des rayons cosmiques sur le suicide des cafards néozélandais ');
            $t2->setPhrase('Résistance aux radiations des insectes');
            $t2->setDescription('Les cafards démontrent une grande résistance aux radiations, à étudier notamment dans le cadre
            du nucléaire');
            $t2->setAdresse('lelabnz@gmail.com');
            $entityManager->persist($t2);

            $t3 = new These();
            $t3->setTitle('Conflits magico-chamaniques ouverts entre les démons guatémaltèques et les séraphins avant la christianisation des Népalais du Sud');
            $t3->setPhrase("Etude de l'impact de la figure du sachant religieux");
            $t3->setDescription("Les conflits des figures de l'hégémonie de l'autorité religieuse avant la christanisation");
            $t3->setAdresse('lelabtheo@gmail.com');
            $entityManager->persist($t3);

            $entityManager->flush();
        }

        return $this->render('thesis/thesis.html.twig', [
            'these' => $theseRepo->findAll(),
        ]);
    }
}
