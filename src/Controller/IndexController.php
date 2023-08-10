<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;


class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(Request $resquest): Response
    { 
        $user = new User();
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'user_name' => 'Flojo'
        ]);
    }

}
