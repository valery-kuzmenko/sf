<?php

namespace Champ\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserProfileController extends Controller
{
    public function indexAction()
    {
        return $this->render('ChampFrontendBundle:UserProfile:index.html.twig');
    }
}
