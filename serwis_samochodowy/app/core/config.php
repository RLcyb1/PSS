<?php

namespace core;

$conf = new \stdClass();

$conf->server_name = 'localhost';
$conf->server_url = 'http://localhost';
$conf->app_root = '/serwis_samochodowy/public';
$conf->action_root = $conf->app_root.'/?action=';
$conf->action_url = $conf->server_url.$conf->action_root;

// Ścieżka do katalogu głównego aplikacji na serwerze
$conf->root_path = dirname(__DIR__);
$conf->app_url = $conf->server_url . $conf->app_root;

?>