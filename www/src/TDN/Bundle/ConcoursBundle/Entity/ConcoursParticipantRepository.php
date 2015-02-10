<?php

namespace TDN\Bundle\ConcoursBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ConcoursParticipantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConcoursParticipantRepository extends EntityRepository
{

	public function findHistoriqueGagnants () {

		$qb = $this->createQueryBuilder('cp');
		$qexpr = $qb->expr();
		$query = $qb->select('cp.mailParticipant', 'p.idNana')
					->leftJoin('cp.lnParticipant', 'p')
					->where($qexpr->eq('cp.gagnant', ':tire'))
					->setParameter('tire', true)
					->getQuery();

		$listeGagnants = $query->getResult();
		$resultante = array();
		foreach ($listeGagnants as $g) {
			$resultante[] = (empty($g['idNana'])) ? $g['mailParticipant'] : $g['idNana'];
		}

		return $resultante ;
	}

	public function findGagnants ($id) {

		$qb = $this->createQueryBuilder('cp');
		$qexpr = $qb->expr();
		$query = $qb->select('cp.idParticipation', 'p.username', 'p.idNana', 'p.nom', 'p.prenom')
					->innerJoin('cp.lnParticipant', 'p')
					->innerJoin('cp.lnConcours', 'c')
					->where($qexpr->andX(
						$qexpr->eq('cp.gagnant', ':tire'),
						$qexpr->eq('c.idDocument', ':idConcours')
						))
					->setParameter('tire', true)
					->setParameter('idConcours', $id)
					->getQuery()
					->useResultCache(true, 360000);

		$listeGagnants = $query->getResult();

		return $listeGagnants;
	}
}
