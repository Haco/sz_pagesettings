<?php

$newContentColumns = array (
	'tx_szpagesettings_moreLink' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_moreLink',
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
	'tx_szpagesettings_moreText' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_moreText',
		'config' => array (
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim',
		),
	),
	"tx_szpagesettings_forceDownload" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_forceDownload",
		"config" => Array (
			"type" => "check",
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newContentColumns, 1);
//$TCA['tt_content']['palettes']['sz_pagesettings'] = array(
//'showitem' => 'tx_szpagesettings_moreLink,tx_szpagesettings_moreText,tx_szpagesettings_forceDownload',
//'canNotCollapse' => 1
//);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content','tx_szpagesettings_moreLink;;;;1-1-1,tx_szpagesettings_moreText', 'text,textpic', 'after:rte_enabled');