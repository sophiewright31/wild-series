<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public const ACTORS = [
        'Norman Reedus',
        'Andrew Lincoln',
        'Lauren Cohan',
        'Jeffrey Dean Morgan',
        'Chandler Riggs',
        'Blake Lively',
        'Leighton Meester',
        'Penn Badgley',
        'Chace Crawford',
        'Taylor Momsen',
        'Ed Westwick',
        'Camille Cottin',
        'Thibault de Montalembert',
        'Fanny Sidney',
        'Stéfi Celma',
        'Gregory Montel',
        'Liliane Rovère',

    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::ACTORS as $key => $actorName) {
                        $actor = new Actor();
            $actor->setName($actorName);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }
}
