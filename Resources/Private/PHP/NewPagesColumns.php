<?php
$newPagesColumns = array (
	'tx_szpagesettings_teaserTxt' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_teaserTxt',
		'config' => array (
			'type' => 'text',
			'cols' => '48',
			'rows' => '5',
			'softref' => 'typolink_tag,images,email[subst],url',
			'wizards' => Array(
				'_PADDING' => 4,
				'RTE' => Array(
					'notNewRecords' => 1,
					'RTEonly' => 1,
					'type' => 'script',
					'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
					'icon' => 'wizard_rte2.gif',
					'script' => 'wizard_rte.php',
				),
			)
		),
	),
	'tx_szpagesettings_footerDesc' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_footerDesc',
		'config' => array (
			'type' => 'text',
			'cols' => '48',
			'rows' => '5',
			'softref' => 'typolink_tag,images,email[subst],url',
			'wizards' => Array(
				'_PADDING' => 4,
				'RTE' => Array(
					'notNewRecords' => 1,
					'RTEonly' => 1,
					'type' => 'script',
					'title' => 'LLL:EXT:cms/locallang_ttc.php:bodytext.W.RTE',
					'icon' => 'wizard_rte2.gif',
					'script' => 'wizard_rte.php',
				),
			)
		),
	),
	"tx_szpagesettings_hideFooterDesc" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_hideFooterDesc",
		"config" => Array (
			"type" => "check",
		),
	),
	'tx_szpagesettings_teaserHeadline' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_teaserHeadline',
		'config' => array (
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim',
		),
	),
	'tx_szpagesettings_pageIcon' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_pageIcon',
		'config' => array (
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim',
		),
	),
	'tx_szpagesettings_teaserImgFal' => array(
		'exclude' => 1,
		'l10n_mode' => 'mergeIfNotBlank',
		'label' => 'Teaser Image (FAL)',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('tx_szpagesettings_teaserImgFal', array(
			'appearance' => array(
				'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
			),
			'minitems' => 0,
			'maxitems' => 1,
		), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']),
	),
	'tx_szpagesettings_productImgFal' => array(
		'exclude' => 1,
		'l10n_mode' => 'mergeIfNotBlank',
		'label' => 'Product Image (FAL)',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('tx_szpagesettings_productImgFal', array(
			'appearance' => array(
				'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
			),
			'minitems' => 0,
			'maxitems' => 1,
		), $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']),
	),
	"tx_szpagesettings_productCancelled" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_productCancelled",
		"config" => Array (
			"type" => "check",
		),
	),
	"tx_szpagesettings_productZone" => Array (
		"exclude" => 1,
		"label" => "Zone",
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('-', 'none'),
				array('0', 0),
				array('1', 1),
				array('2', 2),
				array('0/20', 3),
				array('1/21', 4),
				array('2/22', 5),
			),
			'size' => 1,
			'maxitems' => 1,
		),
	),
	"tx_szpagesettings_productDivision" => Array (
		"exclude" => 1,
		"label" => "Division",
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('-', 'none'),
				array('1', 1),
				array('2', 2),
			),
			'size' => 1,
			'maxitems' => 1,
		),
	),
	"subnav_title" => Array (
		'exclude' => 1,
		'label' => 'Sub Navigation Title',
		'config' => array (
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim',
		),
	),
	'tx_szpagesettings_teaserLink' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_teaserLink',
		'config' => array (
			'type' => 'input',
			'size' => '30',
			'max' => '256',
			'eval' => 'trim',
			'wizards' => array(
				'_PADDING' => 2,
				'link' => array(
					'type' => 'popup',
					'title' => 'LLL:EXT:cms/locallang_ttc.xml:header_link_formlabel',
					'icon' => 'link_popup.gif',
					'script' => 'browse_links.php?mode=wizard',
					'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
				),
			),
			'softref' => 'typolink',
		),
	),
	'tx_szpagesettings_teaserLinktxt' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_teaserLinktxt',
		'config' => array (
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim',
		),
	),
);