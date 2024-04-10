<?php

namespace App\DataFixtures;

use App\Entity\Placement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlacementFixtures extends Fixture
{
    public const PLACEMENT1 = 'PLACEMENT1'; 
    public const PLACEMENT2 = 'PLACEMENT2'; 
    public const PLACEMENT3 = 'PLACEMENT3'; 
    public const PLACEMENT4 = 'PLACEMENT4'; 
    public const PLACEMENT5 = 'PLACEMENT5'; 

    public function load(ObjectManager $manager): void
    {
        $placement = new Placement();
        $placement
            ->setName('Carré Or')
            ->setCapacity(30);
        $manager->persist($placement);
        $this->addReference(self::PLACEMENT1, $placement);

        $placement2 = new Placement();
        $placement2
            ->setName('Catégorie 1')
            ->setCapacity(100);
        $manager->persist($placement2);
        $this->addReference(self::PLACEMENT2, $placement2);

        $placement3 = new Placement();
        $placement3
            ->setName('Catégorie 2')
            ->setCapacity(150);
        $manager->persist($placement3);
        $this->addReference(self::PLACEMENT3, $placement3);

        $placement4 = new Placement();
        $placement4
            ->setName('Catégorie 3')
            ->setCapacity(200);
        $manager->persist($placement4);
        $this->addReference(self::PLACEMENT4, $placement4);

        $placement5 = new Placement();
        $placement5
            ->setName('Fausse')
            ->setCapacity(400);
        $manager->persist($placement5);
        $this->addReference(self::PLACEMENT5, $placement5);

        $manager->flush();
    }
}
