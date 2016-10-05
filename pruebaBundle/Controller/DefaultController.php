<?php

namespace pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('pruebaBundle:Default:index.html.twig');
    }

    public function dbAction()
    {
        return $this->render('pruebaBundle:Default:db.html.twig');
    }

    public function opAction()
    {
        return $this->render('pruebaBundle:Default:op.html.twig');
    }
}
