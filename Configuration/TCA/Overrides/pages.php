<?php
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('sz_pagesettings') . 'Resources/Private/PHP/NewPagesColumns.php');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPagesColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--div--;SZ Pagesettings, tx_szpagesettings_hideFooterDesc, tx_szpagesettings_footerDesc;;;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_productImgFal, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision,--div--;SZ Teaser;,tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt;;;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_teaserImgFal, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon');

// Append subnav_title to title-palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
	'pages',
	'title',
	'--linebreak--, subnav_title', 'after'
);