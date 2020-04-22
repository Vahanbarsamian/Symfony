<?php

/**
 * Animal controller
 */
namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * This controller gives methods to call all or one Animal
     */
class AnimalController extends AbstractController
{
    /**
     * Return all animals
     * 
     * @param AnimalRepository $repository call animal repository
     *
     * @return array
     * 
     * @Route("/animals", name="list_animals")
     */
    public function listAction(AnimalRepository $repository)
    {
        $animals = $repository->findAll();
        return $this->render(
            'animal/list_animal.html.twig', 
            [
            'titre' => 'Liste des animaux ',
            'animaux' => $animals,
            ]
        );
    }

    /**
     * Return only one animal
     * 
     * @param class Animal $animal need animal class
     *
     * @return object
     * 
     * @Route("/animal/{id}", name="get_animal")
     */
    public function getAction(Animal $animal)
    {
        return $this->render(
            'animal/get_animal.html.twig', 
            [
                'titre' => "Détail de l'animal",
                'animal' => $animal,
            ]
        );
    }
}
