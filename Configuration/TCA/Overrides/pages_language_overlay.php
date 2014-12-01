<?php

require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('sz_pagesettings') . 'Resources/Private/PHP/NewPagesColumns.php');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $newPagesColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', '--div--;SZ Pagesettings, tx_szpagesettings_hideFooterDesc, tx_szpagesettings_footerDesc;;;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_productImg, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision,--div--;SZ Teaser;,tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt;;;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_teaserImg, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
	'pages_language_overlay',
	'title',
	'--linebreak--, subnav_title', 'after'
);