<?php

namespace Maozedong\PaymentBridgeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MaozedongPaymentBridgeBundle:Default:index.html.twig', array('name' => $name));
    }
}
