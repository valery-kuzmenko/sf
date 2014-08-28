<?php

namespace Champ\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChampFrontendBundle:Default:index.html.twig');
    }
}
