<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="list_famille")
     */
    public function listAction(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'titre'    => 'Liste des familles',
            "familles" => $familles,
        ]);
    }
    
    /**
     * @Route("/famille/{id}", name="get_famille")
     */
    public function getAction(Famille $famille)
    {
        return $this->render('famille/get_famille.html.twig', [
            'titre'    => 'Animaux de la famille : '.$famille->getLibelle(),
            "famille" => $famille,
        ]);
    }
}