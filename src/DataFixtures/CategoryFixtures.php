<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
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

        $category5 = new Category();
        $category5
            ->setName('Rap')
            ->setParent($category1);
        $manager->persist($category5);

        $category6 = new Category();
        $category6
            ->setName('Punk, Rock')
            ->setParent($category1);
        $manager->persist($category6);

        $category7 = new Category();
        $category7
            ->setName('Jazz')
            ->setParent($category1);
        $manager->persist($category7);

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

        $category14 = new Category();
        $category14
            ->setName('Comédie')
            ->setParent($category3);
        $manager->persist($category14);

        $category15 = new Category();
        $category15
            ->setName('Théâtre musical')
            ->setParent($category3);
        $manager->persist($category15);

        $category16 = new Category();
        $category16
            ->setName('Théâtre contemporain')
            ->setParent($category3);
        $manager->persist($category16);

        $category17 = new Category();
        $category17
            ->setName('Seul sur scène')
            ->setParent($category3);
        $manager->persist($category17);

        $category18 = new Category();
        $category18
            ->setName('Improvisation')
            ->setParent($category3);
        $manager->persist($category18);

        $manager->flush();
    }
}
