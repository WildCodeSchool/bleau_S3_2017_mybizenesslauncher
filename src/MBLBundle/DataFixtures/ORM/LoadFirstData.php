<?php

namespace MBLBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MBLBundle\Entity\Competences;
use MBLBundle\Entity\Dispo;
use MBLBundle\Entity\ETQ;
use MBLBundle\Entity\Invest;
use MBLBundle\Entity\Metier;
use MBLBundle\Entity\Ou;
use MBLBundle\Entity\Secteur;
use MBLBundle\Entity\TypeDeProjet;

class LoadMetiersData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){

        $metiers = array(
            'Graphiste',
            'Marketer',
            'Business Developpeur',
            'Développeur',
            'Ingénieur',
            'Responsable des Opérations',
            'Juriste',
            'Responsable Financier',
            'Investisseur',
            'Autre'
            );

        foreach ($metiers as $metier){
            $m = new Metier();
            $m->setMetier($metier);
            $manager->persist($m);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }

}

class LoadCompetencesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {

        $competences = array(
            'renseignez vos compétences',
            '3D Graphic Design',
            'Comptabilité',
            'Adobe Suite',
            'Autre',
            'B2B',
            'B2C',
            'Développeur Backend',
            'Bloggeur',
            'Business Developpeur',
            'C',

            'C++',
            'Community Management',
            'Négociation de contrat',
            'CSS',
            'Customer Relationship Management (CMR)',
            'Customer Service',
            'Base de Données',
            'Développeur',
            'Digital Marketing',
            'Droit',

            'Event Management',
            'Event Planning',
            'Fashion',
            'Finance',
            'Développeur Frontend',
            'Développeur Fullstack',
            'Google Analytics',
            'Graphic Design',
            'Growth Hacker',
            'HTML',

            'Ressources Humaines',
            'Illustrator',
            'Indesign',
            'Java',
            'Javascript',
            'JQuery',
            'KPI',
            'Leadership',
            'Legal',
            'Linux',

            'Logo Design',
            'Management',
            'Marketing',
            'Microsoft Excel',
            'Microsoft Office',
            'Microsoft PowerPoint',
            'Microsoft Word',
            'MySQL',
            'Negociation',
            'Node.Js',

            'Office Suite',
            'Online Marketing',
            'Photoshop',
            'PHP',
            'Achats',
            'Project Management',
            'Conférencier',
            'QuarkXPress',
            'Recrutement',
            'Ruby',

            'Ventes',
            'SEO',
            'SQL',
            'Social Media Marketing',
            'Production',
            'Travail d\'équipe',
            'Video',
            'Video Game',
            'Video Production',
            'Visual Basic',

            'Web Design',
            'Développement Web',
            'WordPress',
            'Xpress'
        );

        foreach ($competences as $competence){
            $m = new Competences();
            $m->setCompetences($competence);
            $manager->persist($m);
        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }

}

class LoadDisponibiliteData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $dispos = array(
            'Plein-temps',
            '5 heures par semaine',
            '10 heures par semaine',
            '15 heures par semaine',
            '20 heures par semaine',
            '25 heures par semaine'
        );

        foreach ($dispos as $dispo) {
            $m = new Dispo();
            $m->setDispo($dispo);
            $manager->persist($m);
        }
        $manager->flush();
    }



    public function getOrder()
    {
        return 3;
    }

}

class LoadOuCaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $oucas = array(
            'Télétravail',
            'Sur place',
            'Flexible'
        );

        foreach ($oucas as $ouca) {
            $m = new Ou();
            $m->setOu($ouca);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}

class LoadInvestissementData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $invests = array(
            'Non',
            'moin de 1000',
            '1000-5000',
            '5000-10000',
            '10000-20000',
            '20000-50000',
            '50000-100000',
            '100000-200000',
            'plus de 200000'
        );

        foreach ($invests as $invest) {
            $m = new Invest();
            $m->setInvest($invest);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
}

class LoadDispoETQData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $dispoETQ = array(
            'Associé',
            'Employé',
            'Flexible'
        );


        foreach ($dispoETQ as $ETQ) {
            $m = new ETQ();
            $m->setETQ($ETQ);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 6;
    }
}

class LoadTypeDeProjetData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $typedeprojets = array(
            'Application Mobile',
            'Jeu Video',
            'Logiciel',
            'Site Internet',
            'Commerce',
            'Société de Services',
            'Produit',
            'Autre'
        );

        foreach ($typedeprojets as $typedeprojet) {
            $m = new TypeDeProjet();
            $m->setTypeDeProjet($typedeprojet);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 7;
    }
}

class LoadSecteurData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $secteurs = array(
            'Activité commerciale',
            'Agriculture',
            'Agroalimentaire',
            'Animaux',
            'Art et Culture',
            'Autre',
            'Big Data',
            'BioTech/MedTech',
            'CleanTech',
            'Digital',

            'Education',
            'Environnement',
            'Finance',
            'Formation',
            'Immobilier',
            'Industrie',
            'Jeux',
            'Luxe',
            'Media',
            'Mode',

            'Photo',
            'Publicité',
            'Restauration',
            'Robotique',
            'Santé ',
            'Sécurité',
            'Services ',
            'Silver Economy',
            'Sport',
            'Technologie',

            'Tourisme',
            'Transport/Logistique',
            'Web'
        );

        foreach ($secteurs as $secteur) {
            $m = new Secteur();
            $m->setSecteurActivite($secteur);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 8;
    }
}
