<?php

namespace App\DataFixtures;

use App\Entity\Chiffres;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ChiffresFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $chif = new Chiffres();

        $chif->setCentreRecherches(4);
        $chif->setDepartements(6);
        $chif->setDoctorant(127);
        $chif->setDUT(2);
        $chif->setEnseignants(187);
        $chif->setEtudiants(923);
        $chif->setFi(12);
        $chif->setLabo(7);
        $chif->setLaureats(5687);
        $chif->setLp(1);
        $chif->setLu(15);
        $chif->setMu(9);
        $chif->setPartenaires(17);

        $manager->persist($chif);
        $manager->flush();
    }
}
