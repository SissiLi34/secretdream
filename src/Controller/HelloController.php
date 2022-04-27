<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{prenom?world}", name="hello")
     * */
    public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig)
    {    
        dump($twig);

        dump($slugify->slugify("Hello World"));

        $logger->info("Mon message de log");
        $logger->error("An error occured");

        $tva = $calculator->calcul(100);

        dump($tva);

        return new Response("Hello $prenom");
    }
}
