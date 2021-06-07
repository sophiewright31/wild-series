<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setPoster('https://fr.web.img3.acsta.net/pictures/21/04/19/14/51/5593951.jpg');
        $program->setSummary('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_0'));
        for ($i=0; $i < 5; $i++) {
            $program->addActor($this->getReference('actor_' . $i));
        }
        $manager->persist($program);
        $this->addReference('program_0', $program);


        $program = new Program();
        $program->setTitle('Gossip Girl');
        $program->setPoster('https://fr.web.img4.acsta.net/pictures/18/10/31/16/40/2925980.jpg');
        $program->setSummary('Les étudiants privilégiés des écoles privées dans Upper East Side, un quartier de Manhattan à New York, sont tous accros au blog de « Gossip Girl » une mystérieuse blogueuse qui dévoile tous les derniers potins et rumeurs sur leur communauté très fermée.');
        $program->setCategory($this->getReference('category_6'));
        $program->addActor($this->getReference('actor_5'));
        $program->addActor($this->getReference('actor_6'));
        $program->addActor($this->getReference('actor_7'));
        $program->addActor($this->getReference('actor_8'));
        $program->addActor($this->getReference('actor_9'));
        $program->addActor($this->getReference('actor_10'));
        $manager->persist($program);
        $this->addReference('program_1', $program);


        $program = new Program();
        $program->setTitle('Dix Pour Cent');
        $program->setPoster('https://fr.web.img5.acsta.net/pictures/18/09/19/11/35/2106668.jpg');
        $program->setSummary("Chaque jour, Andréa, Mathias, Gabriel et Arlette, agents et associés principaux de l’agence artistique ASK (l’agence Samuel-Kerr), jonglent avec de délicates situations et défendent leur vision du métier d'acteur. Ils mêlent savamment art et business, quitte à manipuler les gens du métier pour leur faire accepter leur vision.");
        $program->setCategory($this->getReference('category_5'));
        $program->addActor($this->getReference('actor_11'));
        $program->addActor($this->getReference('actor_12'));
        $program->addActor($this->getReference('actor_13'));
        $program->addActor($this->getReference('actor_14'));
        $program->addActor($this->getReference('actor_15'));
        $program->addActor($this->getReference('actor_16'));
        $manager->persist($program);
        $this->addReference('program_2', $program);

        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            ActorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
