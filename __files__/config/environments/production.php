<?php
//Set the domain that this app is running on.
Registry::set('pr-domain-uri', '');

//Set the session save handler here.
//Not implemented yet.
//Registry::set('pr-session-handler', 'database');

//Do you want to cache the template in this environment?
Registry::set('pr-cache-template', 'file');
//If you use 'file' as the cache mechanism then set up the config.
$CacheConfig = new stdClass;
$CacheConfig->path = 'tmp/cache';
$CacheConfig->ttl = 300;
Registry::set('pr-cache-config', $CacheConfig);
//Registry::set('pr-cache-template', 'memcached');
//If you use 'memcached'  as the cache mechanism then set up the config.
//$CacheConfig = new stdClass;
//$CacheConfig->servers = array(array('localhost', 11211));
//$CacheConfig->ttl = 300;
//Registry::set('pr-cache-config', $CacheConfig);