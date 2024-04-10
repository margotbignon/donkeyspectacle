<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EventFixtures extends Fixture implements DependentFixtureInterface
{


    public function load(ObjectManager $manager): void
    {
        /** @var \App\Entity\Show $mae */
        $mae = $this->getReference(ShowFixtures::SHOW1);
        /** @var \App\Entity\Show $calogero */
        $calogero = $this->getReference(ShowFixtures::SHOW2);
        /** @var \App\Entity\Show $pomme */
        $pomme = $this->getReference(ShowFixtures::SHOW3);
        /** @var \App\Entity\Show $renaud */
        $renaud = $this->getReference(ShowFixtures::SHOW4);
        /** @var \App\Entity\Show $julien */
        $julien = $this->getReference(ShowFixtures::SHOW5);
        /** @var \App\Entity\Show $gcm */
        $gcm = $this->getReference(ShowFixtures::SHOW6);
        /** @var \App\Entity\Show $plk */
        $plk = $this->getReference(ShowFixtures::SHOW7);
        /** @var \App\Entity\Show $bigflo */
        $bigflo = $this->getReference(ShowFixtures::SHOW8);
        /** @var \App\Entity\Show $josman */
        $josman = $this->getReference(ShowFixtures::SHOW9);
        /** @var \App\Entity\Show $shaka */
        $shaka = $this->getReference(ShowFixtures::SHOW10);
        /** @var \App\Entity\Show $yodelice */
        $yodelice = $this->getReference(ShowFixtures::SHOW11);
        /** @var \App\Entity\Show $chris */
        $chris = $this->getReference(ShowFixtures::SHOW12);
        /** @var \App\Entity\Show $ibrahim */
        $ibrahim = $this->getReference(ShowFixtures::SHOW13);
        /** @var \App\Entity\Show $pepper */
        $pepper = $this->getReference(ShowFixtures::SHOW14);
        /** @var \App\Entity\Show $lynshow */
        $lynshow = $this->getReference(ShowFixtures::SHOW15);
        /** @var \App\Entity\Show $licques */
        $licques = $this->getReference(ShowFixtures::SHOW16);
        /** @var \App\Entity\Show $roiLion */
        $roiLion = $this->getReference(ShowFixtures::SHOW17);
        /** @var \App\Entity\Show $patrick */
        $patrick = $this->getReference(ShowFixtures::SHOW18);
        /** @var \App\Entity\Show $portner */
        $portner = $this->getReference(ShowFixtures::SHOW19);
        /** @var \App\Entity\Show $alan */
        $alan = $this->getReference(ShowFixtures::SHOW20);
        /** @var \App\Entity\Show $mirabel */
        $mirabel = $this->getReference(ShowFixtures::SHOW21);
        /** @var \App\Entity\Show $reg */
        $reg = $this->getReference(ShowFixtures::SHOW22);
        /** @var \App\Entity\Show $reg */
        $keirhon = $this->getReference(ShowFixtures::SHOW23);

        /** @var \App\Entity\Placement $or */
        $or = $this->getReference(PlacementFixtures::PLACEMENT1);
        /** @var \App\Entity\Placement $cat1 */
        $cat1 = $this->getReference(PlacementFixtures::PLACEMENT2);
        /** @var \App\Entity\Placement $cat2 */
        $cat2 = $this->getReference(PlacementFixtures::PLACEMENT3);
        /** @var \App\Entity\Placement $cat3 */
        $cat3 = $this->getReference(PlacementFixtures::PLACEMENT4);
        /** @var \App\Entity\Placement $fausse */
        $fausse = $this->getReference(PlacementFixtures::PLACEMENT5);


        $eventsData = [
            [
                'showEvent' => $mae,
                'setPlacement' => $or, 
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-03',
                'time' => '20:30',
                'price' => 55.30
            ],
            [
                'showEvent' => $mae,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-03',
                'time' => '20:30',
                'price' => 45.30
            ],
            [
                'showEvent' => $mae,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-03',
                'time' => '20:30',
                'price' => 40.00
            ],
            [
                'showEvent' => $mae,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-03',
                'time' => '20:30',
                'price' => 35.00
            ],
            [
                'showEvent' => $mae,
                'setPlacement' => $fausse, 
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-03',
                'time' => '20:30',
                'price' => 25.00
            ],
            [
                'showEvent' => $calogero,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-05',
                'endDate' => '2024-05-06',
                'time' => '19:30',
                'price' => 45.00
            ],
            [
                'showEvent' => $calogero,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-05',
                'endDate' => '2024-05-06',
                'time' => '19:30',
                'price' => 35.00
            ],
            [
                'showEvent' => $calogero,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-05',
                'endDate' => '2024-05-06',
                'time' => '19:30',
                'price' => 25.00
            ], 
            [
                'showEvent' => $pomme,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-06',
                'endDate' => '2024-06-08',
                'time' => '19:30',
                'price' => 35.00
            ],
            [
                'showEvent' => $pomme,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-06',
                'endDate' => '2024-06-08',
                'time' => '19:30',
                'price' => 30.00
            ], 
            [
                'showEvent' => $pomme,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-06',
                'endDate' => '2024-06-08',
                'time' => '19:30',
                'price' => 25.00
            ], 
            [
                'showEvent' => $pomme,
                'setPlacement' => $fausse, 
                'startDate' => '2024-06-06',
                'endDate' => '2024-06-08',
                'time' => '19:30',
                'price' => 20.00
            ],
            [
                'showEvent' => $renaud,
                'setPlacement' => $or, 
                'startDate' => '2024-06-21',
                'endDate' => '2024-06-24',
                'time' => '20:00',
                'price' => 60.00
            ],
            [
                'showEvent' => $renaud,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-21',
                'endDate' => '2024-06-24',
                'time' => '20:00',
                'price' => 50.00
            ],
            [
                'showEvent' => $renaud,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-21',
                'endDate' => '2024-06-24',
                'time' => '20:00',
                'price' => 45.00
            ],
            [
                'showEvent' => $renaud,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-21',
                'endDate' => '2024-06-24',
                'time' => '20:00',
                'price' => 35.00
            ],
            [
                'showEvent' => $renaud,
                'setPlacement' => $fausse, 
                'startDate' => '2024-06-21',
                'endDate' => '2024-06-24',
                'time' => '20:00',
                'price' => 25.00
            ],         
            [
                'showEvent' => $julien,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-02',
                'endDate' => '2024-06-04',
                'time' => '20:00',
                'price' => 48.50
            ],  
            [
                'showEvent' => $julien,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-02',
                'endDate' => '2024-06-04',
                'time' => '20:00',
                'price' => 40.50
            ],           
            [
                'showEvent' => $julien,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-02',
                'endDate' => '2024-06-04',
                'time' => '20:00',
                'price' => 35.00
            ], 
            [
                'showEvent' => $gcm,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-04',
                'endDate' => '2024-05-04',
                'time' => '20:00',
                'price' => 55.50
            ], 
            [
                'showEvent' => $gcm,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-04',
                'endDate' => '2024-05-04',
                'time' => '20:00',
                'price' => 45.00
            ],    
            [
                'showEvent' => $gcm,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-04',
                'endDate' => '2024-05-04',
                'time' => '20:00',
                'price' => 35.00
            ],  
            [
                'showEvent' => $plk,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-20',
                'endDate' => '2024-06-20',
                'time' => '20:00',
                'price' => 40.00
            ],  
            [
                'showEvent' => $plk,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-20',
                'endDate' => '2024-06-20',
                'time' => '20:00',
                'price' => 35.50
            ],                      
            [
                'showEvent' => $plk,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-20',
                'endDate' => '2024-06-20',
                'time' => '20:00',
                'price' => 30.00
            ],    
            [
                'showEvent' => $bigflo,
                'setPlacement' => $or, 
                'startDate' => '2024-05-10',
                'endDate' => '2024-05-11',
                'time' => '19:30',
                'price' => 80.00
            ],           
            [
                'showEvent' => $bigflo,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-10',
                'endDate' => '2024-05-11',
                'time' => '19:30',
                'price' => 72.30
            ],      
            [
                'showEvent' => $bigflo,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-10',
                'endDate' => '2024-05-11',
                'time' => '19:30',
                'price' => 55.00
            ],        
            [
                'showEvent' => $bigflo,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-10',
                'endDate' => '2024-05-11',
                'time' => '19:30',
                'price' => 40.50
            ],  
            [
                'showEvent' => $bigflo,
                'setPlacement' => $fausse, 
                'startDate' => '2024-05-10',
                'endDate' => '2024-05-11',
                'time' => '19:30',
                'price' => 30.00
            ], 
            [
                'showEvent' => $josman,
                'setPlacement' => $cat1, 
                'startDate' => '2024-07-21',
                'endDate' => '2024-07-23',
                'time' => '19:30',
                'price' => 60.00
            ],     
            [
                'showEvent' => $josman,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-21',
                'endDate' => '2024-07-23',
                'time' => '19:30',
                'price' => 40.00
            ],             
            [
                'showEvent' => $josman,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-21',
                'endDate' => '2024-07-23',
                'time' => '19:30',
                'price' => 30.00
            ],         
            [
                'showEvent' => $shaka,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-08',
                'endDate' => '2024-05-10',
                'time' => '20:30',
                'price' => 54.00
            ],       
            [
                'showEvent' => $shaka,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-08',
                'endDate' => '2024-05-10',
                'time' => '20:30',
                'price' => 47.00
            ],          
            [
                'showEvent' => $shaka,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-08',
                'endDate' => '2024-05-10',
                'time' => '20:30',
                'price' => 35.00
            ],   
            [
                'showEvent' => $shaka,
                'setPlacement' => $fausse, 
                'startDate' => '2024-05-08',
                'endDate' => '2024-05-10',
                'time' => '20:30',
                'price' => 25.00
            ],  
            [
                'showEvent' => $yodelice,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-30',
                'endDate' => '2024-05-30',
                'time' => '19:30',
                'price' => 45.00
            ],            
            [
                'showEvent' => $yodelice,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-30',
                'endDate' => '2024-05-30',
                'time' => '19:30',
                'price' => 35.00
            ],            
            [
                'showEvent' => $yodelice,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-30',
                'endDate' => '2024-05-30',
                'time' => '19:30',
                'price' => 25.00
            ],     
            [
                'showEvent' => $chris,
                'setPlacement' => $cat1, 
                'startDate' => '2024-07-05',
                'endDate' => '2024-07-05',
                'time' => '19:30',
                'price' => 38.00
            ],       
            [
                'showEvent' => $chris,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-05',
                'endDate' => '2024-07-05',
                'time' => '19:30',
                'price' => 32.00
            ],    
            [
                'showEvent' => $chris,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-05',
                'endDate' => '2024-07-05',
                'time' => '19:30',
                'price' => 30.00
            ],         
            [
                'showEvent' => $chris,
                'setPlacement' => $fausse, 
                'startDate' => '2024-07-05',
                'endDate' => '2024-07-05',
                'time' => '19:30',
                'price' => 24.00
            ],
            [
                'showEvent' => $ibrahim,
                'setPlacement' => $or, 
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-04',
                'time' => '20:30',
                'price' => 68.00
            ],   
            [
                'showEvent' => $ibrahim,
                'setPlacement' => $cat1, 
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-04',
                'time' => '20:30',
                'price' => 55.00
            ],            
            [
                'showEvent' => $ibrahim,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-04',
                'time' => '20:30',
                'price' => 48.00
            ],        
            [
                'showEvent' => $ibrahim,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-04',
                'time' => '20:30',
                'price' => 37.00
            ],        
            [
                'showEvent' => $ibrahim,
                'setPlacement' => $fausse, 
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-04',
                'time' => '20:30',
                'price' => 30.00
            ],           
            [
                'showEvent' => $pepper,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-26',
                'endDate' => '2024-05-29',
                'time' => '20:30',
                'price' => 35.00
            ],    
            [
                'showEvent' => $pepper,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-26',
                'endDate' => '2024-05-29',
                'time' => '20:30',
                'price' => 25.00
            ],  
            [
                'showEvent' => $lynshow,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-15',
                'endDate' => '2024-06-18',
                'time' => '19:30',
                'price' => 50.00
            ],    
            [
                'showEvent' => $lynshow,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-15',
                'endDate' => '2024-06-18',
                'time' => '19:30',
                'price' => 43.00
            ],         
            [
                'showEvent' => $lynshow,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-15',
                'endDate' => '2024-06-18',
                'time' => '19:30',
                'price' => 35.00
            ],   
            [
                'showEvent' => $licques,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-04',
                'endDate' => '2024-06-09',
                'time' => '18:30',
                'price' => 55.00
            ],        
            [
                'showEvent' => $licques,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-04',
                'endDate' => '2024-06-09',
                'time' => '18:30',
                'price' => 48.00
            ],      
            [
                'showEvent' => $licques,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-04',
                'endDate' => '2024-06-09',
                'time' => '18:30',
                'price' => 37.00
            ],       
            [
                'showEvent' => $roiLion,
                'setPlacement' => $or, 
                'startDate' => '2024-06-24',
                'endDate' => '2024-06-29',
                'time' => '18:30',
                'price' => 90.00
            ],           
            [
                'showEvent' => $roiLion,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-24',
                'endDate' => '2024-06-29',
                'time' => '18:30',
                'price' => 78.00
            ],           
            [
                'showEvent' => $roiLion,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-24',
                'endDate' => '2024-06-29',
                'time' => '18:30',
                'price' => 60.00
            ],            
            [
                'showEvent' => $roiLion,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-24',
                'endDate' => '2024-06-29',
                'time' => '18:30',
                'price' => 50.00
            ], 
            [
                'showEvent' => $patrick,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-20',
                'endDate' => '2024-05-25',
                'time' => '20:30',
                'price' => 35.00
            ],     
            [
                'showEvent' => $patrick,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-20',
                'endDate' => '2024-05-25',
                'time' => '20:30',
                'price' => 25.00
            ],    
            [
                'showEvent' => $portner,
                'setPlacement' => $cat1, 
                'startDate' => '2024-06-10',
                'endDate' => '2024-06-14',
                'time' => '20:30',
                'price' => 35.00
            ],        
            [
                'showEvent' => $portner,
                'setPlacement' => $cat2, 
                'startDate' => '2024-06-10',
                'endDate' => '2024-06-14',
                'time' => '20:30',
                'price' => 25.00
            ],   
            [
                'showEvent' => $portner,
                'setPlacement' => $cat3, 
                'startDate' => '2024-06-10',
                'endDate' => '2024-06-14',
                'time' => '20:30',
                'price' => 20.00
            ],        
            [
                'showEvent' => $alan,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-09',
                'endDate' => '2024-07-14',
                'time' => '20:30',
                'price' => 20.00
            ],      
            [
                'showEvent' => $alan,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-09',
                'endDate' => '2024-07-14',
                'time' => '20:30',
                'price' => 15.00
            ],     
            [
                'showEvent' => $mirabel,
                'setPlacement' => $or, 
                'startDate' => '2024-07-15',
                'endDate' => '2024-07-19',
                'time' => '20:30',
                'price' => 65.00
            ],  
            [
                'showEvent' => $mirabel,
                'setPlacement' => $cat1, 
                'startDate' => '2024-07-15',
                'endDate' => '2024-07-19',
                'time' => '20:30',
                'price' => 45.00
            ],      
            [
                'showEvent' => $mirabel,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-15',
                'endDate' => '2024-07-19',
                'time' => '20:30',
                'price' => 38.00
            ],      
            [
                'showEvent' => $mirabel,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-15',
                'endDate' => '2024-07-19',
                'time' => '20:30',
                'price' => 30.00
            ],      
            [
                'showEvent' => $reg,
                'setPlacement' => $or, 
                'startDate' => '2024-07-23',
                'endDate' => '2024-07-24',
                'time' => '19:00',
                'price' => 65.00
            ], 
            [
                'showEvent' => $reg,
                'setPlacement' => $cat1, 
                'startDate' => '2024-07-23',
                'endDate' => '2024-07-24',
                'time' => '19:00',
                'price' => 55.00
            ], 
            [
                'showEvent' => $reg,
                'setPlacement' => $cat2, 
                'startDate' => '2024-07-23',
                'endDate' => '2024-07-24',
                'time' => '19:00',
                'price' => 47.00
            ], 
            [
                'showEvent' => $reg,
                'setPlacement' => $cat3, 
                'startDate' => '2024-07-23',
                'endDate' => '2024-07-24',
                'time' => '19:00',
                'price' => 35.00
            ], 
            [
                'showEvent' => $keirhon,
                'setPlacement' => $or, 
                'startDate' => '2024-05-12',
                'endDate' => '2024-05-19',
                'time' => '19:00',
                'price' => 63.00
            ], 
            [
                'showEvent' => $keirhon,
                'setPlacement' => $cat1, 
                'startDate' => '2024-05-12',
                'endDate' => '2024-05-19',
                'time' => '19:00',
                'price' => 54.00
            ], 
            [
                'showEvent' => $keirhon,
                'setPlacement' => $cat2, 
                'startDate' => '2024-05-12',
                'endDate' => '2024-05-19',
                'time' => '19:00',
                'price' => 45.00
            ], 
            [
                'showEvent' => $keirhon,
                'setPlacement' => $cat3, 
                'startDate' => '2024-05-12',
                'endDate' => '2024-05-19',
                'time' => '19:00',
                'price' => 36.00
            ], 
        ];

        foreach ($eventsData as $eventData) {
            $event = new Event();
            $event
                ->setShowEvent($eventData['showEvent'])
                ->setPlacement($eventData['setPlacement'])
                ->setStartDate(new \DateTime($eventData['startDate']))
                ->setEndDate(new \DateTime($eventData['endDate']))
                ->setTime(new \DateTime($eventData['time']))
                ->setPrice($eventData['price']);
    
            $manager->persist($event);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ShowFixtures::class,
            PlacementFixtures::class
        ];
    }
}
