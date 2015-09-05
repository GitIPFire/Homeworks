<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- NAV HELPER -->
<section id="page-title" class="wrap page-title<?php $this->_c('page-title') ?>">
<div class="container clearfix">
    <jdoc:include type="modules" name="<?php $this->_p('page-title') ?>" style="xhtml"/>
</div>
</section>
<nav class="wrap t3-slide<?php $this->_c('t3-slide') ?>">

    <jdoc:include type="modules" name="<?php $this->_p('t3-slide') ?>" style="xhtml"/>

</nav>
<!-- //NAV HELPER -->