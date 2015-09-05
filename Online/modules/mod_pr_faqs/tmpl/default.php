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
					<div id="main" class="">
						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_1');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_1_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

                        <!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_2');?></a>
                        	<div class="toggle-content">
                        		<div class="row">
                        			<div class="twelve column">
	                        			<p><?php echo $params->get('faqs_2_ans');?></p>
	                        		</div>
                        		</div>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_3');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_3_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_4');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_4_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_5');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_5_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_6');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_6_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_7');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_7_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->

						<!-- One FAQ-->
                        <div class="toggle">
                        	<a href="#" class="toggle-title"><?php echo $params->get('faqs_8');?></a>
                        	<div class="toggle-content">
                        		<p><?php echo $params->get('faqs_8_ans');?></p>
                        	</div>
						</div>
                        <!-- End One FAQ -->
					</div>
			

<?
$document->addScript(JURI::root(true).'/modules/mod_pr_faqs/js/jquery.noConflict.js'); 
$document->addScript(JURI::root(true).'/modules/mod_pr_faqs/js/jquery.min.js'); 
$document->addScript(JURI::root(true).'/modules/mod_pr_faqs/js/script.js'); 
?>
