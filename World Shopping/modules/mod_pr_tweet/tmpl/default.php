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

	    <div id="sidebar" class="<?php echo $params->get('class_suffix');?>">
<div class="widget twitter clearfix">
<h3 class="widget-title">Latest Tweets</h3>
<a class="twitter-timeline" href="https://twitter.com/<?php echo $params->get('tweet_uname');?>" data-widget-id="<?php echo $params->get('tweet_id');?>" data-tweet-limit="<?php echo $params->get('tweet_limit');?>" data-chrome="noheader noborders noavatar transparent nofooter">Tweets by @<?php echo $params->get('tweet_uname');?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>

