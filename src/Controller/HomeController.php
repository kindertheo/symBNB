<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\UserRepository;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

 /**
  * @Route("/", name="homepage")
  */
 public function home(AdRepository $adRepo, UserRepository $userRepo)
 {
     //return new Response("hello homecontroller");
     return $this->render("home.html.twig",
     [
        'ads' => $adRepo->findBestAds(3),
        'users' => $userRepo->findBestUsers(2)
     ]
    );
 }

 /**
 * @Route("/hello/{prenom}/age/{age}", name="hello", requirements={"age"="\d+"})
 * @Route("/hello", name="hello_simple")
 * @Route("/hello/eric/age/41", name="hello_eric")
 * @Route("/hello/{prenom}", name="hello_prenom")
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