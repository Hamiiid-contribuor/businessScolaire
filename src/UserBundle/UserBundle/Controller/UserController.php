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

    public function activateUserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $user->setEnabled(true);
        $em->flush($user);

        return $this->redirectToRoute('list_of_user');
    }

    public function disactivateUserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->find($id);
        $user->setEnabled(false);
        $em->flush($user);

        return $this->redirectToRoute('list_of_user');
    }

    public function deleteUserAction(User $user) {

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush($user);

        return $this->redirectToRoute('list_of_user');
    }

}
