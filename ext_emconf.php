<?php

########################################################################
# Extension Manager/Repository config file for ext "sz_pagesettings".
#
# Auto generated 17-02-2011 02:18
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Pagesettings',
	'description' => 'Extends the page and content properties with new fields.',
	'category' => 'plugin',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'armin.vieweg@sunzinet.com',
	'author_company' => 'sunzinet AG',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'excludeFromUpdates',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages,tt_content',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:11:{s:9:"ChangeLog";s:4:"7f0a";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"b292";s:14:"ext_tables.php";s:4:"78b2";s:14:"ext_tables.sql";s:4:"92ce";s:16:"locallang_db.xml";s:4:"55a8";s:29:"Classes/Domain/Model/Page.php";s:4:"5929";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"da3b";s:34:"Configuration/TypoScript/setup.txt";s:4:"525b";s:31:"Tests/Domain/Model/PageTest.php";s:4:"563d";s:46:"Tests/Domain/Repository/PageRepositoryTest.php";s:4:"db53";}',
	'suggests' => array(
	),
);

?>