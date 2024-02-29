<?php

namespace App\DataFixtures;

use App\Entity\Link;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LinkFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 0; $i<100; $i ++){
            $link = new Link();
            $link->setTitle("Title $i");
            $link->setUrl("Lien 1");
            $link->setCreatedAt(new \DateTimeImmutable('now'));
            $manager->persist($link);
            $manager->flush();
        }
    }
}
