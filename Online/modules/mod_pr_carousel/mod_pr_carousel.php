<?php 
/*
 * @package Joomla 2.5 & 3.0
 * @copyright Copyright (C) 2012 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @module 3jon - 3jon joomla carousel module
 * @copyright Copyright (C) 3jon www.3jon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helper.php';

$link	= $params->get('link');

$folder	= mod_pr_carouselHelper::getFolder($params);
$images	= mod_pr_carouselHelper::getImages($params, $folder);

if (!count($images)) {
	echo JText::_('MOD_RANDOM_IMAGE_NO_IMAGES');
	return;
}

$image = mod_pr_carouselHelper::getRandomImage($params, $images);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_pr_carousel', $params->get('layout', 'default'));
