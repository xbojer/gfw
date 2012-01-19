<?php

namespace GFW\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        if(empty($name)) $name = 'Bojer test :P';
        return $this->render('MainBundle:Default:index.html.twig', array('name' => $name));
    }
}
