<?php
/**
 * @package     Marcelo Menezes S.
 * @subpackage  mod_cpd_social
 *
 * @copyright   Copyright (C) 2017. All rights reserved.
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list = ModSocialHelper::getList($params);
$color 	= $list->get('color');
$icon_px 	= $list->get('icon_px');
$facebook 	= $list->get('facebook');
$facebook_url 	= $list->get('facebook_url');
$twitter 	= $list->get('twitter');
$twitter_url 	= $list->get('twitter_url');
$gmail 	= $list->get('gmail');
$gmail_url 	= $list->get('gmail_url');
$instagram 	= $list->get('instagram');
$instagram_url 	= $list->get('instagram_url');
$googleplus 	= $list->get('googleplus');
$googleplus_url 	= $list->get('googleplus_url');
$linkedin 	= $list->get('linkedin');
$linkedin_url 	= $list->get('linkedin_url');
$youtube 	= $list->get('youtube');
$youtube_url 	= $list->get('youtube_url');




require JModuleHelper::getLayoutPath('mod_cpd_social');