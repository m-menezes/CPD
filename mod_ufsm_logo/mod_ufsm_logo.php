<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_ufsm_logo
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list = ModUFSMLogoHelper::getList($params);
$color_text 	= $list->get('color_text');
$nomePrincipal 	= $list->get('nomePrincipal');
$nomeSecundario 	= $list->get('nomeSecundario');

require JModuleHelper::getLayoutPath('mod_ufsm_logo');