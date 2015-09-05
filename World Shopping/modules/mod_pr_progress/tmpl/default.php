<?php 
/*
 * @package Joomla 2.5
 * @copyright Copyright (C) 2012 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR PriceTable
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();


?> 


<a href="#" title="top of page"><div class="topofpage"></div></a>

<?
$document->addScript(JURI::root(true).'/modules/mod_pr_progress/js/jquery.noConflict.js'); 
$document->addScript(JURI::root(true).'/modules/mod_pr_progress/js/jquery.min.js'); 
$document->addScript(JURI::root(true).'/modules/mod_pr_progress/js/script.js'); 
?>
		                <h3 class="title-2">Our Skills</h3>

		                <div id="skill-bars">
		                    <div class="skill-bar">
		                        <div class="skill-bar-content" data-value="<?php echo $params->get('progress1_valu');?>"></div>
		                        <div class="skill-bar-title"><? $p1=$params->get('progress1'); if($p1 == null) {?> SEO - 90% <?} else echo $p1; ?></div>
		                    </div>
		                    <div class="skill-bar">
		                        <div class="skill-bar-content"  data-value="<?php echo $params->get('progress2_valu');?>"></div>
		                        <div class="skill-bar-title"><? $p2=$params->get('progress2'); if($p2 == null) {?> Marketing - 60% <?} else echo $p2; ?></div>
		                    </div>
		                    <div class="skill-bar">
		                        <div class="skill-bar-content" data-value="<?php echo $params->get('progress3_valu');?>"></div>
		                        <div class="skill-bar-title"><? $p3=$params->get('progress3'); if($p3 == null) {?> HTML5 / CSS3 - 50% <?} else echo $p3; ?></div>
		                    </div>
		                    <div class="skill-bar">
		                        <div class="skill-bar-content" data-value="<?php echo $params->get('progress4_valu');?>"></div>
		                        <div class="skill-bar-title"><? $p4=$params->get('progress4'); if($p4 == null) {?> Wordpress - 80% <?} else echo $p4; ?></div>
		                    </div>
		                    <div class="skill-bar">
		                        <div class="skill-bar-content"  data-value="<?php echo $params->get('progress5_valu');?>"></div>
		                        <div class="skill-bar-title"><? $p5=$params->get('progress5'); if($p5 == null) {?> MySQL - 70% <?} else echo $p5; ?></div>
		                    </div>
		                </div>