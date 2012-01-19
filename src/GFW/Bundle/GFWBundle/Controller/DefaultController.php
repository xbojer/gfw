<?php

namespace GFW\Bundle\GFWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MainBundle:Default:index.html.twig', array('name' => $name));
    }
}
