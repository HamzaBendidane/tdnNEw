<?php

namespace TDN\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TDNCoreBundle:Default:index.html.twig', array('name' => $name));
    }
    public function homeAction()
    {
        return $this->render('TDNCoreBundle:Pages:home.html.twig');
    }
   
    public function mainAction($mainCat)
    {
        return $this->render('TDNCoreBundle:Default:main.html.twig', array('mainCat' => $mainCat));
    }
    public function qlnAction()
    {
        return $this->render('TDNCoreBundle:Default:qln.html.twig');
    }
}
