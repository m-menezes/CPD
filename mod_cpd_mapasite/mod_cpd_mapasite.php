<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_mapasite
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';
// Get default menu - JMenu object, look at JMenu api docs
$menu = JFactory::getApplication()->getMenu();

// Get menu items - array with menu items
$items = $menu->getMenu();

$list = ModSlideshowHelper::getList($params);

$diretorio 	= $list->get('diretorio');
//Linguagem Atual
$lang	= JFactory::getLanguage();

require JModuleHelper::getLayoutPath('mod_cpd_mapasite');