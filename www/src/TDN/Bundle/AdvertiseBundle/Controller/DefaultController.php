<?php

namespace TDN\Bundle\AdvertiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TDNAdvertiseBundle:Default:index.html.twig', array('name' => $name));
    }
}
