<?php

namespace App\Controller;

use App\Repository\AdherentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    /**
     * @Route("/search", name="search_test")
     */
    public function search(Request $request, AdherentsRepository $adherentsRepository)
    {
        $name = $request->query->get('name');
        
        $aherents = $adherentsRepository->search($name);
        dd($aherents);
    }
}
