<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_footer
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';
// Get default menu - JMenu object, look at JMenu api docs
$list = ModCPDFooterHelper::getList($params);
$footerTitle = $params->get('footerTitle');

require JModuleHelper::getLayoutPath('mod_cpd_footer');