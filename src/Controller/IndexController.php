<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\User;


class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(Request $resquest): Response
    { 
        $session = $resquest->getSession();
        // dd($session);    
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'user_name' => 'Flojo'
        ]);
    }
}
