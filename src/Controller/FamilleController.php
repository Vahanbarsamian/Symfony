<?php
    /**
     * Famille Controller
     */

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * This controller gives methods to call all or one family
     */
class FamilleController extends AbstractController
{
    /**
     * Return all families
     * 
     * @param repository FamilleRepository $repository is its representation
     * 
     * @return array
     * 
     * @Route("/familles", name="list_famille")
     */
    public function listAction(FamilleRepository $repository)
    {
        $familles = $repository->findAll();
        return $this->render(
            'famille/familles.html.twig',
            [
                'titre'    => 'Liste des familles',
                "familles" => $familles,
            ]
        );
    }
    
    /**
     * Return only one family
     * 
     * @param class Famille $famille represent a family
     * 
     * @return object
     * 
     * @Route("/famille/{id}", name="get_famille")
     */
    public function getAction(Famille $famille)
    {
        return $this->render(
            'famille/get_famille.html.twig',
            [
                'titre'    => 'Animaux de la famille : '.$famille->getLibelle(),
                "famille" => $famille,
            ]
        );
    }
}