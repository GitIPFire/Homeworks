<?php 
	define('PATH','');
	include PATH.'includes/classes/class.php';
	include PATH.INCLUDES.'xmlwriter.php';
	include PATH.INCLUDES.ANGKOR_HEADER;
	$pages=0;
?>
    
    
    <div class="main">
    	<div class="container">
        	<div class="container-top">
            	<header>
                	<section>
                    	<p>&nbsp;</p>
                        <p>Latest Products</p>
                   	</section>
               	</header>
            </div>
            <div class="container-bottom">
            
            	
					<?php
                    	$xmlRetrive=simplexml_load_file(INCLUDES.'paginator.xml') or die('No Record Found!');
						$ind=0;
						echo '<div class="content_grid">';
						foreach($xmlRetrive->page as $result)
						{
							$ind++;
							if(isset($_GET['page']))
							{
								switch($_GET['page'])
								{
									case 1:
										if($pages<6)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 2:
										if($pages>=6 && $pages<=11)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 3:
										if($pages>=12 && $pages<=17)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 4:
										if($pages>=17 && $pages<=22)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 5:
										if($pages>=22 && $pages<=27)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 6:
										if($pages>=27 && $pages<=32)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 7:
										if($pages>=32 && $pages<=37)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 8:
										if($pages>=37 && $pages<=42)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 9:
										if($pages>=42 && $pages<=47)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}
									break;
									case 10:
										if($pages>=47 && $pages<=52)
										{
											$obj->displayList($result->code,$result->image,$result->name,$result->price);
										}									
									break;
								}// close switch								
							} // close if isset($_GET['page'])
							else
							{
								if($pages<6)
								{
									$obj->displayList($result->code,$result->image,$result->name,$result->price);
								}
							} // close else
								if($ind==3)
								{
									echo '</div>'; // close content_grid
									echo '<div class="conent_grid">';
									$ind=0;
								}
								$pages+=1; // increment	
						}// close foreach
					?>
            	
            	
         
            </div><!-- container-bottom-->
        	
            <div class="paginator">
            	<?php $q=1;?>
            	<?php if(isset($_GET['page']))
								{
				?>
					<a href="<?php echo '?page=';?><?php echo ($_GET['page']>$q)?$_GET['page']-1:$_GET['page'];?>">
						<span>&laquo;Prev</span>
					</a>
				<?php }else{?>
                    <a href="<?php echo '?page=1';?>">
                    	<span>&laquo;Prev</span>
                    </a>
				<?php }?> 
                
                <?php 
					$page=$pages/6;
					$pageginate=(is_int($page))?$page:(int)$page+1;
					$v=$pageginate;
					for(;$q<=$pageginate;$q++)
					{
						echo '<span ';
						echo ($_GET['page']==$q)?' style="background:#81d4fa;" ':'';
						echo  ' onclick="header(\'?page='.$q.'\')">'.$q.'</span>';
					}
					
				?> 
                
                <?php 
					if(isset($_GET['page']))
					{
				?>
                        <a href="<?php echo '?page=';?><?php echo ($_GET['page']>=$q-1)?$_GET['page']:$_GET['page']+1;?>">
                            <span>Next &raquo;</span>
                        </a>
			   <?php
					}
					else
					{
				?>
                        <a href="<?php echo '?page=1';?>">
                        	<span>Next &raquo;</span>
                        </a>
				<?php } ?>
                          
            </div><!-- pageinate-->
     
        </div><!-- container-->
    </div><!--main-->
    
   <?php
   		include PATH.INCLUDES.ANGKOR_FOOTER;
   ?> 
   