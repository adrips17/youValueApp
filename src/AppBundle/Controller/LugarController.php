<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LugarController extends Controller
{

    public function allAction(Request $request)
    {
        return $this->render('AppBundle:Lugares:all.html.twig');
    }



}
