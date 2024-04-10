<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArtistFixtures extends Fixture
{
    public const ARTIST1 = 'ARTIST1';
    public const ARTIST2 = 'ARTIST2';
    public const ARTIST3 = 'ARTIST3';
    public const ARTIST4 = 'ARTIST4';
    public const ARTIST5 = 'ARTIST5';
    public const ARTIST6 = 'ARTIST6';
    public const ARTIST7 = 'ARTIST7';
    public const ARTIST8 = 'ARTIST8';
    public const ARTIST9 = 'ARTIST9';
    public const ARTIST10 = 'ARTIST10';
    public const ARTIST11 = 'ARTIST11';
    public const ARTIST12 = 'ARTIST12';
    public const ARTIST13 = 'ARTIST13';
    public const ARTIST14 = 'ARTIST14';
    public const ARTIST15 = 'ARTIST15';
    public const ARTIST16 = 'ARTIST16';
    public const ARTIST17 = 'ARTIST17';
    public const ARTIST18 = 'ARTIST18';
    public const ARTIST19 = 'ARTIST19';
    public const ARTIST20 = 'ARTIST20';
    public const ARTIST21 = 'ARTIST21';
    public const ARTIST22 = 'ARTIST22';
    public const ARTIST23 = 'ARTIST23';


    public function load(ObjectManager $manager): void
    {
        $artist = new Artist();
        $artist->setName('Christophe Maé');
        $manager->persist($artist);
        $this->addReference(self::ARTIST1, $artist);

        $artist2 = new Artist();
        $artist2->setName('Calogero');
        $manager->persist($artist2);
        $this->addReference(self::ARTIST2, $artist2);

        $artist3 = new Artist();
        $artist3->setName('Pomme');
        $manager->persist($artist3);
        $this->addReference(self::ARTIST3, $artist3);

        $artist4 = new Artist();
        $artist4->setName('Renaud');
        $manager->persist($artist4);
        $this->addReference(self::ARTIST4, $artist4);

        $artist5 = new Artist();
        $artist5->setName('Julien Doré');
        $manager->persist($artist5);
        $this->addReference(self::ARTIST5, $artist5);

        $artist6 = new Artist();
        $artist6->setName('Grands Corps Malade');
        $manager->persist($artist6);
        $this->addReference(self::ARTIST6, $artist6);

        $artist7 = new Artist();
        $artist7->setName('PLK');
        $manager->persist($artist7);
        $this->addReference(self::ARTIST7, $artist7);

        $artist8 = new Artist();
        $artist8->setName('BigFlo et Oli');
        $manager->persist($artist8);
        $this->addReference(self::ARTIST8, $artist8);

        $artist9 = new Artist();
        $artist9->setName('Josman');
        $manager->persist($artist9);
        $this->addReference(self::ARTIST9, $artist9);

        $artist10 = new Artist();
        $artist10->setName('ShakaPonk');
        $manager->persist($artist10);
        $this->addReference(self::ARTIST10, $artist10);

        $artist11 = new Artist();
        $artist11->setName('Yodelice');
        $manager->persist($artist11);
        $this->addReference(self::ARTIST11, $artist11);

        $artist12 = new Artist();
        $artist12->setName('Chris Isaak');
        $manager->persist($artist12);
        $this->addReference(self::ARTIST12, $artist12);

        $artist13 = new Artist();
        $artist13->setName('Ibrahim Maalouf');
        $manager->persist($artist13);
        $this->addReference(self::ARTIST13, $artist13);

        $artist14 = new Artist();
        $artist14->setName('Pepper Swing');
        $manager->persist($artist14);
        $this->addReference(self::ARTIST14, $artist14);

        $artist15 = new Artist();
        $artist15->setName('Lynshow Spectacle');
        $manager->persist($artist15);
        $this->addReference(self::ARTIST15, $artist15);

        $artist16 = new Artist();
        $artist16->setName('Cabaret de Licques');
        $manager->persist($artist16);
        $this->addReference(self::ARTIST16, $artist16);

        $artist17 = new Artist();
        $artist17->setName('Le Roi Lion');
        $manager->persist($artist17);
        $this->addReference(self::ARTIST17, $artist17);

        $artist18 = new Artist();
        $artist18->setName('Patrick Haudecoeur');
        $manager->persist($artist18);
        $this->addReference(self::ARTIST18, $artist18);

        $artist19 = new Artist();
        $artist19->setName('Paul Portner');
        $manager->persist($artist19);
        $this->addReference(self::ARTIST19, $artist19);

        $artist20 = new Artist();
        $artist20->setName('Alan AyckBourn');
        $manager->persist($artist20);
        $this->addReference(self::ARTIST20, $artist20);

        $artist21 = new Artist();
        $artist21->setName('Paul Mirabel');
        $manager->persist($artist21);
        $this->addReference(self::ARTIST21, $artist21);

        $artist22 = new Artist();
        $artist22->setName('Ines Reg');
        $manager->persist($artist22);
        $this->addReference(self::ARTIST22, $artist22);

        $artist23 = new Artist();
        $artist23->setName('Keirhon');
        $manager->persist($artist23);
        $this->addReference(self::ARTIST23, $artist23);

        $manager->flush();
    }
}
