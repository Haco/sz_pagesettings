<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add new properties to pages
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
	'tx_szpagesettings_teaserImg' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_teaserImg',
		'config' => array (
			"type" => "group",
			"internal_type" => "file",
			"allowed" => "png,jpeg,jpg",
			"max_size" => 1000,
			"uploadfolder" => "uploads/navigationteaser",
			"show_thumbs" => 1,
			"size" => 1,
			"minitems" => 0,
			"maxitems" => 1,
		),
	),
	'tx_szpagesettings_productImg' => array (
		'exclude' => 1,
		'label' => 'LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:tx_szpagesettings_productImg',
		'config' => array (
			"type" => "group",
			"internal_type" => "file",
			"allowed" => "png,jpeg,jpg",
			"max_size" => 1000,
			"uploadfolder" => "uploads/pics",
			"show_thumbs" => 1,
			"size" => 1,
			"minitems" => 0,
			"maxitems" => 1,
		),
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

$newNewsColumns = array(
	"news_comments" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:news_comments",
		"config" => Array (
			"type" => "check",
		),
	),
);
// PAGES
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newPagesColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages_language_overlay', $newPagesColumns, 1);

// TCA Palettes
$TCA['pages']['palettes']['tx_szpagesettings'] = array(
	'showitem'			=> 'tx_szpagesettings_footerDesc, tx_szpagesettings_hideFooterDesc, tx_szpagesettings_productImg, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision, subnav_title, tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt, tx_szpagesettings_teaserImg, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon',
	'canNotCollapse'	=> 1
);
$TCA['pages_language_overlay']['palettes']['tx_szpagesettings'] = array(
	'showitem'			=> 'tx_szpagesettings_footerDesc, tx_szpagesettings_hideFooterDesc,  tx_szpagesettings_productImg, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision, subnav_title, tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt, tx_szpagesettings_teaserImg, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon',
	'canNotCollapse'	=> 1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', '--div--;SZ Pagesettings, tx_szpagesettings_hideFooterDesc, tx_szpagesettings_footerDesc;;4;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_productImg, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision,--div--;SZ Teaser;,tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt;;4;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_teaserImg, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages_language_overlay', '--div--;SZ Pagesettings, tx_szpagesettings_hideFooterDesc, tx_szpagesettings_footerDesc;;4;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_productImg, tx_szpagesettings_productCancelled, tx_szpagesettings_productZone, tx_szpagesettings_productDivision,--div--;SZ Teaser;,tx_szpagesettings_teaserHeadline, tx_szpagesettings_teaserTxt;;4;richtext:rte_transform[flag=rte_enabled|mode=ts], tx_szpagesettings_teaserImg, tx_szpagesettings_teaserLink, tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
	'pages',
	'title',
	'--linebreak--, subnav_title', 'after'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
	'pages_language_overlay',
	'title',
	'--linebreak--, subnav_title', 'after'
);


// TT_CONTENT
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $newContentColumns, 1);
$TCA['tt_content']['palettes']['sz_pagesettings'] = array(
	'showitem' => 'tx_szpagesettings_moreLink,tx_szpagesettings_moreText,tx_szpagesettings_forceDownload',
	'canNotCollapse' => 1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content','tx_szpagesettings_moreLink;;;;1-1-1,tx_szpagesettings_moreText', 'text,textpic', 'after:rte_enabled');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $newNewsColumns, 1);
$TCA['tt_content']['palettes']['sz_pagesettings'] = array(
	'showitem' => 'newscomments',
	'canNotCollapse' => 1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','news_comments');


?>