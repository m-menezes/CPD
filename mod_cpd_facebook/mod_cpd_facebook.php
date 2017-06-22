<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_facebook
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';
// Get default menu - JMenu object, look at JMenu api docs
$menu = JFactory::getApplication()->getMenu();
$list = ModFacebookHelper::getList($params);

$facebookURL 	= $list->get('facebookURL');
$dataWidth 	= $list->get('dataWidth');
$dataHeight 	= $list->get('dataHeight');
$publicacoes 	= $list->get('publicacoes');


require JModuleHelper::getLayoutPath('mod_cpd_facebook');