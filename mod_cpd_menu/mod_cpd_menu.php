<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_menu
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list       = ModMenuHelper::getList($params);
$base       = ModMenuHelper::getBase($params);
$active     = ModMenuHelper::getActive($params);
$default    = ModMenuHelper::getDefault();
$active_id  = $active->id;
$default_id = $default->id;
$path       = $base->tree;
$showAll    = $params->get('showAllChildren');
$class_sfx  = htmlspecialchars($params->get('class_sfx'), ENT_COMPAT, 'UTF-8');
$coluna_submenu1 	= $params->get('colunas_submenu1');	
$coluna_submenu2 	= $params->get('colunas_submenu2');	
/* CSS MENU */
$fonte_size = $params->get('fonte_size');	
$back_barra_menu 	= $params->get('back_barra_menu');	
$back_color_menu = $params->get('back_color_menu');	
$fonte_color_menu = $params->get('fonte_color_menu');	
$hover_color_menu = $params->get('hover_color_menu');	
$fonte_hover_menu = $params->get('fonte_hover_menu');	
$back_sub_menu 		= $params->get('back_sub_menu');	
$back_color_submenu = $params->get('back_color_submenu');	
$fonte_color_submenu = $params->get('fonte_color_submenu');	
$fonte_hover_submenu = $params->get('fonte_hover_submenu');	

if (count($list)){
	require JModuleHelper::getLayoutPath('mod_cpd_menu', $params->get('layout', 'default'));
}
