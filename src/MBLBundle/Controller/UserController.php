<?php

namespace MBLBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MBL/Users/index.html.twig');

    }

    public function homepageProfilAction()
    {
        return $this->render('@MBL/Users/homepageProfil.html.twig');

    }
    public function editProfilAction()
    {
        return $this->render('@MBL/Users/editProfil.html.twig');

    }
    public function showProfilAction()
    {
        return $this->render('@MBL/Users/showProfil.html.twig');

    }
}
