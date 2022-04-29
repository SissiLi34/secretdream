<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{prenom?world}", name="hello")
     * */
    // public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig, Detector $detector)

    public function hello($prenom)
    {
        // dump($detector->detect(101));
        // dump($detector->detect(10));


        // dump($twig);

        // dump($slugify->slugify("Hello World"));

        // $logger->info("Mon message de log");
        // $logger->error("An error occured");

        // $tva = $calculator->calcul(100);

        // dump($tva);


        return $this->render('hello.html.twig', [
            // je veux le prénom passé dans l'url qui vient du route
            'prenom' => $prenom,
            'age' => [
                12,
                18,
                29,
                15
            ],
            'formateur' => [
                'prenom' => 'Lior',
                'nom' => 'Chamla',
                'age' => 33
            ],
            'formateur2' => [
                'prenom' => 'Jojo',
                'nom' => 'Dupond',
                'age' => '45'
            ],
            'formateur3' => [
                'prenom' => 'Dudu',
                'nom' => 'Bertin',
                'age' => '50'
            ]
            // boucle au sein d'un tableau for each
            // 'prenoms' => [
            //     'Sissi',
            //     'Mathilde',
            //     'Inconnu'
            // ]
        ]);
        return new Response($html);
        // return new Response("Hello $prenom");
    }

    /**
     * @Route("/exemple", name="example")
     */
    public function example()
    {
        // j'appelle la function render dans laquelle les functions identiques sont regroupées
        return $this->render('example.html.twig', [
            'age' => 33
        ]);
    }
}
