<?php

namespace App\Controller;

use App\Entity\Adherents;
use App\Form\AdherentType;
use Doctrine\ORM\Mapping\Id;
use App\Repository\AdherentsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
  /**
   * @Route("/", name="admin")
   */
  public function index(): Response
  {
    return $this->render('admin/index.html.twig', [
      'controller_name' => 'AdminController',
    ]);
  }


  /**
   * @Route("/AficheAdhrent", name="home")
   */
  public function AficheAdhrent(AdherentsRepository $AdherentsRepository): Response
  {
    $Adherents = $AdherentsRepository->findAll();

    return $this->render('admin/Adherent.html.twig', [
      'Adherents' => $Adherents
    ]);
  }

  /**
   * @Route("/AjoutAdhrent", name="AjoutAdhrent")
   */
  public function AjoutAdhrent(Request $request, AdherentsRepository $adherentsRepository)
  {
    $projects = new Adherents();
    $form = $this->createForm(AdherentType::class, $projects);
    $form->handleRequest($request);
    $projets = $adherentsRepository->findAll();

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($projects);
      $entityManager->flush();
      return $this->redirectToRoute('home');
    }

    return $this->render('admin/AjoutAdhrent.html.twig', [
      'form' => $form->createView()
    ]);
  }

  /**
   * @Route("/editAdherent/{id}", name="editAdherent")
   */

  public function edit(Request $request, Adherents $projects): Response
  {

    $entityManager = $this->getDoctrine()->getManager();


    $form = $this->createForm(AdherentType::class, $projects);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

      $entityManager->persist($projects);
      $entityManager->flush();
      return $this->redirectToRoute('home');
    }
    return $this->render('admin/edit.html.twig', [
      'editForm' => $form->createView()
    ]);
  }



  /**
   * @Route("deleteadherent/{id}", name="delete_adherent")
   */
  public function delete(Request $request, Adherents $projects): Response
  {

    $entityManager = $this->getDoctrine()->getManager();





    $entityManager->remove($projects);
    $entityManager->flush();
    return $this->redirectToRoute('home');
  }


  
  /**
   * @Route("Afichepersone/{id} ", name="onepersonne")
   */
  public function Show(AdherentsRepository $AdherentsRepository,$id): Response
  {
    
    $Adherents = $AdherentsRepository->findby(['id'=>$id]);

    return $this->render('admin/unadherent.html.twig', [
      'Adherents' => $Adherents
    ]);
  }
}