<?php

namespace ArmSacrificeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArmSacrificeBundle:Default:index.html.twig');
    }
}
