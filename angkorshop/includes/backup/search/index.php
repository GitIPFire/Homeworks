<?php
include("../administrator/configure/classes/class/class.php");

$pages=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMU search</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="../images/common/logo-mekong.png" rel="shortcut icon" />
<script src="js/js.js"></script>
<script>
	function showResult(str) {
	  if (str.length==0) {
		document.getElementById("content").innerHTML="";
		document.getElementById("content").style.border="0px";
		return;
	  }
	  if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		  document.getElementById("content").innerHTML=xmlhttp.responseText;
		  document.getElementById("content").style.border="1px solid #A5ACB2";
		}
	  }
	  xmlhttp.open("GET","live/livesearch.php",true);
	 /// xmlhttp.open("GET","live/livesearch.php?q="+str,true);
	  xmlhttp.send();
	}
</script>
</head>
<body>
<div id="web_content">
	
	<!--<div id="header">
    	<div id="top"><img src=""  /><span> Home </span>
        <!--</div>
    </div>--><!--close header-->
 	<div id="for_logo"><img src="images/common/logo.png" /></div>
  <div id="body">
    	<div id="top">
   		  <div id="search">
            <form method="get" action="?key">
              <input type="text" name="key" value="<?php echo $_GET['key']?>" />
               <div class="back_home"><a href="../">Home Page</a></div>
            </form>
           
   		  </div>
            <div id="menu">
            
            	<div style="border-bottom:solid 1px #666;" class="top">
                	<span style="margin-left:10px;"> Total : <span id="re">0</span> result found. </span>
                    <span style="margin-left:20px;">
                    	
                    	 <!--<select style="width:50px;">
                    		<option> 1 </option>
                            <option> 3 </option>
                            <option> 2 </option>
                    	 </select>--> 
                         </b>
                    </span>
                    <span class="view" style="background:url(images/common/type.png) -33px no-repeat;">
                    	  
                    </span>
                    <span class="view" style="background:url(images/common/type.png) no-repeat;"> 
                    	 
                    </span>
                </div>
               
                <?php /*?><div class="top">
                	<ul>
                    	<li> Index </li>
                        <li> Description </li>
                    </ul> 
                </div> <?php */?>   
            </div><!--close menu-->
            
            <div id="content">
            <?php
				if(isset($_GET['detail']))
				{
					echo "<script>
						var d=document.getElementById('content');
						d.innerHTML='';
					</script>";
					switch($_GET['tbl'])
					{
						case "1":
							define('TBL','t_about_mekong');
							define('CRIT','id');
							define('DET','des_en');
							define('TITLE','title_en');
							break;
						case "5":
							define('TBL','t_news');
							define('CRIT','ne_id');
							define('DET','ne_detail_en');
							define('TITLE','ne_name_en');
							break;
						case "4":
							define('TBL','t_events');
							define('CRIT','ev_id');
							define('DET','ev_detail_en');
							define('TITLE','ev_name_en');
							break;
						case "3":
							define('TBL','t_study_at_mekong');
							define('CRIT','id');
							define('DET','des_en');
							define('TITLE','title_en');
							break;
						case "2":
							define('TBL','t_sub_front_detail');
							define('CRIT','sub_fron_id');
							define('DET','dess_en');
							define('TITLE','des_en');
							break;	
					}
					$aa=mysql_query("select * from ".TBL." where ".CRIT."=".$_GET['detail']);
					while($get=mysql_fetch_array($aa)){
						//$get['des_en'];
						//echo '<div class="show_">'.$get['des_en'].'</div>';
						echo '<div class="show_">'.$get[TITLE].'</div>';
						echo"<br>";
						echo $get[DET];
					}
				
					
				}
				if(isset($_GET['key'])&&!isset($_GET['detail']))
				{
					include("live/xmlwriter.php");
					$xmlRetrive=simplexml_load_file('live/search.xml') or die('No Record Found!');
					echo'<table border="0" cellpadding="0" cellspacing="0">';
					echo '<tr>';
					$i=0;
					
					foreach($xmlRetrive->result as $result)
					{
						$pages+=1;
						//echo '<td>';
//						echo '<div class="show ';
//						echo ($i%2!=0)?'border">':'">';
//						echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
//								<span>'.$result->content.'  
//								</span>
//							</div></td>';
//							$i++;
//							if($i%2==0)
//							{
//								echo"</tr><tr>";
//							}
						if(isset($_GET['page']))
						{
							switch($_GET['page'])
							{
								case 1:
									if($pages>10)
									{
										
									}
									else
									{
										echo '<td>';
										echo '<div class="show ';
										echo ($i%2!=0)?'border">':'">';
										echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
												<span>'.$result->content.'  
												</span>
											</div></td>';
										$i++;
										if($i%2==0)
										{
											echo"</tr><tr>";
										}
									}
									break;
								case 2:
									if($pages>10 && $pages<=20)
									{
										echo '<td>';
										echo '<div class="show ';
										echo ($i%2!=0)?'border">':'">';
										echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
												<span>'.$result->content.'  
												</span>
											</div></td>';
											$i++;
											if($i%2==0)
											{
												echo"</tr><tr>";
											}
									}
									break;								
								case 3:
									if($pages>20 && $pages<=30)
									{
										echo '<td>';
										echo '<div class="show ';
										echo ($i%2!=0)?'border">':'">';
										echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
												<span>'.$result->content.'  
												</span>
											</div></td>';
											$i++;
											if($i%2==0)
											{
												echo"</tr><tr>";
											}
									}
									break;
								case 4:
									if($pages>30 && $pages<=40)
									{
										echo '<td>';
										echo '<div class="show ';
										echo ($i%2!=0)?'border">':'">';
										echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
												<span>'.$result->content.'  
												</span>
											</div></td>';
											$i++;
											if($i%2==0)
											{
												echo"</tr><tr>";
											}
									}
									break;
								case 5:
									if($pages>40 && $pages<=50)
									{
										echo '<td>';
										echo '<div class="show ';
										echo ($i%2!=0)?'border">':'">';
										echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
												<span>'.$result->content.'  
												</span>
											</div></td>';
											$i++;
											if($i%2==0)
											{
												echo"</tr><tr>";
											}
									}
									break;
								
							}
						}
						else
						{
							if($pages>10)
							{
								
							}
							else
							{
								echo '<td>';
								echo '<div class="show ';
								echo ($i%2!=0)?'border">':'">';
								echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl='.$result->table.'&detail='.$result->id.'\')" style="cursor:pointer;"> '.substr ($result->title,0,100).' </strong><br /> 
										<span>'.$result->content.'  
										</span>
									</div></td>';
								$i++;
								if($i%2==0)
								{
									echo"</tr><tr>";
								}
							}
						}
					} // clsoe foreach
					echo "</table></tr>";
						echo "<script>
							var d=document.getElementById('re');
							d.innerHTML = '".$pages."';
						</script>";
					echo "</tr></table>";
				}//close else
			?>
   
                	          
                		
                </div> 
                <div id="pag">
                	<div style="float:right;">
                        <?php 
							$q=1;
						?>
                        <?php
                        	if(isset($_GET['detail']))
							{}
							else{
						?>
                        	<?php if(isset($_GET['page']))
								{
							?>
                            	<a href="<?php echo '?key='.$_GET['key'].'&page=';?><?php echo ($_GET['page']>$q)?$_GET['page']-1:$_GET['page'];?>">
                            	<span style="float:left;">&laquo;Prev</span>
                                </a>
                            <?php }else{?>
                            <a href="<?php echo '?key='.$_GET['key'].'&page=1';?>">
                            <span style="float:left;">&laquo;Prev</span>
                            </a>
                            <?php }?>
                        		
                        <?php }?>
                       	<?php 
							$page=$pages/10;
							$pageginate=(is_int($page))?$page:(int)$page+1;
							$v=$pageginate;
							for(;$q<=$pageginate;$q++)
							{
								echo '<span ';
								echo ($_GET['page']==$q)?' style="float:left; background:#81d4fa;" ':'style="float:left;" ';
								echo  ' onclick="header(\'?key='.$_GET['key'].'&page='.$q.'\')">'.$q.'</span>';
							}
							
						?>
                       
                        <?php 
							if(isset($_GET['detail']))
							{
						?>
                        
                        <?php	
							}
							else
							{
						?>	
                        	<?php 
								if(isset($_GET['page']))
								{
							?>
                            	<a href="<?php echo '?key='.$_GET['key'].'&page=';?><?php echo ($_GET['page']>=$q-1)?$_GET['page']:$_GET['page']+1;?>">
                            	<span>Next &raquo;<?php //echo $q;?></span>
                           		</a>
                           <?php
								}
								else
								{
							?>
                            	<a href="<?php echo '?key='.$_GET['key'].'&page=1';?>">
                            	<span>Next &raquo;</span>
                                </a>
                            <?php } ?>
						<?php	
							
                            }
						?>
						
                	</div>
                </div>
        </div>   
    </div><!--close body-->
    
    <div id="footer">
    	<div id="top">
        	 <span> Copyright &copy; 2014 CMU. All right reserved </span>
        </div>
    </div><!--close footer-->
</div><!--close web_content-->
</body>
</html>
