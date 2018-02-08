<?php

namespace Aymen\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        $user = ($session->get('user'))?$session->get('user'):'anonyme';
        return $this->render('AymenFirstBundle:Default:index.html.twig',
            array(
            'user'=>$user
        ));

    }

    public function helloAction(Request $request, $nom)
    {
        $session = $request->getSession();

        $session->set('user',$nom);

        return $this->render('AymenFirstBundle:Default:hello.html.twig'
        ,array(
            'esm'=>$nom
        ));
    }
}
