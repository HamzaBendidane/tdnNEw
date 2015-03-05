<?php

namespace TDN\Bundle\NanaBundle\Tests\Controller;

use TDN\Bundle\NanaBundle\Controller\MyTDNController;

class MyTDNControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $controleur = new MyTDNController();
        $result = $controleur->followAction(5);
        // vérifie que votre classe a correctement calculé!
        $this->assertEquals(42, $result);
    }
}