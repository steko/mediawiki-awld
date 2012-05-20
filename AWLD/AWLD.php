<?php

$wgExtensionCredits['other'][] = array(
'path' => __FILE__,
'name' => 'AWLD',
'author' => array( 'Stefano Costa' ),
'version' => '0.1',
'url' => 'https://www.mediawiki.org/wiki/Extension:AWLD',
'descriptionmsg' => "Loads AWLD.js, A javascript library for Ancient World Linked Data.",
);

$wgResourceModules['ext.AWLD'] = array(
        'scripts' => array('modules/awld-js/lib/requirejs/require.min.js', 'modules/awld-js/awld.js?autoinit'),
        'localBasePath' => dirname( __FILE__ ),
        'remoteExtPath' => 'AWLD',
);

$wgHooks['OutputPageBeforeHTML'][] = 'AWLDLoad';

function AWLDLoad( OutputPage $outputpage, /*string*/ $text ) {
    $outputpage->addModules( 'ext.AWLD' );
    return true;
}
