<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**
         * Personnes
         */

        $p1 = new Personne();
        $p1->setName('Milo');
        $manager->persist($p1);

        $p2 = new Personne();
        $p2->setName('Tya');
        $manager->persist($p2);

        $p3 = new Personne();
        $p3->setName('Lili');
        $manager->persist($p3);

        /**
         * Continents
         */

        $c1 = new Continent();
        $c1->setLibelle('Europe');
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLibelle('Asie');
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLibelle('Afrique');
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle('Océanie');
        $manager->persist($c4);

        $c5 = new Continent();
        $c5->setLibelle('Amérique');
        $manager->persist($c5);

        /**
         * Families
         */

        $f1 = new Famille();
        $f1->setLibelle('mamifères')
            ->setDescription('Animaux vertébrés nourrissant leurs petits avec du lait');
        $manager->persist($f1);

        $f2 = new Famille();
        $f2->setLibelle('réptiles')
            ->setDescription('Animaux vertébrés qui rampent');
        $manager->persist($f2);

        $f3 = new Famille();
        $f3->setLibelle('poissons')
            ->setDescription('Animaux invertébrés du monde aquatique');
        $manager->persist($f3);

        /**
         *  Animals
         */

        $a1 = new Animal();
        $a1->setName('Chien')
            ->setDescription('Animal domestique')
            ->setImage('/public/img/animaux/chien.png')
            ->setPoids(10)
            ->setDangerous(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('Cochon')
            ->setDescription('Animal de ferme')
            ->setImage('/public/img/animaux/cochon.png')
            ->setPoids(100)
            ->setDangerous(false)
            ->setFamille($f1)
            ->addContinent($c1)
            ->addContinent($c2)
            ->addContinent($c3)
            ->addContinent($c4)
            ->addContinent($c5);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('Crocodile')
            ->setDescription('Animal sauvage')
            ->setImage('/public/img/animaux/croco.png')
            ->setPoids(300)
            ->setDangerous(true)
            ->setFamille($f2)
            ->addContinent($c2)->addContinent($c4)->addContinent($c5);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('Requin')
            ->setDescription('Animal marin')
            ->setImage('/public/img/animaux/requin.png')
            ->setPoids(200)
            ->setDangerous(true)
            ->setFamille($f3)
            ->addContinent($c4)->addContinent($c5);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('Serpent')
            ->setDescription('Animal dangereux')
            ->setImage('/public/img/animaux/serpent.png')
            ->setPoids(1)
            ->setDangerous(true)
            ->setFamille($f2)
            ->addContinent($c2)->addContinent($c3)->addContinent($c5);
        $manager->persist($a5);

        /**
         * Dispose
         */

        $d1 = new Dispose();
        $d1->setPersonne($p1)
            ->setAnimal($a1)
            ->setNb(3);
        $manager->persist($d1);

        $d2 = new Dispose();
        $d2->setPersonne($p2)
            ->setAnimal($a2)
            ->setNb(1);
        $manager->persist($d2);

        $d3 = new Dispose();
        $d3->setPersonne($p3)
            ->setAnimal($a5)
            ->setNb(2);
        $manager->persist($d3);

        $d4 = new Dispose();
        $d4->setPersonne($p3)
            ->setAnimal($a1)
            ->setNb(1);
        $manager->persist($d4);

        $d5 = new Dispose();
        $d5->setPersonne($p1)
            ->setAnimal($a2)
            ->setNb(1);
        $manager->persist($d5);

        $manager->flush();
    }
}
