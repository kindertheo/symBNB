<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        //return new Response("hello homecontroller");
        return $this->render("home.html.twig");
    }

    /**
    * @Route("/hello/{prenom}/age/{age}", name="hello", requirements={"age"="\d+"})
    * @Route("/hello")
    * @Route("/hello/{prenom}", name="hello_eric")
    *
    * @return void
    */
    public function hello($prenom = "Anonyme", $age = 18)
    {
        return $this->render(
            "hello.html.twig",
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }

}