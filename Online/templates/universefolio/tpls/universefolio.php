<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */


defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<?php $this->bodyClass(); ?>">

  <head>
    <jdoc:include type="head" />
    <?php $this->loadBlock ('head') ?>
  </head>

  <body class="wide">
	<div id="wrap">
    <?php $this->loadBlock ('header') ?>

	<?php $this->loadBlock ('t3-slide') ?>
			<section id="content">
			<div class="container clearfix">
    <?php $this->loadBlock ('mainbody2') ?>
	<?php $this->loadBlock ('t3-banner') ?>
    <?php $this->loadBlock ('spotlight-1') ?>
	<?php $this->loadBlock ('t3-banner-2') ?>
    <?php $this->loadBlock ('spotlight-2') ?>
    <?php $this->loadBlock ('mainbody') ?>

	
    
    <?php $this->loadBlock ('spotlight-3') ?>
	
	<?php $this->loadBlock ('t3-banner-3') ?>
	<?php $this->loadBlock ('t3-banner-4') ?>
    
    <?php $this->loadBlock ('navhelper') ?>
    			</div>
		</section>
    <?php $this->loadBlock ('footer') ?>
	</div>   
  </body>

</html>