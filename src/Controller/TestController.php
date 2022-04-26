<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
    dd("Hello !!!");
    
}
// Je demade a symfony de me passer une fonction $request (ou $toto) t dans celle-ci je veux recevoir un objet de la classe Request
/**
 * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"}, host="localhost", schemes={"http", "https"})
 */
public function test(Request $request, $age)
{ 
    // $request = Request::createFromGlobals();
    // Ce dump pour voir les propriété de l'objet request
    //dump($request);
    //Si je ne trouve pas l'élément âge dans la query alors je prendrais o par défaut
    //query représente les param passé en GET et a crée la requête dans $request
    // $age = $request->attributes->get('age');

    // Ancien php:
    // $age = 0;
    // if(!empty($_GET['age'])){
    //     $age = $_GET['age'];
    // }


    // Tous les controller doivent OBLIGATOIREMENT retourner un response (api symfony)
return new Response("Tu as $age ans");
    // dd("Tu as $age ans");
    
}
}