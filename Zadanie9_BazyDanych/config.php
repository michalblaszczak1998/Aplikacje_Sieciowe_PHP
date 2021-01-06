<?php
$conf->server_name = 'localhost';
$conf->server_url = 'http://' . $conf->server_name;
$conf->app_root = '/php_07_routing';
$conf->action_root = $conf->app_root . '/ctrl.php?action=';

$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'simpledb';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';

$conf->action_url = $conf->server_url . $conf->action_root;
$conf->app_url = $conf->server_url . $conf->app_root;
$conf->root_path = dirname(__FILE__);