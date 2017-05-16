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
            array('profil' => 'Graphiste'),
            array('profil' => 'Marketer'),
            array('profil' => 'Business Developpeur'),
            array('profil' => 'Développeur'),
            array('profil' => 'Ingénieur'),
            array('profil' => 'Responsable des Opérations'),
            array('profil' => 'Juriste'),
            array('profil' => 'Responsable Financier'),
            array('profil' => 'Investisseur'),
            array('profil' => 'Autre')
            );

        foreach ($metiers as $metier){
            $m = new Metier();
            $m->setMetier($metier['profil']);
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
            array('competences' => '3D Graphic Design'),
            array('competences' => 'Comptabilité'),
            array('competences' => 'Adobe Suite'),
            array('competences' => 'Autre'),
            array('competences' => 'B2B'),
            array('competences' => 'B2C'),
            array('competences' => 'Développeur Backend'),
            array('competences' => 'Bloggeur'),
            array('competences' => 'Business Developpeur'),
            array('competences' => 'C'),

            array('competences' => 'C++'),
            array('competences' => 'Community Management'),
            array('competences' => 'Négociation de contrat'),
            array('competences' => 'CSS'),
            array('competences' => 'Customer Relationship Management (CMR)'),
            array('competences' => 'Customer Service'),
            array('competences' => 'Base de Données'),
            array('competences' => 'Développeur'),
            array('competences' => 'Digital Marketing'),
            array('competences' => 'Droit'),

            array('competences' => 'Event Management'),
            array('competences' => 'Event Planning'),
            array('competences' => 'Fashion'),
            array('competences' => 'Finance'),
            array('competences' => 'Développeur Frontend'),
            array('competences' => 'Développeur Fullstack'),
            array('competences' => 'Google Analytics'),
            array('competences' => 'Graphic Design'),
            array('competences' => 'Growth Hacker'),
            array('competences' => 'HTML'),

            array('competences' => 'Ressources Humaines'),
            array('competences' => 'Illustrator'),
            array('competences' => 'Indesign'),
            array('competences' => 'Java'),
            array('competences' => 'Javascript'),
            array('competences' => 'JQuery'),
            array('competences' => 'KPI'),
            array('competences' => 'Leadership'),
            array('competences' => 'Legal'),
            array('competences' => 'Linux'),

            array('competences' => 'Logo Design'),
            array('competences' => 'Management'),
            array('competences' => 'Marketing'),
            array('competences' => 'Microsoft Excel'),
            array('competences' => 'Microsoft Office'),
            array('competences' => 'Microsoft PowerPoint'),
            array('competences' => 'Microsoft Word'),
            array('competences' => 'MySQL'),
            array('competences' => 'Negociation'),
            array('competences' => 'Node.Js'),

            array('competences' => 'Office Suite'),
            array('competences' => 'Online Marketing'),
            array('competences' => 'Photoshop'),
            array('competences' => 'PHP'),
            array('competences' => 'Achats'),
            array('competences' => 'Project Management'),
            array('competences' => 'Conférencier'),
            array('competences' => 'QuarkXPress'),
            array('competences' => 'Recrutement'),
            array('competences' => 'Ruby'),

            array('competences' => 'Ventes'),
            array('competences' => 'SEO'),
            array('competences' => 'SQL'),
            array('competences' => 'Social Media Marketing'),
            array('competences' => 'Production'),
            array('competences' => 'Travail d\'équipe'),
            array('competences' => 'Video'),
            array('competences' => 'Video Game'),
            array('competences' => 'Video Production'),
            array('competences' => 'Visual Basic'),

            array('competences' => 'Web Design'),
            array('competences' => 'Développement Web'),
            array('competences' => 'WordPress'),
            array('competences' => 'Xpress')
        );

        foreach ($competences as $competence){
            $m = new Competences();
            $m->setCompetences($competence['competences']);
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
            array('dispo' => 'Plein-temps'),
            array('dispo' => '5 heures par semaine'),
            array('dispo' => '10 heures par semaine'),
            array('dispo' => '15 heures par semaine'),
            array('dispo' => '20 heures par semaine'),
            array('dispo' => '25 heures par semaine')
        );

        foreach ($dispos as $dispo) {
            $m = new Dispo();
            $m->setDispo($dispo['dispo']);
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
            array('ouca' => 'Télétravail'),
            array('ouca' => 'Sur place'),
            array('ouca' => 'Flexible')
        );

        foreach ($oucas as $ouca) {
            $m = new Ou();
            $m->setOu($ouca['ouca']);
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
            array('invest' => 'Non'),
            array('invest' => 'moin de 1000'),
            array('invest' => '1000-5000'),
            array('invest' => '5000-10000'),
            array('invest' => '10000-20000'),
            array('invest' => '20000-50000'),
            array('invest' => '50000-100000'),
            array('invest' => '100000-200000'),
            array('invest' => 'plus de 200000')
        );

        foreach ($invests as $invest) {
            $m = new Invest();
            $m->setInvest($invest['invest']);
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
            array('ETQ' => 'Associé'),
            array('ETQ' => 'Employé'),
            array('ETQ' => 'Flexible')
        );


        foreach ($dispoETQ as $ETQ) {
            $m = new ETQ();
            $m->setETQ($ETQ['ETQ']);
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
            array('typedeprojet' => 'Application Mobile'),
            array('typedeprojet' => 'Jeu Video'),
            array('typedeprojet' => 'Logiciel'),
            array('typedeprojet' => 'Site Internet'),
            array('typedeprojet' => 'Commerce'),
            array('typedeprojet' => 'Société de Services'),
            array('typedeprojet' => 'Produit'),
            array('typedeprojet' => 'Autre')
        );

        foreach ($typedeprojets as $typedeprojet) {
            $m = new TypeDeProjet();
            $m->setTypeDeProjet($typedeprojet['typedeprojet']);
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
            array('secteur' => 'Activité commerciale'),
            array('secteur' => 'Agriculture'),
            array('secteur' => 'Agroalimentaire'),
            array('secteur' => 'Animaux'),
            array('secteur' => 'Art et Culture'),
            array('secteur' => 'Autre'),
            array('secteur' => 'Big Data'),
            array('secteur' => 'BioTech/MedTech'),
            array('secteur' => 'CleanTech'),
            array('secteur' => 'Digital'),

            array('secteur' => 'Education'),
            array('secteur' => 'Environnement'),
            array('secteur' => 'Finance'),
            array('secteur' => 'Formation'),
            array('secteur' => 'Immobilier'),
            array('secteur' => 'Industrie'),
            array('secteur' => 'Jeux'),
            array('secteur' => 'Luxe'),
            array('secteur' => 'Media'),
            array('secteur' => 'Mode'),

            array('secteur' => 'Photo'),
            array('secteur' => 'Publicité'),
            array('secteur' => 'Restauration'),
            array('secteur' => 'Robotique'),
            array('secteur' => 'Santé '),
            array('secteur' => 'Sécurité'),
            array('secteur' => 'Services '),
            array('secteur' => 'Silver Economy'),
            array('secteur' => 'Sport'),
            array('secteur' => 'Technologie'),

            array('secteur' => 'Tourisme'),
            array('secteur' => 'Transport/Logistique'),
            array('secteur' => 'Web')
        );

        foreach ($secteurs as $secteur) {
            $m = new Secteur();
            $m->setSecteurActivite($secteur['secteur']);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 8;
    }
}
