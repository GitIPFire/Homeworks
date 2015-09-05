<?php 

/**
 * @package	Joomla.Tutorials
 * @subpackage	Module
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license	License GNU General Public License version 2 or later; see LICENSE.txt
 */
//<?php echo $params->get('greeting', JText::_('MOD_HELLOWORLD_GREETING_DEFAULT'));
//<?php echo $params->get('greeting', JText::_('MOD_HELLOWORLD_GREETING_DEFAULT'));
// No direct access to this file
defined('_JEXEC') or die;
$document = JFactory::getDocument();
?>
		<!-- css link section -->
		
		<!-- end of css link section -->
		
		<!-- js link section -->
<?		
        
		$document->addScript(JURI::root(true).'/modules/mod_pr_carousel/js/jquery.min.js');
		$document->addScript(JURI::root(true).'/modules/mod_pr_carousel/js/jquery.bxslider.min.js');
		$document->addScript(JURI::root(true).'/modules/mod_pr_carousel/js/script.js');
		

?>

<?php 
$mainwidth = $params->get('width');
$mainheight = $params->get('height');
$mainspeed = $params->get('speed');
$mainrandom = $params->get('randomimage');
$mainstyle = $params->get('style');

?>

		        
				<div class="clear"></div>
				<div class="row11 has-title">
					<div class="title-1"><?php echo $params->get('title');?></div>

					<div class="twelve column">
						<ul class="bxslider clients">
							<?php foreach($images as $image){?><li><a href="#"><?
	 echo JHtml::_('image', $image->folder.'/'.$image->name, $image->name, array('width' => $mainwidth, 'height' => $mainheight)); 
	?></a></li><? } ?>
					
 						</ul>
					</div>
				</div>
