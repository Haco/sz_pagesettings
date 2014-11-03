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
	use TYPO3\CMS\Core\Utility\GeneralUtility;

	/**
 * This view helper handles parameter strings using typolink function of TYPO3.
 * It returns just the URL.
 *
 * @copyright  2012-2013 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class LanguageViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * Create a typolink with the given language.
	 *
	 * @param integer $languageId ID of the given language
	 * @return string url
	 */
	public function render($languageId) {

		$parameter = $GLOBALS['TSFE']->id;
		$urlParameters = array(
			'L' => $languageId
		);

		/** @var $cObj tslib_cObj */
		$cObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('tslib_cObj');
		$typoLink = $cObj->getTypoLink_URL($parameter, $urlParameters, '_self');

		$text = \TYPO3\CMS\Extbase\Utility\LocalizationUtility::translate('lang.lang-' . $languageId, 'SzPagesettings');

		if ($GLOBALS['TSFE']->sys_language_uid == $languageId) {
			$content = '<a class="greyscale active lang-' . $languageId . '" href="' . $typoLink . '">' . $text . '</a>';
		} else {
			$content = '<a class="lang-' . $languageId . '" href="' . $typoLink . '">' . $text . '</a>';
		}

		return $content;
	}
}
?>