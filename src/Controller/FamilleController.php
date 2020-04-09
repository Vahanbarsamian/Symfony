<?php

namespace App\Controller;

use App\Entity\Famille;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="list_famille")
     */
    public function listAction()
    {
        $repository = $this->getDoctrine()->getRepository(Famille::class);
        $familles =  $repository->findAll();
        return $this->render('famille/familles.html.twig', [
            'titre' => 'Liste des familles',
            "familles" => $familles
        ]);
    }
}