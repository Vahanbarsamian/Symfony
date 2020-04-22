<?php
    /**
     * Continent Controller
     */
namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * This controller gives methods to call all or one continent
     */
class ContinentController extends AbstractController
{
    /**
     * This method return all continents
     * 
     * @param repository ContinentRepository $repo call continent repository
     * 
     * @return array
     *
     * @Route("/continents", name="list_continents")
     */
    public function listAction(ContinentRepository $repo)
    {
        $continents = $repo->findAll();
        return $this->render(
            'continent/list_continents.html.twig',
            [
                'titre' => 'Liste de tous les continents',
                'continents' => $continents,
            ]
        );
    }

    /**
     * This method return only one continent
     * 
     * @param class Continent                $continent represent a continent
     * @param repository ContinentRepository $repo      call methods 
     *
     * @return object
     * 
     * @Route("/continent/{id}", name="get_continent")
     */
    public function getAction(Continent $continent, ContinentRepository $repo)
    {
        $animaux = $continent->getAnimaux();
        $continents = $repo->findAll();
        return $this->render(
            'continent/get_continent.html.twig',
            [
                'continents' => $continents,
                'continent' => $continent,
                'animaux' => $animaux,
            ]
        );
    }
}
