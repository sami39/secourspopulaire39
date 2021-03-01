<?php

namespace App\Controller;

use App\Entity\Adherents;
use App\Form\AdherentType;
use App\Repository\AdherentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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


  /**
     * @Route("/AjoutAdhrent", name="AjoutAdhrent")
     */
    public function new(Request $request,AdherentsRepository $AdherentsRepository){
        $projects= new Adherents();
        $form =$this->createForm(AdherentType::class,$projects);
        $form->handleRequest($request);
        $Adherents=$AdherentsRepository->findAll();
        if($form->isSubmitted() && $form->isValid()){
       $entityManager =$this->getDoctrine()->getManager();
       
       
       
       $entityManager->persist($Adherents);
       $entityManager->flush();
       return $this->redirect($request->getUri());
        }
        return $this->render('admin/AjoutAdhrent.html.twig',[
          'form'=>$form->createView(),
          'projets'=>$Adherents
        ]);
      
      }

}
