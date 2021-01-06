<?php

require_once dirname(__FILE__) . '/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    case 'calcCompute':
    default :
        include_once $conf->root_path . '/app/calc/CalcCtrl.class.php';
        $ctrl = new CalcCtrl ();
        $ctrl->process();
        break;
}