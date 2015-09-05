<?php
include("../administrator/configure/classes/class/class.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMU search</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<script src="js/js.js"></script>
</head>
<body>
<div id="web_content">
	<div id="header">
    	<div id="top">
        	<img src="images/common/title.png"  />
            <span> Home </span>
        </div>
    </div><!--close header-->
    
	<div id="body">
    	<div id="top">
    		<div id="search">
            <form method="get" action="?key">
        			<input type="text" name="key" value="<?php echo $_GET['key']?>" />
            </form>
       		</div>
            <div id="menu">
            
            	<div style="border-bottom:solid 1px #666;" class="top">
                	<span style="margin-left:10px;"> Total : 0 result found. </span>
                    <span style="margin-left:20px;">
                    	<b> return: 
                    	 <select style="width:50px;">
                    		<option> 1 </option>
                            <option> 3 </option>
                            <option> 2 </option>
                    	 </select> 
                         </b>
                    </span>
                    <span class="view" style="background:url(images/common/type.png) -33px no-repeat;">
                    	  
                    </span>
                    <span class="view" style="background:url(images/common/type.png) no-repeat;"> 
                    	 
                    </span>
                </div>
                <?php ?>
                <?php /*?><div class="top">
                	<ul>
                    	<li> Index </li>
                        <li> Description </li>
                    </ul> 
                </div> <?php */?>   
            </div><!--close menu-->
            
            <div id="content">
            <?php
				if(isset($_GET['detail'])){
					switch($_GET['tbl'])
					{
						case "1":
							define('TBL','t_about_mekong');
							define('CRIT','id');
							//define('DET','des_en');
							define('TITLE','des_en');
							break;
						case "5":
							define('TBL','t_news');
							define('CRIT','ne_id');
							define('DET','ne_detail_en');
							break;
						case "4":
							define('TBL','t_events');
							define('CRIT','ev_id');
							define('DET','ev_detail_en');
							break;
						case "3":
							define('TBL','t_study_at_mekong');
							define('CRIT','id');
							define('DET','des_en');
							break;
						case "2":
							define('TBL','t_sub_front_detail');
							define('CRIT','sub_fron_id');
							define('DET','dess_en');
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
				else{
					$t_about_mekong=mysql_query("select * from t_about_mekong where des_en like '%".$_GET['key']."%'");
				echo'<table border="0" cellpadding="0" cellspacing="0">';
				echo '<tr>'; 
				$i=0;
				while($get=mysql_fetch_array($t_about_mekong)){
				
					echo '<td>';
					echo '<div class="show ';
					echo ($i%2!=0)?'border">':'">';
					echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl=1&detail='.$get['0'].'\')" style="cursor:pointer;"> '.$get['des_en'].' </strong><br /> 
                            		<span>'.$get['dess_en'].'  
                                    </span>
                                </div></td>';
								$i++;
								if($i%2==0){
								echo"</tr><tr>";
								}
				}
				
				$t_sub_front_detail=mysql_query("select * from t_sub_front_detail where des_en like '%".$_GET['key']."%'");
				while($get=mysql_fetch_array($t_sub_front_detail)){
				
					echo '<td>';
					echo '<div class="show ';
					echo ($i%2!=0)?'border">':'">';
					echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl=2&detail='.$get['0'].'\')" style="cursor:pointer;"> '.substr ($get['des_en'],0,100).' </strong><br /> 
                            		<span>'.$get['dess_en'].'  
                                    </span>
                                </div></td>';
								$i++;
								if($i%2==0){
								echo"</tr><tr>";
								}
				}
				
				$t_news=mysql_query("select * from t_news where des_en like '%".$_GET['key']."%'");
				while($get=mysql_fetch_array($t_news)){
				
					echo '<td>';
					echo '<div class="show ';
					echo ($i%2!=0)?'border">':'">';
					echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl=3&detail='.$get['0'].'\')" style="cursor:pointer;"> '.$get['des_en'].' </strong><br /> 
                            		<span>'.$get['dess_en'].'
                                    </span>
                                </div></td>';
								$i++;
								if($i%2==0){
								echo"</tr><tr>";
								}
				}
				
				
				
				$t_events=mysql_query("select * from t_events where ev_detail_en like '%".$_GET['key']."%'");
				while($get=mysql_fetch_array($t_events)){
				
					echo '<td>';
					echo '<div class="show ';
					echo ($i%2!=0)?'border">':'">';
					echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl=4&detail='.$get['0'].'\')" style="cursor:pointer;"> '.substr($get['ev_name_en'],0,100).' </strong><br /> 
                            		<span>'.$get['ev_detail_en'].'
                                    </span>
                                </div></td>';
								$i++;
								if($i%2==0){
								echo"</tr><tr>";
								}
				}
				
				
				
				
				$t_study_at_mekong=mysql_query("select * from t_study_at_mekong where des_en like '%".$_GET['key']."%'");
				while($get=mysql_fetch_array($t_study_at_mekong)){
				
					echo '<td>';
					echo '<div class="show ';
					echo ($i%2!=0)?'border">':'">';
					echo '<strong onclick="header(\'?key='.$_GET['key'].'&tbl=2&detail='.$get['0'].'\')" style="cursor:pointer;"> '.$get['des_en'].' </strong><br /> 
                            		<span>'.$get['dess_en'].'
                                    </span>
                                </div></td>';
								$i++;
								if($i%2==0){
								echo"</tr><tr>";
								}
				}
				echo "</table></tr>";	
				}
			?>
            <?php 
				
				
				
				
				
				
				
			?>
                	          
                		
                </div> 
                <div id="pag">
                	<div ="span">
                        <span> &laquo;Prev </span> 
                        <span> 3 </span>
                        <span> 2 </span>
                        <span> 1 </span>
                        <span> Next&raquo; </span>
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
