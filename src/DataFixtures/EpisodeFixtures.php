<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 6; $i ++) {
            $episode = new Episode();
            $episode->setNumber($i + 1);
            $episode->setTitle('Episode ' . ($i + 1));
            $episode->setSynopsis('Episode blablabla');
            $episode->setSeason($this->getReference('season_0'));
            $manager->persist($episode);
        }

        for($i = 0; $i < 6; $i ++) {
            $episode = new Episode();
            $episode->setNumber($i + 1);
            $episode->setTitle('Episode ' . ($i + 1));
            $episode->setSynopsis('Episode blablabla');
            $episode->setSeason($this->getReference('season_1'));
            $manager->persist($episode);
        }

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            SeasonFixtures::class,
        ];
    }
}
