<?php

namespace MBLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MBLBundle:Default:index.html.twig');
    }
}
