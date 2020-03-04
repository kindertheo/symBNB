<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController{

    public function index(){
        return new Response("Hello default controller");
    }

    /**
     *
     * @return Response
     */
    public function hello(){
        return new Response("Hello function");
    }
}