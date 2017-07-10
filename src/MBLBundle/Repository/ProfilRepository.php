<?php

namespace MBLBundle\Repository;

/**
 * ProfilRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProfilRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $locale
     * @return array
     */
    public function myfindByVDeux($locale, $idloc, $idmetier)
    {

        if (!empty($idloc) && is_numeric($idmetier)) {

            $qb = $this->createQueryBuilder('p');
            $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
                ->join('p.metier', 'm')
                ->addSelect('m.metier' . $locale . ' as metier')
                ->where('m.id = :met')
                ->setParameter('met', $idmetier)
                ->andWhere('p.localisation = :loc')
                ->setParameter('loc', $idloc)
                ->andwhere('p.lng = :locale')
                ->setParameter('locale', $locale)
                ->orderBy('p.id', 'DESC');
            $profils = $qb->getQuery()->getResult();
        }
        elseif (!empty($idloc) || is_numeric($idmetier))
        {
            if (is_numeric($idmetier))
            {
                $qb = $this->createQueryBuilder('p');
                $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
                    ->join('p.metier', 'm')
                    ->addSelect('m.metier' . $locale . ' as metier')
                    ->where('m.id = :met')
                    ->setParameter('met', $idmetier)
                    ->andWhere('p.lng = :locale')
                    ->setParameter('locale', $locale)
                    ->orderBy('p.id', 'DESC');
                $profils = $qb->getQuery()->getResult();
            }
            else
            {
                $qb = $this->createQueryBuilder('p');
                $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
                    ->join('p.metier', 'm')
                    ->addSelect('m.metier' . $locale . ' as metier')
                    ->where('p.localisation = :loc')
                    ->setParameter('loc', $idloc)
                    ->andwhere('p.lng = :locale')
                    ->setParameter('locale', $locale)
                    ->orderBy('p.id', 'DESC');
                $profils = $qb->getQuery()->getResult();
            }
        }
        else
        {
            $qb = $this->createQueryBuilder('p');
            $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
                ->where('p.lng = :locale')
                ->setParameter('locale', $locale)
                ->orderBy('p.id', 'DESC');

            $profils = $qb->getQuery()->getResult();
        }
        foreach ($profils as $key => $profil) {

            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.metier', 'm')
                ->select('m.metier' . $locale . ' as metier')
                ->setParameter('id', $profil['id']);
            $profils[$key]['metier'] = $qb->getQuery()->getOneOrNullResult();

//            Get fichier si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.fichier', 'f')
                ->select('f.photo')
                ->setParameter('id', $profil['id']);
            $profils[$key]['fichier'] = $qb->getQuery()->getOneOrNullResult();

//            Get compétences si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'c')
                ->select('c.competences' . $locale . ' as competence')
                ->setParameter('id', $profil['id']);
            $profils[$key]['competences'] = $qb->getQuery()->getResult();

        }

        return $profils;
    }

    public function myfindProfilById($idPro, $locale)
    {

        $qb = $this->createQueryBuilder('p');
        $qb->select('p.id as id', 'p.prenom as prenom',
            'p.description as description', 'p.localisation as localisation',
            'p.nom as nom', 'p.ville as ville', 'p.linkedIn as linkedIn')
            ->where('p.lng = :locale')
            ->setParameter('locale', $locale)
            ->andWhere('p.id = :loca')
            ->setParameter('loca', $idPro)


        ;

        $profils = $qb->getQuery()->getResult();

        foreach ($profils as $key => $profil)
        {
//            Get metier et création d'un sous tableau'
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.metier', 'm')
                ->select('m.metier' . $locale . ' as metier')
                ->setParameter('id', $profil['id']);
            $profils[$key]['metier'] = $qb->getQuery()->getOneOrNullResult();

            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.invest', 'm')
                ->select('m.invest' . $locale . ' as invest')
                ->setParameter('id', $profil['id']);
            $profils[$key]['invest'] = $qb->getQuery()->getOneOrNullResult();

            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.etq', 'm')
                ->select('m.etq' . $locale . ' as etq')
                ->setParameter('id', $profil['id']);
            $profils[$key]['etq'] = $qb->getQuery()->getOneOrNullResult();

            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.dispo', 'm')
                ->select('m.dispo' . $locale . ' as dispo')
                ->setParameter('id', $profil['id']);
            $profils[$key]['dispo'] = $qb->getQuery()->getOneOrNullResult();

            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.ou', 'm')
                ->select('m.ou' . $locale . ' as ou')
                ->setParameter('id', $profil['id']);
            $profils[$key]['ou'] = $qb->getQuery()->getOneOrNullResult();

//            Get fichier si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.fichier', 'f')
                ->select('f.photo')
                ->setParameter('id', $profil['id']);
            $profils[$key]['fichier'] = $qb->getQuery()->getOneOrNullResult();

//            Get compétences si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'c')
                ->select('c.competences' . $locale . ' as competence')
                ->setParameter('id', $profil['id']);
            $profils[$key]['competences'] = $qb->getQuery()->getResult();

        }

        /*dump($projets); die();*/

        return $profils;
    }

    public function findLastProfils4($locale)
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
            ->where('p.lng = :locale')
            ->setParameter('locale', $locale)
//            ->join('p.metier', 'm')
//            ->addSelect('m.metier' . $locale . ' as metier')
            ->setMaxResults(4)
            ->orderBy('p.id', 'DESC')
        ;

        $profils = $qb->getQuery()->getResult();
        foreach ($profils as $key => $profil)
        {
//            Get metier et création d'un sous tableau'
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.metier', 'm')
                ->select('m.metier' . $locale . ' as metier')
                ->setParameter('id', $profil['id']);
            $profils[$key]['metier'] = $qb->getQuery()->getOneOrNullResult();

//            Get fichier si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.fichier', 'f')
                ->select('f.photo')
                ->setParameter('id', $profil['id']);
            $profils[$key]['fichier'] = $qb->getQuery()->getOneOrNullResult();

//            Get compétences si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'c')
                ->select('c.competences' . $locale . ' as competence')
                ->setParameter('id', $profil['id']);
            $profils[$key]['competences'] = $qb->getQuery()->getResult();

        }

        /*dump($projets); die();*/

        return $profils;
    }



    public function myfindByLocale($locale)
    {

        $qb = $this->createQueryBuilder('p');
        $qb->select('p.id as id', 'p.prenom as prenom', 'p.description as description', 'p.localisation as localisation', 'p.nom as nom', 'p.ville as ville')
            ->where('p.lng = :locale')
            ->setParameter('locale', $locale)
//            ->join('p.metier', 'm')
//            ->addSelect('m.metier' . $locale . ' as metier')
            ->orderBy('p.id', 'DESC')


        ;

        $profils = $qb->getQuery()->getResult();

        foreach ($profils as $key => $profil)
        {
//            Get metier et création d'un sous tableau'
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.metier', 'm')
                ->select('m.metier' . $locale . ' as metier')
                ->setParameter('id', $profil['id']);
            $profils[$key]['metier'] = $qb->getQuery()->getOneOrNullResult();

//            Get fichier si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.fichier', 'f')
                ->select('f.photo')
                ->setParameter('id', $profil['id']);;
            $profils[$key]['fichier'] = $qb->getQuery()->getOneOrNullResult();

//            Get compétences si défini et si null
            $qb = $this->createQueryBuilder('p');
            $qb->where('p.id = :id')
                ->join('p.competences', 'c')
                ->select('c.competences' . $locale . ' as competence')
                ->setParameter('id', $profil['id']);;
            $profils[$key]['competences'] = $qb->getQuery()->getResult();

        }

        /*dump($projets); die();*/

        return $profils;
    }

}
