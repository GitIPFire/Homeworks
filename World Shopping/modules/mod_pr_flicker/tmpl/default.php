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
$flicker_variable=$params->get('flicker_style');
if($flicker_variable==1){

?> 


<div id="sidebar">
<div class="widget flickr">
<h3 class="widget-title">Flicker Gallery</h3>
<ul class="no-bullet p0 clearfix">
<div id="nocallback"></div>
</ul>
</div>
</div>
<?
}
else
{
?>


<div class="widget flickr">
	<h3 class="widget-title">Flicker Gallery</h3>
	<ul class="no-bullet p0 clearfix">
<div id="nocallback"></div>
	</ul>
</div>
<?
}
?>
<script>
  $(document).ready(function() {
  $('#nocallback').jflickrfeed({
	limit: <?php echo $params->get('flicker_limit');?>,
	qstrings: {
		id: '<?php echo $params->get('flicker_id');?>'
	},
	useTemplate: false,
	itemCallback: function(item){
		$(this).append("<li><a href='#'><img src='" + item.image_m + "' alt=''/></a></li>");
	}
});
});

</script>


<?
$document->addScript(JURI::root(true).'/modules/mod_pr_flicker/js/jflickrfeed.js');  


?>

