<?php
if (!defined('MEDIAWIKI')) die(0);

$wgExtensionCredits['other'][] = array(
    'path' => __FILE__,
    'name' => 'WeRelateSync',
    'author' => "Sam Wilson <[mailto:sam@samwilson.id.au sam@samwilson.id.au]>",
    'url' => "http://mediawiki.org/wiki/Extension:WeRelate",
    'descriptionmsg' => 'werelatesync-desc',
    'version' => 2.0,
);
$wgExtensionMessagesFiles['WeRelateSync'] = __DIR__ . '/WeRelateSync.i18n.php';

$wgAutoloadClasses['WeRelateCore_treebranch'] = __DIR__.'/model/treebranch.php';
