<?php
$newNewsColumns = array(
	"news_comments" => Array (
		"exclude" => 1,
		"label" => "LLL:EXT:sz_pagesettings/Resources/Private/Language/locallang_db.xml:news_comments",
		"config" => Array (
			"type" => "check",
		),
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $newNewsColumns, 1);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news','news_comments');