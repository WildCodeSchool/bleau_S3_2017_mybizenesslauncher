<?php

namespace MBLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MBL/Users/index.html.twig');

    }

    public function userHomepageAction()
    {
        return $this->render('@MBL/Users/UserHomePage.html.twig');

    }
    public function createProfilAction()
    {
        return $this->render('@MBL/Users/createProfil.html.twig');

    }
}
