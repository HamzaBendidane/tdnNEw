<?php

namespace TDN\Bundle\NanaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TDNNanaBundle:Default:index.html.twig', array('name' => $name));
    }
}
