<?php

// Documentation for Wikibase: https://www.mediawiki.org/wiki/Wikibase/Installation/Advanced_configuration#Configuration

// You should only need to set $wgWBClientSettings['repoUrl'], $wgWBClientSettings['repoDatabase'] and $wgWBClientSettings['changesDatabase']
// on the wiki.

$wgWBRepoSettings['entityNamespaces']['item'] = 860;
$wgWBRepoSettings['entityNamespaces']['property'] = 862;
$wgWBRepoSettings['sharedCacheKeyPrefix'] = $wi->dbname . ':WBL/' . rawurlencode( WBL_VERSION );
$wgWBRepoSettings['allowEntityImport'] = false;
$wgWBRepoSettings['enableEntitySearchUI'] = $wmgEnableEntitySearchUI;
$wgWBRepoSettings['siteLinkGroups'] = [
	'miraheze'
];
$wgWBRepoSettings['specialSiteLinkGroups'] = [];

$wgWBClientSettings['repoUrl'] = 'https://' . $wi->hostname;
$wgWBClientSettings['repoDatabase'] = $wi->dbname;
$wgWBClientSettings['changesDatabase'] = $wi->dbname;
$wgWBClientSettings['siteGlobalID'] = $wi->dbname;
$wgWBClientSettings['repoScriptPath'] = '/w';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['siteGroup'] = 'miraheze';
$wgWBClientSettings['repoNamespaces'] = [
	'wikibase-item' => 'Item',
	'wikibase-property' => 'Property'
];
$wgWBClientSettings['siteLinksGroups'] = [
	'miraheze'
];
$wgWBClientSettings['purgeCacheBatchSize'] = 100;
$wgWBClientSettings['recentChangesBatchSize'] = 100;

if ( in_array( $wi->dbname, [ 'hispanowiki', 'privadowiki', 'hispano76wiki', 'ucroniaswiki' ] ) ) {
	$wgWBClientSettings['repoUrl'] = 'https://hispano.miraheze.org';
	$wgWBClientSettings['repoDatabase'] = 'hispanowiki';
	$wgWBClientSettings['changesDatabase'] = 'hispanowiki';
}
