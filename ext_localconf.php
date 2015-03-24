<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] .= ',tx_szpagesettings_teaserTxt,tx_szpagesettings_teaserHeadline,tx_szpagesettings_teaserImg,tx_szpagesettings_teaserImgFal,tx_szpagesettings_productImgFal,tx_szpagesettings_teaserLink,subnav_title,tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon,tx_szpagesettings_footerDesc';
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_szpagesettings_teaserTxt,tx_szpagesettings_teaserHeadline,tx_szpagesettings_teaserImg,tx_szpagesettings_teaserImgFal,tx_szpagesettings_productImgFal,tx_szpagesettings_teaserLink,subnav_title,tx_szpagesettings_teaserLinktxt,tx_szpagesettings_pageIcon,tx_szpagesettings_footerDesc';