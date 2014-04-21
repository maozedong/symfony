<?php

namespace Maozedong\SecurityTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /**
         * @var \Maozedong\SecurityTestBundle\Entity\User $user
         */
        $user = $this->get('security.context')->getToken()->getUser();
        if(is_a($user, '\Maozedong\SecurityTestBundle\Entity\User')){
            $name = $user->getUsername();
        }else{
            $name = 'unregistered bastard';
        }
        return $this->render('MaozedongSecurityTestBundle:Default:index.html.twig', array('name' => $name));
    }

    public function cartViewAction(){
        return $this->render('MaozedongSecurityTestBundle:Default:cartView.html.twig', array());
    }
}
