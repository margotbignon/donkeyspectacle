<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public const CATEGORY_CONCERT1 = 'CATEGORY_CONCERT1';
    public const CATEGORY_CONCERT2 = 'CATEGORY_CONCERT2';
    public const CATEGORY_CONCERT3 = 'CATEGORY_CONCERT3';
    public const CATEGORY_CONCERT4 = 'CATEGORY_CONCERT4';
    public const CATEGORY_SPECTACLE1 = 'CATEGORY_SPECTACLE1';
    public const CATEGORY_SPECTACLE2 = 'CATEGORY_SPECTACLE2';
    public const CATEGORY_THEATRE1 = 'CATEGORY_THEATRE1';
    public const CATEGORY_THEATRE2 = 'CATEGORY_THEATRE2';

    public function load(ObjectManager $manager): void
    {
        $category1 = new Category();
        $category1->setName('Concert');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Spectacle');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Humour et théâtre');
        $manager->persist($category3);

        $category4 = new Category();
        $category4
            ->setName('Variété française')
            ->setParent($category1);
        $manager->persist($category4);
        $this->addReference(self::CATEGORY_CONCERT1, $category4);

        $category5 = new Category();
        $category5
            ->setName('Rap')
            ->setParent($category1);
        $manager->persist($category5);
        $this->addReference(self::CATEGORY_CONCERT2, $category5);

        $category6 = new Category();
        $category6
            ->setName('Pop Rock')
            ->setParent($category1);
        $manager->persist($category6);
        $this->addReference(self::CATEGORY_CONCERT3, $category6);

        $category7 = new Category();
        $category7
            ->setName('Jazz')
            ->setParent($category1);
        $manager->persist($category7);
        $this->addReference(self::CATEGORY_CONCERT4, $category7);

        $category8 = new Category();
        $category8
            ->setName('Electro')
            ->setParent($category1);
        $manager->persist($category8);

        $category9 = new Category();
        $category9
            ->setName('Cabaret')
            ->setParent($category2);
        $manager->persist($category9);
        $this->addReference(self::CATEGORY_SPECTACLE1, $category9);

        $category10 = new Category();
        $category10
            ->setName('Magie')
            ->setParent($category2);
        $manager->persist($category10);

        $category13 = new Category();
        $category13
            ->setName('Grands Spectacles')
            ->setParent($category2);
        $manager->persist($category13);
        $this->addReference(self::CATEGORY_SPECTACLE2, $category13);

        $category14 = new Category();
        $category14
            ->setName('Comédie')
            ->setParent($category3);
        $manager->persist($category14);
        $this->addReference(self::CATEGORY_THEATRE1, $category14);

        $category16 = new Category();
        $category16
            ->setName('Théâtre contemporain')
            ->setParent($category3);
        $manager->persist($category16);

        $category17 = new Category();
        $category17
            ->setName('One Man Show')
            ->setParent($category3);
        $manager->persist($category17);
        $this->addReference(self::CATEGORY_THEATRE2, $category17);

        $manager->flush();
    }
}
