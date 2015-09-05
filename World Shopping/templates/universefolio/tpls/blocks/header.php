<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$sitename = $this->params->get('sitename') ? $this->params->get('sitename') : JFactory::getConfig()->get('sitename');
$slogan = $this->params->get('slogan');
$logotype = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', '') : '';
if ($logoimage) {
  $logoimage = ' style="background-image:url('.JURI::base(true).'/'.$logoimage.');"';
}
?>

<!-- HEADER -->
<header id="header" class="clearfix t3-header">
<div class="container clearfix">

				<div id="top-bar" class="clearfix">
					<div class="info clearfix head-info<?php $this->_c('head-info')?>">
						<jdoc:include type="modules" name="<?php $this->_p('head-info') ?>" />
					</div>

					<div class="flags clearfix head-flag<?php $this->_c('head-flag')?>">
						<jdoc:include type="modules" name="<?php $this->_p('head-flag') ?>" />
					</div>
				</div>
				

				<div id="logo" class="three column">
				  <div class="logo-<?php echo $logotype ?>">
					<h1>
					  <a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>"<?php echo $logoimage ?>>
						<span><?php echo $sitename ?></span>
					  </a>
					  <small class="site-slogan hidden-phone"><?php echo $slogan ?></small>
					</h1>
				  </div>
				</div>
				
		
<nav id="nav" class="nine column">			
  <div class="navbar">
    <div class="navbar-inner">
    
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <i class="icon-reorder"></i>
      </button>

  	  <div class="nav-collapse collapse<?php echo $this->getParam('navigation_collapse_showsub', 1) ? ' always-show' : '' ?>">
      <?php if ($this->getParam('navigation_type') == 'megamenu') : ?>
        <?php $this->megamenu($this->getParam('mm_type', 'mainmenu')) ?>
      <?php else : ?>
        <jdoc:include type="modules" name="<?php $this->_p('mainnav') ?>" style="raw" />
      <?php endif ?>
  		</div>
    </div>
  </div>
</nav>
					
				
    </div>

</header>
<!-- //HEADER -->
