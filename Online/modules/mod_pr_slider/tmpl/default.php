<?php 
/*
 * @package Joomla 2.5
 * @copyright Copyright (C) 2012 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR slide show
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();
$s1=$params->get('prslide_img1');
$defaultvalue= $params->get('default_value');
?> 

	        <div class="fullwidthbanner-container <? echo $params->get('class_suffix'); ?>">
	            <div class="fullwidthbanner">
				<? if($defaultvalue =='1') { ?>
	                <ul class="no-bullet m0 p0">
	                    <!-- slide 1 -->
						<? if($params->get('default_value_slider_1')==1){ ?>
	                    <li class="bg_image1" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
	                    	
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sft"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								  
								 <? $a1=$params->get('ttitle11'); if($a1 == null) {?>
	                                Welcome to <strong>Univers Folio</strong>
								<?} else echo $a1; ?>
								 
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $a2=$params->get('ttitle12'); if($a2 == null) {?>
	                                We Make Design and Develop Beautiful Joomla Template
								<?} else echo $a2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $a3=$params->get('ttitle13'); if($a3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $a3; ?>
	                        </div>
							<? if($params->get('default_button_1')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle13');?>" class="button round">
									<? $button1=$params->get('btitle14'); if($button1 == null) {?>
	                                Learn More</a>
								<?} else echo $button1; ?></a>
									
	                        </div>
							<? } ?>
							
	                        <? if($params->get('default_video_1')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle14');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px; border:none;'></iframe>
	                        </div>
	                        <? } ?>							
	                    </li>
						<? } ?>
	                    
	                    <!-- slide 2 -->
						<? if($params->get('default_value_slider_2')==1){ ?>
	                    <li class="bg_image2" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
						
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfl"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $b1=$params->get('ttitle21'); if($b1 == null) {?>
	                            	Fully Responsive &amp; Touch Enabled
								<?} else echo $b1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $b2=$params->get('ttitle21'); if($b2 == null) {?>
	                                Universfolio is ready to use on mobile devices, like tablets and phones.
									<?} else echo $b2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $b3=$params->get('ttitle23'); if($b3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $b3; ?>
	                        </div>
	                        
							<? if($params->get('default_button_2')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle23');?>" class="button round">
									<? $button2=$params->get('btitle24'); if($button2 == null) {?>
	                                Learn More</a>
								<?} else echo $button2; ?></a>
									
	                        </div>
							<? } ?>
							
	                        <? if($params->get('default_video_2')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle24');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
	                        </div>
	                        <? } ?>							
	                    </li>
						<? } ?>
	                    
	                    <!-- slide 3 -->
						<? if($params->get('default_value_slider_3')==1){ ?>
	                    <li class="bg_image3" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
						
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $c1=$params->get('ttitle31'); if($c1 == null) {?>
	                                Play YouTube &amp; Vimeo Video
									<?} else echo $c1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $c2=$params->get('ttitle32'); if($c2 == null) {?>
	                                Plus Use Custom Backgrounds!
									<?} else echo $c2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $c3=$params->get('ttitle33'); if($c3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $c3; ?>
	                        </div>	                        
							<? if($params->get('default_button_3')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle33');?>" class="button round">
									<? $button3=$params->get('btitle34'); if($button3 == null) {?>
	                                Learn More</a>
								<?} else echo $button3; ?></a>
									
	                        </div>
							<? } ?>
	                        <? if($params->get('default_video_3')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle34');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
					
						
						<!-- slide 4 -->
						<? if($params->get('default_value_slider_4')==1){ ?>
	                    <li class="bg_image4" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
	            
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sft"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								  
								 <? $d1=$params->get('ttitle41'); if($d1 == null) {?>
	                                Welcome to <strong>Univers Folio</strong>
								<?} else echo $d4; ?>
								 
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $d2=$params->get('ttitle42'); if($d2 == null) {?>
	                                We Make Design and Develop Beautiful Joomla Template
								<?} else echo $d2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $d3=$params->get('ttitle43'); if($d3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $d3; ?>
	                        </div>
							
							<? if($params->get('default_button_4')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle43');?>" class="button round">
									<? $button4=$params->get('btitle44'); if($button4 == null) {?>
	                                Learn More</a>
								<?} else echo $button4; ?></a>
									
	                        </div>
							<? } ?>
							
	                        <? if($params->get('default_video_4')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle44');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>
							</li>
						<? } ?>
	                    
	                    <!-- slide 5 -->
						<? if($params->get('default_value_slider_5')==1){ ?>
	                    <li class="bg_image5" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
					
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfl"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $e1=$params->get('ttitle51'); if($e1 == null) {?>
	                            	Fully Responsive &amp; Touch Enabled
								<?} else echo $e1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $e2=$params->get('ttitle51'); if($e2 == null) {?>
	                                Universfolio is ready to use on mobile devices, like tablets and phones.
									<?} else echo $e2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $e3=$params->get('ttitle53'); if($e3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $e3; ?>
	                        </div>	                        
							<? if($params->get('default_button_5')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle53');?>" class="button round">
									<? $button5=$params->get('btitle54'); if($button5 == null) {?>
	                                Learn More</a>
								<?} else echo $button5; ?></a>
									
	                        </div>
							<? } ?>

	                        <? if($params->get('default_video_5')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle54');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>							
	                    </li>
						<? } ?>
	                    
	                    <!-- slide 6 -->
						<? if($params->get('default_value_slider_6')==1){ ?>
	                    <li class="bg_image6" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
				
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $f1=$params->get('ttitle61'); if($f1 == null) {?>
	                                Play YouTube &amp; Vimeo Video
									<?} else echo $f1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $f2=$params->get('ttitle62'); if($f2 == null) {?>
	                                Plus Use Custom Backgrounds!
									<?} else echo $f2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $f3=$params->get('ttitle63'); if($f3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $f3; ?>
	                        </div>	                        
							<? if($params->get('default_button_6')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle63');?>" class="button round">
									<? $button6=$params->get('btitle64'); if($button6 == null) {?>
	                                Learn More</a>
								<?} else echo $button6; ?></a>
									
	                        </div>
							<? } ?>
	                        
	                        <? if($params->get('default_video_6')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle64');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
	                
	                    
	                    <!-- slide 7 -->
						<? if($params->get('default_value_slider_7')==1){ ?>
	                    <li class="bg_image7" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
				
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $g1=$params->get('ttitle71'); if($g1 == null) {?>
	                                Play YouTube &amp; Vimeo Video
									<?} else echo $g1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $g2=$params->get('ttitle72'); if($g2 == null) {?>
	                                Plus Use Custom Backgrounds!
									<?} else echo $g2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $g3=$params->get('ttitle73'); if($g3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $g3; ?>
	                        </div>	                        
							<? if($params->get('default_button_7')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle73');?>" class="button round">
									<? $button7=$params->get('btitle74'); if($button7 == null) {?>
	                                Learn More</a>
								<?} else echo $button7; ?></a>
									
	                        </div>
							<? } ?>
	                        
	                        <? if($params->get('default_video_7')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle74');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
	                
	                    
	                    <!-- slide 8 -->
						<? if($params->get('default_value_slider_8')==1){ ?>
	                    <li class="bg_image8" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
				
	                        <!-- captions -->
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? $h1=$params->get('ttitle81'); if($h1 == null) {?>
	                                Play YouTube &amp; Vimeo Video
									<?} else echo $h1; ?>
	                        </div>
	                        
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? $h2=$params->get('ttitle82'); if($h2 == null) {?>
	                                Plus Use Custom Backgrounds!
									<?} else echo $h2; ?>
	                        </div>
	                        
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? $h3=$params->get('ttitle83'); if($h3 == null) {?>
	                                Lorem ipsum dolor sit amet proin gravida
								<?} else echo $h3; ?>
	                        </div>	                        
							<? if($params->get('default_button_8')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
	                                <a href="<?php echo $params->get('btitle83');?>" class="button round">
									<? $button8=$params->get('btitle84'); if($button8 == null) {?>
	                                Learn More</a>
								<?} else echo $button8; ?></a>
									
	                        </div>
							<? } ?>
	                        
	                        <? if($params->get('default_video_6')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									
	                                <iframe src='<?php echo $params->get('vtitle64');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
	                
	                </ul>		
	           <? } else {?>

	                <ul class="no-bullet m0 p0">
	                    <!-- slide 1 -->
						<? if($params->get('default_value_slider_1')==1){ ?>
	                    <li class="bg_image1" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
	
	                        <!-- captions -->
								 <? $a1=$params->get('ttitle11');
								 if($a1!=null){ ?>
	                        <div class="tp-caption big text-shadow pl0 sft"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								  
									<? echo $a1; ?>
								 
	                        </div>
							
							<? } $a2=$params->get('ttitle12'); if($a2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $a2; ?>
	                        </div>
	                        <? } $a3=$params->get('ttitle13'); if($a3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $a3; ?>
	                        </div>
							<? } ?>
							<? if($params->get('default_button_1')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button1=$params->get('btitle14'); if($button1 != null) {?>
	                                <a href="<?php echo $params->get('btitle13');?>" class="button round">
									<? echo $button1; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>							
	                        <? if($params->get('default_video_1')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle14')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle14');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>							
	                    </li>
	                    <? } ?>
	                    <!-- slide 2 -->
						<? if($params->get('default_value_slider_2')==1){ ?>						
	                    <li class="bg_image2" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<?  $b1=$params->get('ttitle21'); if($b1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfl"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $b1; ?>
	                        </div>
	                        <? } $b2=$params->get('ttitle22'); if($b2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $b2; ?>
	                        </div>
	                        <? } $b3=$params->get('ttitle23'); if($b3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $b3; ?>
	                        </div>
							<? } ?>	

							<? if($params->get('default_button_2')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button2=$params->get('btitle24'); if($button2 != null) {?>
	                                <a href="<?php echo $params->get('btitle23');?>" class="button round">
									<? echo $button2; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	
	                        <? if($params->get('default_video_2')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle24')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle24');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
							</li>
	                    <? } ?>
						
	                    <!-- slide 3 -->
						<? if($params->get('default_value_slider_3')==1){ ?>
	                    <li class="bg_image3" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<? $c1=$params->get('ttitle31'); if($c1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $c1; ?>
	                        </div>
	                        <? } $c2=$params->get('ttitle32'); if($c2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $c2; ?>
	                        </div>
	                        <? } $c3=$params->get('ttitle33'); if($c3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $c3; ?>
	                        </div>
							<? } ?>	
							<? if($params->get('default_button_3')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button3=$params->get('btitle34'); if($button3 != null) {?>
	                                <a href="<?php echo $params->get('btitle33');?>" class="button round">
									<? echo $button3; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	

	                        <? if($params->get('default_video_3')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle34')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle34');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
							</li>
						<? } ?>
						
						<!-- slide 4 -->
						<? if($params->get('default_value_slider_4')==1){ ?>
	                    <li class="bg_image4" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->
	
	                        <!-- captions -->
	                        <? $d1=$params->get('ttitle41'); if($d1!=null){ ?>	
							<div class="tp-caption big text-shadow pl0 sft"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								  
								 <? echo $d1; ?>
							</div>
	                        <? } $d2=$params->get('ttitle42'); if($d2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $d2; ?>
	                        </div>
	                        <? } $d3=$params->get('ttitle43'); if($d3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $d3; ?>
	                        </div>
							<? if($params->get('default_button_4')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
									<? $button4=$params->get('btitle44'); if($button4 != null) {?>
	                                <a href="<?php echo $params->get('btitle43');?>" class="button round">
									<? echo $button4; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	
	                        <? } if($params->get('default_video_4')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle44')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle44');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
							</li>
	                    <? } ?>
						
	                    <!-- slide 5 -->
						<? if($params->get('default_value_slider_5')==1){ ?>
	                    <li class="bg_image5" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<? $e1=$params->get('ttitle51'); if($e1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfl"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $e1; ?>
	                        </div>
	                        <? } $e2=$params->get('ttitle52'); if($e2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $e2; ?>
	                        </div>
	                        <? } $e3=$params->get('ttitle53'); if($e3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $e3; ?>
	                        </div>
							<? } ?>	
							<? if($params->get('default_button_5')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button5=$params->get('btitle54'); if($button5 != null) {?>
	                                <a href="<?php echo $params->get('btitle53');?>" class="button round">
									<? echo $button5; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	

	                        <? if($params->get('default_video_5')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle54')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle54');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
							</li>
	                    <? } ?>
						
	                    <!-- slide 6 -->
						<? if($params->get('default_value_slider_6')==1){ ?>						
	                    <li class="bg_image6" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<? $f1=$params->get('ttitle61'); if($f1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $f1; ?>
	                        </div>
	                        <? } $f2=$params->get('ttitle62'); if($f2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $f2; ?>
	                        </div>
	                        <? } $f3=$params->get('ttitle63'); if($f3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $f3; ?>
	                        </div>
							<? } ?>	
							<? if($params->get('default_button_6')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button6=$params->get('btitle64'); if($button6 != null) {?>
	                                <a href="<?php echo $params->get('btitle63');?>" class="button round">
									<? echo $button6; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	
	                        
	                        <? if($params->get('default_video_6')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle64')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle64');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
						
	                    <!-- slide 7 -->
						<? if($params->get('default_value_slider_7')==1){ ?>						
	                    <li class="bg_image7" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<? $g1=$params->get('ttitle71'); if($g1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $g1; ?>
	                        </div>
	                        <? } $g2=$params->get('ttitle72'); if($g2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $g2; ?>
	                        </div>
	                        <? } $g3=$params->get('ttitle73'); if($g3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $g3; ?>
	                        </div>
							<? } ?>	
							<? if($params->get('default_button_7')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button7=$params->get('btitle74'); if($button7 != null) {?>
	                                <a href="<?php echo $params->get('btitle73');?>" class="button round">
									<? echo $button7; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	
	                        
	                        <? if($params->get('default_video_7')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle74')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle74');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
						
	                    <!-- slide 8 -->
						<? if($params->get('default_value_slider_8')==1){ ?>						
	                    <li class="bg_image8" data-transition="fade" data-slotamount="7" data-masterspeed="300">
	                        <!-- main image -->

	                        <!-- captions -->
							<? $h1=$params->get('ttitle81'); if($h1!=null){ ?>	
	                        <div class="tp-caption big text-shadow pl0 sfr"
	                             data-x="0"
	                             data-y="267"
	                             data-speed="1000" 
	                             data-start="1000" 
	                             data-easing="easeOutBack">
								 <? echo $h1; ?>
	                        </div>
	                        <? } $h2=$params->get('ttitle82'); if($h2!=null){ ?>	
	                        <div class="tp-caption small white sft"
	                             data-x="0"
	                             data-y="305"
	                             data-speed="1000"
	                             data-start="1500"
	                             data-easing="easeOutBack">
								 <? echo $h2; ?>
	                        </div>
	                        <? } $h3=$params->get('ttitle83'); if($h3!=null){ ?>	
	                        <div class="tp-caption small colored sfb"
	                             data-x="0"
	                             data-y="341"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">
								 <? echo $h3; ?>
	                        </div>
							<? } ?>	
							<? if($params->get('default_button_8')==1) { ?>
	                        <div class="tp-caption sfb"
	                             data-x="0"
	                             data-y="385"
	                             data-speed="1000"
	                             data-start="2000"
	                             data-easing="easeOutExpo">

									<? $button8=$params->get('btitle84'); if($button8 != null) {?>
	                                <a href="<?php echo $params->get('btitle83');?>" class="button round">
									<? echo $button8; ?></a>
									<? } ?>
									
	                        </div>
							<? } ?>	
	                        
	                        <? if($params->get('default_video_8')==1) { ?>
	                        <div class="tp-caption video sfr"
	                             data-x="620"
	                             data-y="220"
	                             data-speed="1000"
	                             data-start="1000"
	                             data-easing="easeOutBack">
									<? if($params->get('vtitle84')!='http://www.youtube.com/embed/YE7VzlLtp-4'){?>
	                                <iframe src='<?php echo $params->get('vtitle84');?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0' width='500' height='300' style='width:550px;height:309px;'></iframe>
									<? } ?>
									
	                        </div>
	                        <? } ?>
	                    </li>
						<? } ?>
						
	                </ul>		
	           <? } ?>			   
			   
			   </div>
	       </div>


<?
$document->addScript(JURI::root(true).'/modules/mod_pr_slider/js/jquery.themepunch.plugins.min.js'); 
$document->addScript(JURI::root(true).'/modules/mod_pr_slider/js/jquery.themepunch.revolution.js'); 
?>


	<script type="text/javascript">
		$(document).ready(function() {
			$('.fullwidthbanner').revolution({
				delay:6000,
				startwidth:1170,
				startheight:680,
				onHoverStop: "on",
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 3,
                hideThumbs: 200,
                navigationType: "bullet",
                navigationArrows: "verticalcentered",
                navigationStyle: "round",
                touchenabled: "on",
                navOffsetHorizontal: 0,
                navOffsetVertical: 20,
                stopAtSlide: -1,
                stopAfterLoops: -1,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                hideSliderAtLimit: 0,
                fullWidth: "on",
                shadow: 0
			});
		});
	</script>
<style>
.bg_image1{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img1')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image2{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img2')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image3{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img3')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image4{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img4')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image5{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img5')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image6{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img6')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image7{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img7')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}

.bg_image8{
background: url(<?php echo "'".JURI::base().$params->get('prslide_img8')."'";?>)no-repeat;
background-size:100% 100%;
height:100%;
}
.tp-simpleresponsive ul li{width:100%!important; height:100%!important;}
.tp-simpleresponsive ul li>div img{width:100%!important; height:100%!important; }

</style>