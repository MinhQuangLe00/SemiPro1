<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UserController extends AbstractController
{


    #[Route('/user', name: 'app_user')]

    public function index(ManagerRegistry $doctrine): Response
    {
        $users=$doctrine->getRepository('App\Entity\User')->findAll();


        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',

        ]);
    }
    /**
     * @Route("Admin/user/delete/{id}", name="user_delete")
     */
    public function deleteAction(ManagerRegistry $doctrine,$id):Response
    {$em = $doctrine->getManager();
        $users = $em->getRepository('App\Entity\User')->find($id);

        $em->remove($users);
        $em->flush();


        $this->addFlash(
            'error',
            'users deleted'
        );

        return $this->redirectToRoute('app_user');
    }


}