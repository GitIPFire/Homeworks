<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

  <!-- FOOT NAVIGATION -->
  <div class="container">
    <?php $this->spotlight ('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
  </div>
  <!-- //FOOT NAVIGATION -->

  <section class="t3-copyright">
    <div class="container">
	

	<nav class="wrap t3-banner-5<?php $this->_c('t3-banner-5') ?>">
    <jdoc:include type="modules" name="<?php $this->_p('t3-banner-5') ?>" />
	</nav>

	<div class="row">	
        <div class="<?php echo $this->getParam('t3-rmvlogo', 1) ? 'span8' : 'span8' ?> copyright<?php $this->_c('footer')?>">
          <jdoc:include type="modules" name="<?php $this->_p('footer') ?>" style="xhtml" />
        </div>
        <?php if($this->getParam('t3-rmvlogo', 1)): ?>
        <div class="span3 poweredby<?php $this->_c('poweredby') ?>">
          <jdoc:include type="modules" name="<?php $this->_p('poweredby') ?>" style="xhtml" />
        </div>
        <?php endif; ?>

    </div>
    </div>
  </section>

</footer>
<!-- //FOOTER -->