<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_visual
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list = ModCPDVisualHelper::getList($params);
$logoURL = $params->get('logo');
$background_link = $params->get('background_link');
$margin_top = $params->get('margin_top');
$altImg = $params->get('altImg');

require JModuleHelper::getLayoutPath('mod_cpd_visual');