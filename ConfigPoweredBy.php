<?php

/**
 * ConfigPoweredBy
 *
 * @package MediaWiki
 * @subpackage Extensions
 * @author Suriyaa Sundararuban
 * @author Jack D. Pond
 * @copyright © 2016-present iSC Inc.
 * @license GNU General Public Licence 2.0 or later
 */

 
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an iSC Inc. extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'ConfigPoweredBy', 
	'author' => array( 'Suriyaa Sundararuban', 'Jack D. Pond'), 
	'description' => 'Add Powered By Tags',
	'descriptionmsg' => 'ConfigPoweredBy',
);

$wgHooks['SkinGetPoweredBy'][] = 'ConfigPoweredBy';

function ConfigPoweredBy( &$text, $skin ) {
#	$url = htmlspecialchars( "$smwgScriptPath/resources/assets/poweredby_mediawiki_88x31.png" );
	$url = htmlspecialchars( dirname(__FILE__)."/poweredby_mediawiki_88x31.png" );
	$text .= '<a href="//www.mediawiki.org/"><img src="' . $url . '" height="31" width="88" alt="Powered by MediaWiki" /></a>';
	return true;
}
