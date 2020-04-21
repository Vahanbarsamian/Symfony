<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continents", name="list_continents")
     */
    public function listAction(ContinentRepository $repo)
    {
        $continents = $repo->findAll();
        return $this->render('continent/list_continents.html.twig', [
            'titre' => 'Liste de tous les continents',
            'continents' => $continents,
        ]);
    }

    /**
     * @Route("/continent/{id}", name="get_continent")
     *
     * @param [type] $id
     * @return void
     */
    public function getAction(Continent $continent, ContinentRepository $repo)
    {
        $animaux = $continent->getAnimaux();
        $continents = $repo->findAll();
        return $this->render('continent/get_continent.html.twig', [
            'continents' => $continents,
            'continent' => $continent,
            'animaux' => $animaux,
        ]);
    }
}
