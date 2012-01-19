<?php

namespace GFW\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name = 'Test Bojera')
    {
        return $this->render('MainBundle:Default:index.html.twig', array('name' => $name));
    }
}
