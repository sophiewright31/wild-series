<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $season = new Season();
        $season->setNumber(1);
        $season->setDescription('Saison 1 de Dix Pour Cent');
        $season->setYear(2015);
        $season->setProgram($this->getReference('program_2'));
        $manager->persist($season);
        $this->addReference('season_0', $season);

        $season = new Season();
        $season->setNumber(2);
        $season->setDescription('Saison 2 de Dix Pour Cent');
        $season->setYear(2016);
        $season->setProgram($this->getReference('program_2'));
        $manager->persist($season);
        $this->addReference('season_1', $season);

        $season = new Season();
        $season->setNumber(3);
        $season->setDescription('Saison 3 de Dix Pour Cent');
        $season->setYear(2017);
        $season->setProgram($this->getReference('program_2'));
        $manager->persist($season);
        $this->addReference('season_2', $season);

        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            ProgramFixtures::class,
        ];
    }
}
