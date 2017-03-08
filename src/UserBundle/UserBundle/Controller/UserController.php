<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of UserController
 *
 * @author hamid
 */
class UserController extends Controller {

//put your code here


    public function listUserAction() {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('UserBundle:User')->findAll();

        return $this->render('UserBundle:Default:list.html.twig', array(
                    'users' => $users
        ));
    }

}
