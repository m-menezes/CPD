<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_links
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list = ModCPDLinkHelper::getList($params);
$newLink1 	= $list->get('newLink1');
$background_link 	= $list->get('background_link');




require JModuleHelper::getLayoutPath('mod_cpd_links');