<?php

namespace App\Controller;

use App\Repository\AdherentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    
    /**
     * @Route("/", name="home")
     */
    public function AficheAdhrent(AdherentsRepository $AdherentsRepository): Response
    { $Adherents=$AdherentsRepository->findAll();
        return $this->render('admin/Adherent.html.twig',[
      
          'Adherents'=>$Adherents
        ]);
    }




}
