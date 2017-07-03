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
use MBLBundle\Entity\Profil;
use MBLBundle\Entity\Secteur;
use MBLBundle\Entity\TypeDeProjet;

class LoadFirstData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $UserAdmin = new Profil();
        $UserAdmin->setUsername("superadmin");
        $UserAdmin->setEmail("superadmin@gmail.com");
        $UserAdmin->setPlainPassword("root");
        $UserAdmin->setSuperAdmin(true);
        $UserAdmin->setEnabled(true);
        $manager->persist($UserAdmin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 9;
    }
}

class LoadMetiersData extends AbstractFixture implements OrderedFixtureInterface
{
   public function load(ObjectManager $manager){

        $metiers = array(
            array('1'=>'Graphiste','2'=>'Grafico'),
            array('1'=>'Marketer','2'=>'Marketer'),
            array('1'=>'Business Developpeur','2'=>'Business Developer'),
            array('1'=>'Développeur','2'=>'Sviluppatore'),
            array('1'=>'Ingénieur','2'=>'Ingegnere'),
            array('1'=>'Responsable des Opérations','2'=>'Responsabile Operativo'),
            array('1'=>'Juriste','2'=>'Giurista'),
            array('1'=>'Responsable Financier','2'=>'Responsabile Finanziario'),
            array('1'=>'Investisseur','2'=>'Investitore'),
            array('1'=>'Autre', '2'=>'Altro')
            );

        foreach ($metiers as $metier){
            $m = new Metier();
            $m->setMetierFr($metier['1']);
            $m->setMetierIt($metier['2']);
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
            array('1'=>'Renseignez vos compétences','2'=>''),
            array('1'=>'3D Graphic Design','2'=>'3D Graphic Design'),
            array('1'=>'Comptabilité','2'=>'Contabilità'),
            array('1'=>'Adobe Suite','2'=>'Adobe Suite'),
            array('1'=>'Autre','2'=>'Altro'),
            array('1'=>'B2B','2'=>'B2B'),
            array('1'=>'B2C','2'=>'B2C'),
            array('1'=>'Développeur Backend','2'=>'Sviluppatore backend'),
            array('1'=>'Bloggeur','2'=>'Blogger'),
            array('1'=>'Business Développeur','2'=>'Business Sviluppatore '),
            array('1'=>'C','2'=>'C'),

            array('1'=>'C++','2'=>'C++'),
            array('1'=>'Community Management','2'=>'Gestione della comunità'),
            array('1'=>'Négociation de contrat','2'=>'Trattative contrattuali'),
            array('1'=>'CSS','2'=>'CSS'),
            array('1'=>'Customer Relationship Management (CMR)','2'=>'Gestione delle relazioni con i clienti'),
            array('1'=>'Customer Service','2'=>'Assistenza clienti'),
            array('1'=>'Base de Données','2'=>'Base di dati'),
            array('1'=>'Développeur','2'=>'Sviluppatore'),
            array('1'=>'Digital Marketing','2'=>'Marketing digitale'),
            array('1'=>'Droit','2'=>'Diritto'),

            array('1'=>'Event Management','2'=>'Gestione di eventi'),
            array('1'=>'Event Planning','2'=>'Pianificazione eventi'),
            array('1'=>'Fashion','2'=>'Moda'),
            array('1'=>'Finance','2'=>'Finanza'),
            array('1'=>'Développeur Frontend','2'=>'Sviluppatore Frontend'),
            array('1'=>'Développeur Fullstack','2'=>'Sviluppatore Fullstack'),
            array('1'=>'Google Analytics','2'=>'Google Analytics'),
            array('1'=>'Graphic Design','2'=>'Disegno grafico'),
            array('1'=>'Growth Hacker','2'=>'Hacker di crescita'),
            array('1'=>'HTML','2'=>'HTML'),

            array('1'=>'Ressources Humaines','2'=>'Risorse Umane'),
            array('1'=>'Illustrator','2'=>'Illustrator'),
            array('1'=>'Indesign','2'=>'Indesign'),
            array('1'=>'Java','2'=>'Java'),
            array('1'=>'Javascript','2'=>'Javascript'),
            array('1'=>'JQuery','2'=>'JQuery'),
            array('1'=>'KPI','2'=>'KPI'),
            array('1'=>'Leadership','2'=>'Comando'),
            array('1'=>'Legal','2'=>'Legale'),
            array('1'=>'Linux','2'=>'Linux'),

            array('1'=>'Logo Design','2'=>'Logo Design'),
            array('1'=>'Management','2'=>'Gestione'),
            array('1'=>'Marketing','2'=>'Marketing'),
            array('1'=>'Microsoft Excel','2'=>'Microsoft Excel'),
            array('1'=>'Microsoft Office','2'=>'Microsoft Office'),
            array('1'=>'Microsoft PowerPoint','2'=>'Microsoft PowerPoint'),
            array('1'=>'Microsoft Word','2'=>'Microsoft Word'),
            array('1'=>'MySQL','2'=>'MySQL'),
            array('1'=>'Negociation','2'=>'Trattativa'),
            array('1'=>'Node.Js','2'=>'Node.Js'),

            array('1'=>'Office Suite','2'=>'Office Suite'),
            array('1'=>'Online Marketing','2'=>'Marketing online'),
            array('1'=>'Photoshop','2'=>'Photoshop'),
            array('1'=>'PHP','2'=>'PHP'),
            array('1'=>'Achats','2'=>'Acquisti'),
            array('1'=>'Project Management','2'=>'Gestione di progetto'),
            array('1'=>'Conférencier','2'=>'Altoparlante'),
            array('1'=>'QuarkXPress','2'=>'QuarkXPress'),
            array('1'=>'Recrutement','2'=>'Reclutamento'),
            array('1'=>'Ruby','2'=>'Ruby'),

            array('1'=>'Ventes','2'=>'Vendite'),
            array('1'=>'SEO','2'=>'SEO'),
            array('1'=>'SQL','2'=>'SQL'),
            array('1'=>'Social Media Marketing','2'=>'Social media marketing'),
            array('1'=>'Production','2'=>'Produzione'),
            array('1'=>'Travail d\'équipe','2'=>'Lavoro di squadra'),
            array('1'=>'Video','2'=>'Video'),
            array('1'=>'Video Game','2'=>'Videogiochi'),
            array('1'=>'Video Production','2'=>'Produzione video'),
            array('1'=>'Visual Basic','2'=>'Visual Basic'),

            array('1'=>'Web Design','2'=>'Web Design'),
            array('1'=>'Développement Web','2'=>'Sviluppatore Web'),
            array('1'=>'WordPress','2'=>'WordPress'),
            array('1'=>'Xpress','2'=>'Xpress')
        );

        foreach ($competences as $competence){
            $m = new Competences();
            $m->setCompetencesFr($competence['1']);
            $m->setCompetencesIt($competence['2']);
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
            array('1'=>'Plein-temps', '2'=>'A tempo pieno'),
            array('1'=>'5 heures par semaine', '2'=>'5 ore a settimana'),
            array('1'=>'10 heures par semaine', '2'=>'10 ore a settimana'),
            array('1'=>'15 heures par semaine', '2'=>'15 ore a settimana'),
            array('1'=>'20 heures par semaine', '2'=>'20 ore a settimana'),
            array('1'=>'25 heures par semaine', '2'=>'25 ore a settimana')
        );

        foreach ($dispos as $dispo) {
            $m = new Dispo();
            $m->setDispoFr($dispo['1']);
            $m->setDispoIt($dispo['2']);
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
            array('1'=>'Télétravail','2'=>'Telelavoro'),
            array('1'=>'Sur place','2'=>'Sul posto'),
            array('1'=>'Flexible','2'=>'Flessibile')
        );

        foreach ($oucas as $ouca) {
            $m = new Ou();
            $m->setOuFr($ouca['1']);
            $m->setOuIt($ouca['2']);
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
            array('1'=>'Non', '2'=>'Non'),
            array('1'=>'moin de 1000', '2'=>'inferiore a 1000'),
            array('1'=>'1000-5000', '2'=>'1000-5000'),
            array('1'=>'5000-10000', '2'=>'5000-10000'),
            array('1'=>'10000-20000', '2'=>'10000-20000'),
            array('1'=>'20000-50000', '2'=>'20000-50000'),
            array('1'=>'50000-100000', '2'=>'50000-100000'),
            array('1'=>'100000-200000', '2'=>'100000-200000'),
            array('1'=>'plus de 200000', '2'=>'oltre 200000')
        );

        foreach ($invests as $invest) {
            $m = new Invest();
            $m->setInvestFr($invest['1']);
            $m->setInvestIt($invest['2']);
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
            array('1'=>'Associé','2'=>'Partner'),
            array('1'=>'Employé','2'=>'Dipendente'),
            array('1'=>'Flexible','2'=>'Flessibile')

        );


        foreach ($dispoETQ as $ETQ) {

                $m = new ETQ();
                $m->setEtqFr($ETQ['1']);
                $m->setEtqIt($ETQ['2']);
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
            array('1'=>'Application Mobile', '2'=>'Appicazione mobile'),
            array('1'=>'Jeu Video', '2'=>'Videogioco'),
            array('1'=>'Logiciel', '2'=>'Software'),
            array('1'=>'Site Internet', '2'=>'Sito Internet'),
            array('1'=>'Commerce', '2'=>'Commercio'),
            array('1'=>'Société de Services', '2'=>'Servizi'),
            array('1'=>'Produit', '2'=>'Prodotti'),
            array('1'=>'Autre', '2'=>'Altro')
        );

        foreach ($typedeprojets as $typedeprojet) {
            $m = new TypeDeProjet();
            $m->setTypeDeProjetFr($typedeprojet['1']);
            $m->setTypeDeProjetIt($typedeprojet['2']);

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
            array('1'=>'Activité commerciale', '2'=>'Attivita Commerciale'),
            array('1'=>'Agriculture', '2'=>'Agricoltura'),
            array('1'=>'Agroalimentaire', '2'=>'Agro-alimentare'),
            array('1'=>'Animaux', '2'=>'Animali'),
            array('1'=>'Art et Culture', '2'=>'Arte e Cultura'),
            array('1'=>'Autre', '2'=>'Altro '),
            array('1'=>'Big Data', '2'=>'Big Data'),
            array('1'=>'BioTech/MedTech', '2'=>'BioTech/MedTech'),
            array('1'=>'CleanTech', '2'=>'CleanTech'),
            array('1'=>'Digital', '2'=>'Digital'),

            array('1'=>'Education', '2'=>'Educazione'),
            array('1'=>'Environnement', '2'=>'Ambiente'),
            array('1'=>'Finance', '2'=>'Finanza'),
            array('1'=>'Formation', '2'=>'Formazione'),
            array('1'=>'Immobilier', '2'=>'Immobiliare'),
            array('1'=>'Industrie', '2'=>'Industria'),
            array('1'=>'Jeux', '2'=>'Gioco'),
            array('1'=>'Luxe', '2'=>'Lusso'),
            array('1'=>'Media', '2'=>'Media'),
            array('1'=>'Mode', '2'=>'Moda'),

            array('1'=>'Photo', '2'=>'Fotografia'),
            array('1'=>'Publicité', '2'=>'Publiccità '),
            array('1'=>'Restauration', '2'=>'Restaurazione'),
            array('1'=>'Robotique', '2'=>'Robotica'),
            array('1'=>'Santé ', '2'=>'Sanità '),
            array('1'=>'Sécurité', '2'=>'Sicurezza'),
            array('1'=>'Services ', '2'=>'Servizi '),
            array('1'=>'Silver Economy', '2'=>'Anziani'),
            array('1'=>'Sport', '2'=>'Sport'),
            array('1'=>'Technologie', '2'=>'Tecnologia'),

            array('1'=>'Tourisme', '2'=>'Turismo'),
            array('1'=>'Transport/Logistique', '2'=>'Trasporto / logistica'),
            array('1'=>'Web', '2'=>'Web')
        );

        foreach ($secteurs as $secteur) {
            $m = new Secteur();
            $m->setSecteurActiviteFr($secteur['1']);
            $m->setSecteurActiviteIt($secteur['2']);
            $manager->persist($m);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 8;
    }
}
