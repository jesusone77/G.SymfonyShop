<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\Security\Http\Attribute\IsGranted;


class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(Request $resquest): Response
    { 
        $user = new User();
        dd($this->adminDashboard());
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'user_name' => $role,
        ]);
    }

    // ...

    public function adminDashboard(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED');

        
    }

}
