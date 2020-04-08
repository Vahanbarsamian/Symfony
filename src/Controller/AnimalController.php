<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animals", name="list_animals")
     */
    public function listAction(AnimalRepository $repository)
    {
        $animals = $repository->findAll();
        return $this->render('animal/list_animal.html.twig', [
            'titre' => 'Liste des animaux ',
            'animaux' => $animals,
        ]);
    }

    /**
     * @Route("/animal/{id}", name="get_animal")
     */
    public function getAction(Animal $animal)
    {
        return $this->render('animal/get_animal.html.twig', [
            'titre' => "Détail de l'animal",
            'animal' => $animal,
        ]);
    }
}
