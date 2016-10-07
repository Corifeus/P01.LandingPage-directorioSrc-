<?php

namespace EntregableBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EntregableBundle:Default:index.html.twig');
    }

    public function producto1Action()
    {
        return $this->render('EntregableBundle:Default:producto1.html.twig');
    }

    public function producto2Action()
    {
        return $this->render('EntregableBundle:Default:producto2.html.twig');
    }
}
