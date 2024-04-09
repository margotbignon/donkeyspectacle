<?php

namespace App\DataFixtures;

use App\Entity\Show;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ShowFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        /** @var \App\Entity\Category $varietyfr */
        $varietyfr = $this->getReference(CategoryFixtures::CATEGORY_CONCERT1);
        /** @var \App\Entity\Category $rap */
        $rap = $this->getReference(CategoryFixtures::CATEGORY_CONCERT2);
        /** @var \App\Entity\Category $rock */
        $rock = $this->getReference(CategoryFixtures::CATEGORY_CONCERT3);
        /** @var \App\Entity\Category $jazz */
        $jazz = $this->getReference(CategoryFixtures::CATEGORY_CONCERT4);
        /** @var \App\Entity\Category $cabaret */
        $cabaret = $this->getReference(CategoryFixtures::CATEGORY_SPECTACLE1);
        /** @var \App\Entity\Category $cabaret */
        $bigShow = $this->getReference(CategoryFixtures::CATEGORY_SPECTACLE2);
        /** @var \App\Entity\Category $comedy */
        $comedy = $this->getReference(CategoryFixtures::CATEGORY_THEATRE1);
        /** @var \App\Entity\Category $oneman */
        $oneman = $this->getReference(CategoryFixtures::CATEGORY_THEATRE2);

        $show1= new Show();
        /** @var \App\Entity\Artist $mae */
        $mae = $this->getReference(ArtistFixtures::ARTIST1);
        $show1
            ->setName('Carnet de voyage')
            ->setDescription('Christophe Maé signe son grand retour sur scène en 2023 ! C’est au Cap Vert, sur les terres de Cesária Évora, qu’il a décidé de poser ses valises pour s’inspirer et créer. De ce voyage ressort un nouvel album prévu au printemps prochain porté par le single « Pays des merveilles ».')
            ->setMedia('mae.jpeg')
            ->setCategory($varietyfr)
            ->setArtist($mae);
        $manager->persist($show1);

        $show2= new Show();
        /** @var \App\Entity\Artist $calogero */
        $calogero = $this->getReference(ArtistFixtures::ARTIST2);
        $show2
            ->setName('A.M.O.U.R Tour')
            ->setDescription('Le chanteur a annoncé la sortie de son 9eme album "A.M.O.U.R" en septembre 2023. L\'album sera suivi d\'une tournée pour 2024 nommée ""A.M.O.U.R Tour". Cette nouvelle a suscité une grande excitation parmi ses fans, qui attendent avec impatience de le voir sur scène.
            La tournée "A.M.O.U.R Tour" de Calogero promet d\'être un spectacle grandiose. Les fans pourront découvrir en exclusivité les nouvelles créations de l\'artiste, qui ne manqueront pas de les émouvoir et de les toucher en plein cœur. Notamment avec son dernier single "Le halle des départs". Les fans pourront aussi écouter les meilleures chansons de l\'artiste.')
            ->setMedia('calogero.jpeg')
            ->setCategory($varietyfr)
            ->setArtist($calogero);
        $manager->persist($show2);

        $show3= new Show();
        /** @var \App\Entity\Artist $pomme */
        $pomme = $this->getReference(ArtistFixtures::ARTIST3);
        $show3
            ->setName('Consolidation Tour')
            ->setDescription('Tandis que la pandémie ne cesse d’empêcher la musicienne de défendre son album sur scène, c’est pourtant dans la résignation qu’elle se met à écrire et composer ce qui deviendra sontroisième disque. Attirée par l’électronique, Pomme se tourne vers l’artiste Flavien Berger pour l’accompagner dans cette voie encore inconnue. S’opère alors un « alignement des planètes » comme elle le dit. Tous deux s’allient donc en novembre 2021 et enregistrent "Consolation" un mois durant. Dans la campagne québécoise, ils coréalisent l’album qui, à la différence des Failles ne porte pas sur « ce qui ne va pas », mais plutôt sur « ce qui fait du bien ».')
            ->setMedia('pomme.jpeg')
            ->setCategory($varietyfr)
            ->setArtist($pomme);
        $manager->persist($show3);

        $show4 = new Show();
        /** @var \App\Entity\Artist $renaud */
        $renaud = $this->getReference(ArtistFixtures::ARTIST4);
        $show4
            ->setName('Dans mes cordes')
            ->setDescription('En 1993, le chanteur renoue avec sa passion pour le cinéma et obtient un rôle dans le film Germinal de Claude Berri. Après un album de reprises de son idole Georges Brassens, intitulé « Renaud chante Brassens » en 1996, le chanteur s\'éloigne de la scène et sombre dans la dépression et l’alcool pendant plusieurs années. Il revient en 2002, avec l’album « Boucan d\'enfer » qui renoue avec le succès avec plus de 2 millions d\'exemplaires vendus.
            Il revient en 2016 avec un nouvel album dont sont issues les chansons à succès «Toujours debout » et « J’ai embrassé un flic » ainsi qu’une tournée dans toute la France à partir de 2017.')
            ->setMedia('renaud.jpeg')
            ->setCategory($varietyfr)
            ->setArtist($renaud);
        $manager->persist($show4);

        $show5 = new Show();
        /** @var \App\Entity\Artist $julien */
        $julien = $this->getReference(ArtistFixtures::ARTIST5);
        $show5
            ->setName('Nouvelle tournée')
            ->setDescription('Julien Doré annonce son retour pour une tournée événement après le phénoménal "aimée tour" et son extraordinaire show. Après le phénoménal "aimée tour" et son extraordinaire show ayant conquis plus de 600 000 spectateurs à travers une cinquantaine de concerts complets en Zéniths et Arenas, Julien Doré annonce son grand retour sur scène avec un tout nouveau spectacle')
            ->setMedia('julien.jpeg')
            ->setCategory($varietyfr)
            ->setArtist($julien);
        $manager->persist($show5);

        $show6 = new Show();
        /** @var \App\Entity\Artist $gcm */
        $gcm = $this->getReference(ArtistFixtures::ARTIST6);
        $show6
            ->setName('Tournéee')
            ->setDescription('n septembre 2020, Fabien Marsaud, alias Grand Corps Malade, fit son grand retour avec la sortie de Mesdames, un nouvel album en forme d’hommage aux femmes, composé de 10 duos avec notamment Véronique Sanson, Suzane, Laura Smet ou encore Julie et Camille Berthollet. Un projet qui rencontra un succès populaire et critique, grâce à des titres forts tels que "Derrière le brouillard" avec Louane et "Mais je t’aime" avec Camille Lellouche, élue chanson originale de l’année aux Victoires de la Musique 2021. 
            Dans la foulée, Grand Corps Malade a dévoilé un morceau inédit intitulé "Pas essentiel". Il qui annonçait à la fois une nouvelle tournée s’étalant de 2021 à 2022 tout en mettant les projecteurs sur la situation difficile des artistes et de la Culture en général suite aux restrictions sanitaires imposées par la propagation de la COVID-19.')
            ->setMedia('gcm.jpeg')
            ->setCategory($rap)
            ->setArtist($gcm);
        $manager->persist($show6);

        $show7 = new Show();
        /** @var \App\Entity\Artist $plk */
        $plk = $this->getReference(ArtistFixtures::ARTIST7);
        $show7
            ->setName('Tournée')
            ->setDescription('Il y a deux ans, SCH signait un retour en grande pompe avec le premier volet de la saga JVLIVS.
            Deux ans plus tard, après avoir tenu en haleine ses fans avec l’ambitieux ROOFTOP’ et sa brillante participation à ’13 Organisé’, SCH décide enfin d’assouvir les attentes d’un public, toujours plus nombreux.
            En explosant son record de lancement, SCH prouve une nouvelle fois, que son album «JVLIVS II » sorti en Mars 2021, est sans l’ombre d’un doute, le plus attendu de l’année sur la scène Rap FR.
            Il sera certifié disque d’or en 4 jours seulement, et comptabilisera plus de 60000 ventes en première semaine.')
            ->setMedia('plk.jpeg')
            ->setCategory($rap)
            ->setArtist($plk);
        $manager->persist($show7);

        $show8 = new Show();
        /** @var \App\Entity\Artist $bigflo */
        $bigflo = $this->getReference(ArtistFixtures::ARTIST8);
        $show8
            ->setName('Les stades')
            ->setDescription('5 ans après leur premier Stadium à Toulouse (en 2019), Bigflo et Oli sont de retour !  Bigflo & Oli annoncent une tournée des stades en 2024 avec une deuxième date au Stadium de Toulouse le 9 juin 2024, Lyon à la LDLC Arena le 26 mai 2024, Lille au Decathlon Arena - Stade Pierre Mauroy le 31 mai 2024… Cette tournée des stades fait suite à une tournée des Zéniths de plus de 40 dates sold-out. Elle commencera à Paris La Défense Arena le 8 décembre 2023.')
            ->setMedia('bigflo.png')
            ->setCategory($rap)
            ->setArtist($bigflo);
        $manager->persist($show8);

        $show9 = new Show();
        /** @var \App\Entity\Artist $josman */
        $josman = $this->getReference(ArtistFixtures::ARTIST9);
        $show9
            ->setName('M.A.N TOUR')
            ->setDescription('Depuis la sortie de son premier album J.O.$ en 2018, Josman enchaîne les certifications (dont J.O.$ platine, SPLIT or) et les tournées à guichets fermés (dont un Olympia et un Zénith complets en 2022). Un parcours sans faute que le rappeur a confirmé avec la sortie de son troisième album M.A.N en mars 2022, sans aucun doute le projet le plus abouti de sa carrière que ce soit dans la variation des flows, la qualité des textes et la richesse des thèmes abordés. Numéro #1 du top album à sa sortie, M.A.N a été certifié disque d’or en seulement 3 mois.')
            ->setMedia('josman.webp')
            ->setCategory($rap)
            ->setArtist($josman);
        $manager->persist($show9);

        $show10 = new Show();
        /** @var \App\Entity\Artist $shaka */
        $shaka = $this->getReference(ArtistFixtures::ARTIST10);
        $show10
            ->setName('The final F*cked Up Tour')
            ->setDescription('Après plusieurs années d’absence, 2023 marquera le grand retour de Shaka Ponk. Des shows de pure énergie, Punk et Rock n’Roll dans plus de 40 salles à travers toute la France. Cette fois, ne les ratez sous aucun prétexte car ce sera… THE FINAL FUCKED UP TOUR !')
            ->setMedia('shaka.webp')
            ->setCategory($rock)
            ->setArtist($shaka);
        $manager->persist($show10);

        $show11 = new Show();
        /** @var \App\Entity\Artist $yodelice */
        $yodelice = $this->getReference(ArtistFixtures::ARTIST11);
        $show11
            ->setName('Tournée')
            ->setDescription('Cette année, Yodelice revient avec une musique à la hauteur de notre époque, complexe, aux nuances sombres et à la soif immense de lumière. Rage, joie et sensualité irradient ce nouveau projet à venir à l’automne, qui croise influences rock et électro en une seule course furieuse.')
            ->setMedia('yodelice.jpeg')
            ->setCategory($rock)
            ->setArtist($yodelice);
        $manager->persist($show11);

        $show12 = new Show();
        /** @var \App\Entity\Artist $chris */
        $chris = $this->getReference(ArtistFixtures::ARTIST12);
        $show12
            ->setName('Tournée')
            ->setDescription('En tant que compositeur exigeant, il a embrassé le style de ses idoles du Memphis des années 1950, mêlant habilement rockabilly, rythm\'n\'blues traditionnel et surf rock en neuf albums de qualité. En 2012, l\'Américain fidèle à ses racines livre un hommage aux productions Sun Records à travers Beyond the Sun. Il retrouve Nashville, le berceau du rock et de la musique country trois ans plus tard à l\'occasion de l\'enregistrement de son vingtième album, First Comes the Night.
            Ne manquez pas Chris Isaak en concert !')
            ->setMedia('chris.jpeg')
            ->setCategory($rock)
            ->setArtist($chris);
        $manager->persist($show12);

        $show13 = new Show();
        /** @var \App\Entity\Artist $ibrahim */
        $ibrahim = $this->getReference(ArtistFixtures::ARTIST13);
        $show13
            ->setName('Les trompettes de Michel Ange')
            ->setDescription('Après 17 albums et une prestigieuse nomination aux Grammy Awards à Los Angeles, Ibrahim Maalouf revient en grand avec un projet musical innovant.
            Comme à son habitude, Ibrahim tente le pari d’une musique exigeante mais accessible au grand public.
            Avec T.O.M.A, Ibrahim pose la première pierre d\'un ambitieux projet de vie qui a pour but de nous rassembler autour de valeurs communes.')
            ->setMedia('ibrahim.png')
            ->setCategory($jazz)
            ->setArtist($ibrahim);
        $manager->persist($show13);

        $show14 = new Show();
        /** @var \App\Entity\Artist $pepper */
        $pepper = $this->getReference(ArtistFixtures::ARTIST14);
        $show14
            ->setName('Concert Jazz')
            ->setDescription('Pepper Swing, pour la première fois au Prohibido.
            Jazz Manouche en avant toute ! Quartet ou Quintet ce sera la surprise. 
            Des standard du genre et des compositions…')
            ->setMedia('pepper.jpeg')
            ->setCategory($jazz)
            ->setArtist($pepper);
        $manager->persist($show14);
        
        $show15 = new Show();
        /** @var \App\Entity\Artist $lynshow */
        $lynshow = $this->getReference(ArtistFixtures::ARTIST15);
        $show15
            ->setName('Cabaret')
            ->setDescription('Bienvenue dans cette revue fascinante ! Le chanteur Cyril Lyns et ses danseuses vous feront voyager avec un spectacle féerique digne des plus grands cabarets : plumes, strass, paillettes, l’indémodable french cancan, sans oublier une touche d’humour. Les chorégraphies et les costumes donneront à cette soirée de gala une dimension particulière et offriront au public un spectacle inoubliable !')
            ->setMedia('lynshow.jpeg')
            ->setCategory($cabaret)
            ->setArtist($lynshow);
        $manager->persist($show15);

        $show16 = new Show();
        /** @var \App\Entity\Artist $licques */
        $licques = $this->getReference(ArtistFixtures::ARTIST16);
        $show16
            ->setName('Fantastic Repas')
            ->setDescription('Pour sa rentrée, le Cabaret de Licques vous propose un repas-spectacle époustouflant, qui pétille d’humour et de magie dans un format inédit. Un show fantastique, entrecoupé de numéros de chanteuses, jongleurs, humoristes et contorsionnistes saisissants dignes des plus grands Cabarets.')
            ->setMedia('licques.jpeg')
            ->setCategory($cabaret)
            ->setArtist($licques);
        $manager->persist($show16);

        $show17 = new Show();
        /** @var \App\Entity\Artist $roiLion */
        $roiLion = $this->getReference(ArtistFixtures::ARTIST17);
        $show17
            ->setName('Le Roi Lion')
            ->setDescription('Adaptée du célèbre film d’animation de Disney qui s’apprête à fêter ses 30 ans cette année, cette comédie musicale a déjà conquis plus de 112 millions de personnes, en 9 langues, dans 25 pays, sur tous les continents.
            Un des shows les plus grandioses jamais produit en France.
            Toutes les générations se retrouvent dans cette histoire universelle et ces musiques composées par des artistes de renom, d’Elton John à Hans Zimmer en passant par Lebo M.')
            ->setMedia('roilion.jpeg')
            ->setCategory($bigShow)
            ->setArtist($roiLion);
        $manager->persist($show17);

        $show18 = new Show();
        /** @var \App\Entity\Artist $patrick */
        $patrick = $this->getReference(ArtistFixtures::ARTIST18);
        $show18
            ->setName('Berlin Berlin')
            ->setDescription('Berlin Berlin au Théâtre Fontaine 
            Berlin Est. Emma et Ludwig veulent s’enfuir et passer à l’Ouest. Emma se fait engager comme aide-soignante chez Werner Hofmann pour s’occuper de sa vieille mère sénile. Elle n’est pas là par hasard, cet appartement possède un passage secret qui mène de l’autre côté du Mur. La situation est déjà suffisamment compliquée mais si en plus Werner est un agent de la Stasi, qu’il tombe fou amoureux d’Emma, et que l’appartement est un nid d’espions, ça tourne au burlesque. Berlin Berlin, la comédie qui fait tomber les murs. 
            Molière de la meilleure Comédie 2022
            Molière du meilleur comédien 2022
            DISTRIBUTION
            À partir du 7 septembre : Avec Patrick Haudecœur, Lysiane Meis, Guillaume Bouchède, Michel Lerousseau, Raïssa Mariotti, Guilhem Pellegrin, Claude Guyonnet, Gino Lazzerini, Caroline Maillard
            Décor Édouard Laug Costumes Juliette Chanaud Lumière Laurent Béal Musique Michel Winogradoff Assistant mise en scène Guillaume Rubeaud Vidéo Sébastien Mizermont Accessoires Betty Lemoine')
            ->setMedia('berlin.jpeg')
            ->setCategory($comedy)
            ->setArtist($patrick);
        $manager->persist($show18);

        $show19 = new Show();
        /** @var \App\Entity\Artist $portner */
        $portner = $this->getReference(ArtistFixtures::ARTIST19);
        $show19
            ->setName('Derniers coups de ciseaux')
            ->setDescription('Avec, en alternance, Domitille BIORET ou Marie-France SANTON, Thierry LANCKRIET ou Romain TOMAS,Jean-Marie ROLLIN ou Pierre SAMUEL, Salomé TALABOULMA, Morgane CABOT ou ELISA AZE, Richard DELESTRE ou Mathias BORD, Laurent HUGNY ou Cyril GARNIER
            Décor de Juliette AZZOPARDI – Costumes de Pauline GALLOT – Lumières de Mamet MAARATIE
            Une comédie policière interactive. Un meurtre est commis chaque soir et c’est au public de résoudre l’enquête. 30 ans de succès et guinness des records de longévité aux usa ! plus de 9 millions de spectateurs à travers le monde. Un salon de coiffure, un meurtre, un flic… des suspects, à vous de jouer ! la première pièce dont le public est le héros…
            ')
            ->setMedia('ciseaux.jpeg')
            ->setCategory($comedy)
            ->setArtist($portner);
        $manager->persist($show19);

        $show20 = new Show();
        /** @var \App\Entity\Artist $alan */
        $alan = $this->getReference(ArtistFixtures::ARTIST19);
        $show20
            ->setName('L\'amour chez les autres')
            ->setDescription('Les Foster, les Phillips et les Pierreplume se connaissent bien, les trois hommes travaillent ensemble. Franck Foster est le chef de ce petit monde et Bob Phillips espère devenir son numéro deux très prochainement, William Pierreplume vient quant à lui d’intégrer l\'entreprise.

            Cependant, Fiona Foster et Bob Phillips se connaissent encore mieux, car ils entretiennent une liaison ! La veille encore, ils étaient ensemble et sont rentrés dans leurs foyers respectifs trop tardivement et trop éméchés pour ne pas éveiller les soupçons de leurs conjoints. Pour se couvrir, ils décident de mentir en prétendant chacun avoir passé la soirée avec le mari et la femme Pierreplume.
            
            Ignorant qu’ils servent d\'alibi, les Pierreplume sont invités à dîner chez les Foster et les Phillips.
            
            Deux invitations qu\'ils se sentent obligés d’accepter… Pour le meilleur, pour le pire et pour le rire.
            ')
            ->setMedia('amour.jpeg')
            ->setCategory($comedy)
            ->setArtist($alan);
        $manager->persist($show20);

        $show21 = new Show();
        /** @var \App\Entity\Artist $mirabel */
        $mirabel = $this->getReference(ArtistFixtures::ARTIST21);
        $show21
            ->setName('Par amour')
            ->setDescription('Texte et mise en scène : Paul Mirabel
            ')
            ->setMedia('paul.jpeg')
            ->setCategory($oneman)
            ->setArtist($mirabel);
        $manager->persist($show21);
        
        $show22 = new Show();
        /** @var \App\Entity\Artist $reg */
        $reg = $this->getReference(ArtistFixtures::ARTIST22);
        $show22
            ->setName('On est ensemble')
            ->setDescription('A partir de 2013, Inès Reg aiguise son style en enchainant les scènes ouvertes. Elle participe notamment au Talent Show des Feux de la Rampe et au Deb Jam Comedy du Jamel Comedy Club. En 2019, Inès Reg publie sur ses réseaux la célèbre vidéo « Je veux que tu m’mettes des paillettes dans ma vie Kevin » avec son compagnon et co-auteur Kevin Debonne. Cette vidéo improvisée fait sensation sur la toile : avec plus de 4 millions de vues en cinq jours sur Youtube, Inès Reg connaît une popularité fulgurante.
            Après avoir conquis 500.000 spectateurs, Inès revient avec son nouveau spectacle.
            Bisou
            ')
            ->setMedia('reg.jpeg')
            ->setCategory($oneman)
            ->setArtist($reg);
        $manager->persist($show22);

        $show23 = new Show();
        /** @var \App\Entity\Artist $keirhon */
        $keirhon = $this->getReference(ArtistFixtures::ARTIST23);
        $show23
            ->setName('Dragon')
            ->setDescription('"Dans la mythologie grecque, le Dragon est le protecteur des lieux sacrés et de leurs trésors : tant qu’il veille, aucune profanation n’est possible.Dernier endroit où on peut encore rire de tout, la scène est mon sanctuaire. J’en suis le gardien."
            Kheiron
            Bisou
            ')
            ->setMedia('keirhon.jpeg')
            ->setCategory($oneman)
            ->setArtist($keirhon);
        $manager->persist($show23);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            ArtistFixtures::class
        ];
    }
}
