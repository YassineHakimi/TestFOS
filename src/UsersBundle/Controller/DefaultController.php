<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /*public function indexAction()
    {
        return $this->render('UsersBundle:Default:index.html.twig');
    }*/

    public function indexAction()
    {
        return $this->render('::base.html.twig');
    }

    public function loginAction()
    {
        return $this->render('UsersBundle:Default:login.html.twig');
    }
}
