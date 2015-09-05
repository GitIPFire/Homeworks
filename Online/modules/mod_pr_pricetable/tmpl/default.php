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

				<div class="row11 pricing-table-container">
					<div class="three column">
						<ul class="pricing-table m0">
						  <li class="title"><?php echo $params->get('col_1_title');?></li>
						  <li class="price">$<?php echo $params->get('col_1_price');?></li>
						  <li class="description"><?php echo $params->get('col_1_description');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_1_bullet-item1');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_1_bullet-item2');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_1_bullet-item3');?></li>
						  <li class="cta-button"><a class="button color" href="<?php echo $params->get('col_1_button_link');?>"><?php echo $params->get('col_1_button_text');?></a></li>
						</ul>
					</div>

					<div class="three column">
						<ul class="pricing-table m0">
						  <li class="title"><?php echo $params->get('col_2_title');?></li>
						  <li class="price">$<?php echo $params->get('col_2_price');?></li>
						  <li class="description"><?php echo $params->get('col_2_description');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_2_bullet-item1');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_2_bullet-item2');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_2_bullet-item3');?></li>
						  <li class="cta-button"><a class="button color" href="<?php echo $params->get('col_2_button_link');?>"><?php echo $params->get('col_2_button_text');?></a></li>
						</ul>
					</div>

					<div class="three column">
						<ul class="pricing-table m0">
						  <li class="title"><?php echo $params->get('col_3_title');?></li>
						  <li class="price">$<?php echo $params->get('col_3_price');?></li>
						  <li class="description"><?php echo $params->get('col_3_description');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_3_bullet-item1');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_3_bullet-item2');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_3_bullet-item3');?></li>
						  <li class="cta-button"><a class="button color" href="<?php echo $params->get('col_3_button_link');?>"><?php echo $params->get('col_3_button_text');?></a></li>
						</ul>
					</div>

					<div class="three column">
						<ul class="pricing-table m0">
						  <li class="title"><?php echo $params->get('col_4_title');?></li>
						  <li class="price">$<?php echo $params->get('col_4_price');?></li>
						  <li class="description"><?php echo $params->get('col_4_description');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_4_bullet-item1');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_4_bullet-item2');?></li>
						  <li class="bullet-item"><?php echo $params->get('col_4_bullet-item3');?></li>
						  <li class="cta-button"><a class="button color" href="<?php echo $params->get('col_4_button_link');?>"><?php echo $params->get('col_4_button_text');?></a></li>
						</ul>
					</div>
				</div>
<?
$document->addScript(JURI::root(true).'/modules/mod_pr_pricetable/js/jquery.js'); 
?>
