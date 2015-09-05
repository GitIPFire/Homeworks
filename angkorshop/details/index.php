<?php define('PATH','../');
	include PATH.'includes/classes/class.php';
	include PATH.INCLUDES.ANGKOR_HEADER;
?>
    
    
    <div class="main">
    	<div class="container">
        	<div class="container-top">
            	<header>
                	<section>
                    	<p>&nbsp;</p>
                        <p>Product Details</p>
                   	</section>
               	</header>
            </div>
            <div class="container-bottom">
            
                
                <div class="content_grid">
                	<div class="grid_left">
                    	<div class="wrap">
                        	<div class="details_img">
                            <?php
                            	$details=$obj->fetchArray("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'");
								$rec=mysql_fetch_array($details);
								if(mysql_num_rows($details)>0)
								{
									echo ($rec[6]==""||$rec[6]==NULL)?'<img src="'.PATH.ADMINS.UPLOAD.'default.png" class="img-responsive" alt="'.$rec[2].'"/>':'<img src="'.PATH.ADMINS.UPLOAD.$rec[6].'" class="img-responsive" alt="'.$rec[2].'"/>';
								
								
							?>
                        	
                            </div>
                            <div class="title">
                                <p><?php echo $rec[2];?><strong style="color:#F00;"><?php echo $rec[5];?><sup>.00</sup></strong></p>
                                <p>Contact: <?php echo $rec[7];?></p>
                            </div>
                        </div>
                    	
                    </div>  
                    
                    <div class="grid_right">
                    	
                    	<?php
                        	$view=$obj->fetchArray("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)<>'".$_GET['id']."' ORDER BY RAND() LIMIT 2");
						
							while($res=mysql_fetch_array($view))
							{
								echo '<a href="../details/?id='.md5($res[1]).'">';
									echo '<div class="wrap_">'.
												'<div class="details_img">';
													echo ($res[6]==""||$res[6]==NULL)?'<img src="'.PATH.ADMINS.UPLOAD.'default.png" class="img-responsive" alt="'.$res[2].'"/>':'<img src="'.PATH.ADMINS.UPLOAD.$res[6].'" class="img-responsive" alt="'.$res[2].'"/>';
												
										   echo '</div>'.
												'<div class="title">'.
													  '<p>'.$res[2].'<br /> <strong>'.$res[5].'<sup>.00</sup></strong></p>'.
												'</div>'.
										 '</div>'.
									 '<a/>';
							}
						?>
                    	
                        	
                            
                        
                    </div>     
                                 
                </div><!-- content_grid-->
                
                <?php } else{echo '<span>NO PRODUCT SELECTED!</span>';}?>
            </div><!-- container-bottom-->
        	
     
        </div><!-- container-->
    </div><!--main-->
    
    
    <?php
    	include PATH.INCLUDES.ANGKOR_FOOTER;
	?>
    
    