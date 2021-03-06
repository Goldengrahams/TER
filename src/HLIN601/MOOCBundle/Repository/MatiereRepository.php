<?php

namespace HLIN601\MOOCBundle\Repository;

/**
 * MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatiereRepository extends \Doctrine\ORM\EntityRepository
{
	public function findMatieresByUserAndClasse($matieres,$classe){
		$qb = $this->createQueryBuilder('m');

		$qb
			->where('m.classe = :classe')
				->setParameter('classe', $classe)
			->andWhere('m IN(:matieres)')
				->setParameter('matieres',$matieres);

		return $qb->getQuery()->getResult();
	}
}
