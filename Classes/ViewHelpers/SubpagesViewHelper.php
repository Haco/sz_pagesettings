<?php
	namespace Ecom\SzPagesettings\ViewHelpers;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2013 Björn Christopher Bresser <bjoern.bresser@bjobre.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This view helper handles parameter strings using typolink function of TYPO3.
 * It returns just the URL.
 *
 * @copyright  2012-2013 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class SubpagesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * languageRepository
	 *
	 * @var \Ecom\SzPagesettings\Domain\Repository\PageRepository
	 * @inject
	 */
	protected $pageRepository;

	/**
	 * t3lib_queryGenerator is needed to recursively fetch a page tree
	 *
	 * @var \TYPO3\CMS\Core\Database\QueryGenerator
	 * @inject
	 */
	protected $queryGenerator;


	/**
	 * Create a typolink with the given language.
	 *
	 * @param integer $pageId ID of the page
	 * @param integer $level
	 * @return array pages
	 */
	public function render($pageId, $level = 2) {
		$pageTree = $this->getPageTree($pageId);

		return $pageTree;
	}

	/**
	 * @param int $pageUid Ausgangspunkt / Root page
	 * @param array $pageTree
	 * @return array
	 *
	protected function getPageTree($pageUid = 1, $pageTree = array()) {

		$this->pageSelect = new t3lib_pageSelect();
		$this->pageSelect->init(TRUE);

		$pageTree = $this->pageSelect->getMenu($pageUid);
		foreach($pageTree as &$page) {
			$page['subPages'] = $this->getPageTree($page['uid'], $pageTree);
		}

		return $pageTree;
	}
*/

	/**
	 * @param int $pageUid Ausgangspunkt / Root page
	 * @param array $pageTree
	 * @return array
	 */
	protected function getPageTree($pageUid = 1, $pageTree = array()) {
		/** @var \TYPO3\CMS\Frontend\Page\PageRepository pageSelect */
		$this->pageSelect = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Frontend\\Page\\PageRepository');
		$this->pageSelect->init(TRUE);

		$pageTree = $this->pageSelect->getMenu($pageUid);
		foreach($pageTree as &$page) {
			$page['subPages'] = $this->getPageTree($page['uid'], $pageTree);
		}

		return $pageTree;
	}

}
?>