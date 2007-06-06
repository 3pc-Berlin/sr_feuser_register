<?php

########################################################################
# Extension Manager/Repository config file for ext: "sr_feuser_register"
#
# Auto generated 04-06-2007 09:14
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Frontend User Registration',
	'description' => 'A front end user self-registration variant of Kasper Skårhøj\'s Front End User Admin extension.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,fh_library,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_srfeuserregister',
	'modify_tables' => 'fe_users',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Stanislas Rolland / Franz Holzinger',
	'author_email' => 'kontakt@fholzinger.com',
	'author_company' => 'Freelancer',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '2.5.7',
	'_md5_values_when_last_written' => 'a:40:{s:9:"ChangeLog";s:4:"eb94";s:16:"contributors.txt";s:4:"0f45";s:21:"ext_conf_template.txt";s:4:"3a54";s:12:"ext_icon.gif";s:4:"ad8f";s:17:"ext_localconf.php";s:4:"b7f0";s:14:"ext_tables.php";s:4:"a0c0";s:14:"ext_tables.sql";s:4:"bfa9";s:13:"locallang.xml";s:4:"f26f";s:16:"locallang_db.xml";s:4:"3905";s:7:"tca.php";s:4:"aad1";s:14:"doc/manual.sxw";s:4:"6658";s:38:"lib/class.tx_srfeuserregister_auth.php";s:4:"af67";s:39:"lib/class.tx_srfeuserregister_email.php";s:4:"f0b4";s:38:"lib/class.tx_srfeuserregister_lang.php";s:4:"8b5a";s:37:"lib/class.tx_srfeuserregister_tca.php";s:4:"609c";s:25:"pi1/address_css_tmpl.html";s:4:"7b75";s:37:"pi1/class.tx_srfeuserregister_pi1.php";s:4:"772b";s:48:"pi1/class.tx_srfeuserregister_pi1_adodb_time.php";s:4:"0e9f";s:50:"pi1/class.tx_srfeuserregister_pi1_urlvalidator.php";s:4:"eca0";s:23:"pi1/flexform_ds_pi1.xml";s:4:"abb2";s:19:"pi1/icon_delete.gif";s:4:"f914";s:21:"pi1/internal_link.gif";s:4:"12b9";s:32:"pi1/internal_link_new_window.gif";s:4:"402a";s:17:"pi1/locallang.xml";s:4:"2a3c";s:36:"pi1/tx_srfeuserregister_htmlmail.css";s:4:"0570";s:42:"pi1/tx_srfeuserregister_htmlmail_xhtml.css";s:4:"f65b";s:41:"pi1/tx_srfeuserregister_pi1_css_tmpl.html";s:4:"0d98";s:38:"pi1/tx_srfeuserregister_pi1_sample.txt";s:4:"297e";s:37:"pi1/tx_srfeuserregister_pi1_tmpl.tmpl";s:4:"95d3";s:42:"view/class.tx_srfeuserregister_display.php";s:4:"b955";s:45:"control/class.tx_srfeuserregister_control.php";s:4:"6800";s:48:"hooks/class.tx_srfeuserregister_hooksHandler.php";s:4:"c5a5";s:40:"model/class.tx_srfeuserregister_data.php";s:4:"9066";s:28:"scripts/jsfunc.updateform.js";s:4:"a9aa";s:43:"marker/class.tx_srfeuserregister_marker.php";s:4:"c2a1";s:31:"static/css_styled/constants.txt";s:4:"6986";s:27:"static/css_styled/setup.txt";s:4:"01bf";s:30:"static/old_style/constants.txt";s:4:"b00f";s:30:"static/old_style/editorcfg.txt";s:4:"cfad";s:26:"static/old_style/setup.txt";s:4:"522a";}',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'fh_library' => '0.0.4-',
			'static_info_tables' => '2.0.0-',
			'php' => '4.1.0-0.0.0',
			'typo3' => '4.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'newloginbox' => '',
			'kb_md5fepw' => '',
			'sr_email_subscribe' => '1.2.0-',
		),
	),
	'suggests' => array(
	),
);

?>