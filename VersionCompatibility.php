<?php

/**
 * Version Compatiblity (for iSC Inc. wikis)
 * 
 * @author Suriyaa Kudo <SuriyaaKudoIsc@users.noreply.github.com> (http://bit.ly/Suriyaa)
 * @author MediaWiki contributors (https://www.mediawiki.org/wiki/Thread:Project:Support_desk/Set_version_compatibility_for_extension)
 * 
**/
 
// Compare MediaWiki Version
if ( version_compare( $GLOBALS['wgVersion'], '1.19', '<' ) ) {
    echo 'myExt requires at least MediaWiki 1.19, you have ' . $GLOBALS['wgVersion'];
    exit();
}

?>
