<?php
/**
 * Personne controller
 */
namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * This controller gives methods to extract all or one person
 */
class PersonneController extends AbstractController
{

    /**
     * This return all persons
     *
     * @param PersonneRepository $repo call the repository
     *
     * @return void
     *
     * @Route("/personnes", name="list_personnes")
     */
    public function listAction(PersonneRepository $repo)
    {
        $personnes = $repo->findAll();
        return $this->render(
            'personne_controller/list_personnes.html.twig',
            [
                'titre' => 'Liste des personnes possédant un animal',
                'personnes' => $personnes,
            ]
        );
    }

    /**
     * This return one person
     *
     * @param class Personne                $personne represent a person
     * @param repository PersonneRepository $repo     call the repository
     *
     * @return void
     *
     * @Route("/personne/{id}",name="get_personne")
     */
    public function getAction(Personne $personne, PersonneRepository $repo)
    {
        $personnes = $repo->findAll();
        return $this->render(
            'personne_controller/get_personne.html.twig',
            [
                'titre' => 'Voici la liste des animaux détenu par ' . $personne->getName(),
                'personne' => $personne,
                'personnes' => $personnes,
            ]
        );
    }
}
