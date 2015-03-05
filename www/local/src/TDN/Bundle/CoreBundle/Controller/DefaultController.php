<?php

namespace TDN\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TDNCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
