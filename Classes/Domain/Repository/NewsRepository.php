<?php
	namespace Ecom\SzPagesettings\Domain\Repository;

class NewsRepository extends Tx_News_Domain_Repository_CategoryRepository {

	/**
	 * Find categories by a given pid
	 *
	 * @param array $idList list of id s
	 * @param array $ordering ordering
	 * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
	 */
	public function findByIdList(array $idList, array $ordering = array()) {
		echo "overriting!";
		$query = $this->createQuery();
		$query->getQuerySettings()->setRespectStoragePage(FALSE);

		if (count($ordering) > 0) {
			$query->setOrderings($ordering);
		}
//		$this->overlayTranslatedCategoryIds($idList);

		return $query->matching(
			$query->logicalAnd(
				$query->in('uid', $idList)
			))->execute();
	}

}

?>