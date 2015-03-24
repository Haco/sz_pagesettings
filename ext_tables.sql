#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_szpagesettings_teaserTxt text,
	tx_szpagesettings_teaserHeadline varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserImg varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserImgFal varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserLink varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserLinktxt varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_pageIcon varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_footerDesc text,
	tx_szpagesettings_hideFooterDesc tinyint(1) DEFAULT '0' NOT NULL,
	tx_szpagesettings_productImg varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productImgFal varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productCancelled int(1) DEFAULT '0' NOT NULL,
	tx_szpagesettings_productZone varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productDivision varchar(255) DEFAULT '' NOT NULL,
	subnav_title varchar(255) DEFAULT '' NOT NULL,
);
#
# Table structure for table 'pages_language_overlay'
#
CREATE TABLE pages_language_overlay (
	tx_szpagesettings_teaserTxt text,
	tx_szpagesettings_teaserHeadline varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserImg varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserImgFal varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserLink varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_teaserLinktxt varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_pageIcon varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_footerDesc text,
	tx_szpagesettings_hideFooterDesc tinyint(1) DEFAULT '0' NOT NULL,
	tx_szpagesettings_productImg varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productImgFal varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productCancelled int(1) DEFAULT '0' NOT NULL,
	tx_szpagesettings_productZone varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_productDivision varchar(255) DEFAULT '' NOT NULL,
	subnav_title varchar(255) DEFAULT '' NOT NULL,
);


CREATE TABLE tt_content (
	tx_szpagesettings_moreLink varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_moreText varchar(255) DEFAULT '' NOT NULL,
	tx_szpagesettings_forceDownload int(1) DEFAULT '0' NOT NULL,
);

CREATE TABLE tt_address (
	agb int(11) DEFAULT '0' NOT NULL
);

#
# Table structure for table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	news_comments int(11) DEFAULT '0' NOT NULL
);