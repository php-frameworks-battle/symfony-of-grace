<?php

namespace SymfonyOfGrace\BattleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SymfonyOfGraceBattleBundle:Default:index.html.twig', array('name' => $name));
    }
}
