<?php
/*------------------------------------------------------------------------
# News Show SP2 - News display/Slider module by JoomShaper.com
# ------------------------------------------------------------------------
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2013 JoomShaper.com. All Rights Reserved.
# @license - GNU/GPL V2 for PHP files. CSS / JS are Copyrighted Commercial
# Websites: http://www.joomshaper.com
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$coulmncount = $params->get('article_column');

$modId = $module->id;
$date_time 				= '';

?>

<div id="ns2-<?php echo $modId; ?>" class="nssp2 ns2-<?php echo $uniqid ?>">
	<div class="ns2-wrap">
					<div class="portfolio-filter">
					<ul class="no-bullet m0 p0 clearfix">

					<li class="reloadme"><a href="#" data-filter="*" class="selected">All</a></li>


<?php $count=0; $match[0]=$list[0]->category;  for($i=1;$i<$c_article_count;$i++): 
if($list[$i]->category!=$match[$i-1]){
?>
						<li class="reloadme">						
				<a data-filter=".<?php echo $list[$i]->category; ?>" href="#">
					<?php echo $list[$i]->category; $count=$count+1;?></a>
						</li>
<?php  if($count==6) break;}
else 
{}

$match[$i]=$list[$i]->category;
endfor; ?>
					</ul>
				</div>
		<div class="portfolio-items">		
	<? for($i=0; $i<$c_article_count; $i++) { ?>

									<?php if ($i <$c_article_count): ?>
									<div class="<? if ($coulmncount == 2) echo 'six'; if ($coulmncount == 3) echo 'four';if ($coulmncount == 4) echo 'three'; ?> column portfolio-item <?php echo $list[$i]->category ?>">
										<div style="padding:<?php echo $article_col_padding ?>">

																					
											
												<?php /*Image position before title*/if ($article_show_image && $article_image_pos=='top' && $list[$i]->image): ?>

														<img class="ns2-image <?php echo $list[$i]->category; ?>" style="<?php echo $article_image_float ?>;<?php echo ($article_image_margin) ? "margin:$article_image_margin" : "" ?>" src="<?php echo modNSSP2CommonHelper::thumb($list[$i]->image, $article_thumb_width, $article_thumb_height, $article_thumb_ratio, $uniqid) ?>" alt="<?php echo $list[$i]->title ?>" title="<?php echo $list[$i]->title ?>" />
								
													<?php if ($article_linked_image): ?>
<a href="<?php echo $list[$i]->image; ?>" class="zoom-in photo" data-title="Title 1"></a>
						<a href="<?php echo $list[$i]->link; ?>" class="external-link"></a>													
													<?php endif; ?>	
													
												<?php endif; ?>												
												
						
												
												<?php /*Author, Category, date*/ if ($article_show_author || $article_date_format || $article_show_category): ?>
													<div class="ns2-tools">
														<?php /*Show Author*/ if ($article_show_author): ?>
															<div class="ns2-author">
																<?php echo '<span>' . JText::_('MODNS2_WRITTEN') . '</span>' . $list[$i]->author; ?>
															</div>
														<?php endif; ?>

																		
														
												
													</div>
												<?php endif; ?>
	
												<?php /*Image position after title*/if ($article_show_image && $article_image_pos=='bottom' && $list[$i]->image): ?>
														<img class="ns2-image <?php echo $list[$i]->category; ?>" style="<?php echo $article_image_float ?>;<?php echo ($article_image_margin) ? "margin:$article_image_margin" : "" ?>" src="<?php echo modNSSP2CommonHelper::thumb($list[$i]->image, $article_thumb_width, $article_thumb_height, $article_thumb_ratio, $uniqid) ?>" alt="<?php echo $list[$i]->title ?>" title="<?php echo $list[$i]->title ?>" />
											
													<?php if ($article_linked_image): ?>
<a href="<?php echo $list[$i]->image; ?>" class="zoom-in photo" data-title="Title 1"></a>
						<a href="<?php echo $list[$i]->link; ?>" class="external-link"></a>													
													<?php endif; ?>	
												<?php endif; ?>			
												
												<?php /*Ratings*/ if ($article_show_ratings): ?>
													<div class="ns2-rating">
														<div class="ns2-rating-bar">
															<div style="width:<?php echo $list[$i]->rating ?>%"></div>	
														</div>	
													</div>
												<?php endif; ?>

												<?php /*Introtext*/ if ($article_introtext): ?>
													<p class="ns2-introtext"><?php echo modNSSP2CommonHelper::cText($list[$i]->introtext, $article_count_intro_text, $article_intro_text_limit) ?></p>								
												<?php endif; ?>
												
												<div class="ns2-social">
													<?php /* Social Share */
														foreach (modNSSP2SocialHelper::icons($list[$i], $params) as $icon) {
															echo $icon;
														}
													?>
												</div>
												
												<?php /*Virtuemart*/ if ($art_show_price || $art_show_cart_button) : ?>
													<div class="ns2-vm-bar">
														<?php /*Show Price*/ if ($art_show_price) : ?>
															<p class="ns2-vm-price"><?php echo $list[$i]->price ?></p>
														<?php endif; ?>

														<?php /*Show Cart Button*/ if ($art_show_cart_button) : ?>
															<?php echo $list[$i]->addtocart ?>
														<?php endif; ?>
													</div>
												<?php endif; ?>
												
												<?php /*K2 Extra fields*/ if ($article_extra_fields && $content_source == 'k2' && count($list[$i]->extra_fields)): ?>
													<div style="clear:both"></div>
													<div class="NS2K2ExtraFields">
														<b><?php echo JText::_('Additional Info'); ?></b>
														<ul>
															<?php foreach ($list[$i]->extra_fields as $key=>$extraField): ?>
																<li class="type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?> <?php echo strtolower($extraField->name) ?> <?php echo $key%2 ? 'even' : 'odd';?> <?php if ($key==0) echo 'first'; ?>">
																	<span class="label"><?php echo $extraField->name; ?></span>
																	<span class="value"><?php echo $extraField->value; ?></span>
																	<div style="clear:both"></div>
																</li>
															<?php endforeach; ?>
														</ul>
													</div>
													<div style="clear:both"></div>
												<?php endif; ?>								
												
												<?php /*Comments, readmore, hits*/ if ($article_show_more || $article_hits || $article_comments): ?>
													<div class="ns2-links">
														<?php /*Comments*/ if ($article_comments):
															echo $list[$i]->comment;
														endif; ?>							
														<?php /*Hits*/ if ($article_hits): ?>
															<span class="ns2-hits"><?php echo JText::_('HITS_TEXT') . ':' . $list[$i]->hits ?></span>
														<?php endif; ?>

														<?php /*Readmore*/ if ($article_show_more): ?>
															<a class="ns2-readmore" href="<?php echo $list[$i]->link ?>"><span><?php echo $article_more_text ?></span></a>
														<?php endif; ?>
													</div>
												<?php endif; ?>
												<div style="clear:both"></div>
												

										</div>
									</div>
									<?php endif; ?>
				<?php } ?>
</div>
		

		<div style="clear:both"></div>
			
	</div>
</div>
