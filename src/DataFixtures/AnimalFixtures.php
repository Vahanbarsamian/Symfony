<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new Animal();
        $a1->setName('Chien')
            ->setDescription('Animal domestique')
            ->setImage('/public/img/animaux/chien.png')
            ->setPoids(10)
            ->setDangerous(false);
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setName('Cochon')
            ->setDescription('Animal de ferme')
            ->setImage('/public/img/animaux/cochon.png')
            ->setPoids(100)
            ->setDangerous(false);
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setName('Crocodile')
            ->setDescription('Animal sauvage')
            ->setImage('/public/img/animaux/croco.png')
            ->setPoids(300)
            ->setDangerous(true);
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setName('Requin')
            ->setDescription('Animal marin')
            ->setImage('/public/img/animaux/requin.png')
            ->setPoids(200)
            ->setDangerous(true);
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setName('Serpent')
            ->setDescription('Animal dangereux')
            ->setImage('/public/img/animaux/serpent.png')
            ->setPoids(1)
            ->setDangerous(true);
        $manager->persist($a5);

        $manager->flush();
    }
}
