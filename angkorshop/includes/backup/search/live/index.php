<?php  


include("../administrator/configure/classes/class/class.php");
include("xmlwriter.php");


//if($_GET['lan']=='kh'){
//	$obj->languages($_GET['lan']);	
//}else if($_GET['lan']=='en'){
//	$obj->languages($_GET['lan']);	
//}
if(!isset($_GET['lan']))
{
	$obj->languages('en');
}
else
{
	$obj->languages($_GET['lan']);
}

if(isset($_GET['ev_id'])){
	
	$_SESSION['ev_id'] = $_GET['ev_id'];
	
	echo $_SESSION['fac_id'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambodian Mekong University</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('commons/images/menu/home_active.png','commons/images/menu/study-at-mekong-active.png','commons/images/menu/campus-life-active.png','commons/images/menu/enrolment-active.png','commons/images/menu/about-mekong-active.png','../commons/images/menu/about-mekong-active.png','../commons/images/menu/study-at-mekong-active.png')">
	<div class="all_body">
		<!--body header-->
        <div class="header_conn">
        	<div class="header_body">
           	  <div class="header_body_zero">
               	<div class="body_logo"><img src="../commons/images/logo/logo-mekong.png" width="84" height="128" alt="Cambodian Mekong University Logo" longdesc="http://www.mekong.edu.kh" />
                </div>
                <div class="body_logo_left">
                	<div class="logo_text">
                    	<div class="logo_text_text">
                       	  <div class="row_for_font californian_fb">Cambodian Mekong University</div>
                            <div class="row_for_font1 californian_fb_meko">is the university that cares for the value of education</div>

                      </div>
                      <div class="body_search_all">
                      	<div class="language_body">
                      	 <table width="100%" border="0" cellspacing="1">
                      	    <tr>
                      	      <td width="78%" align="right" class="language_ yellow">Language</td>
                      	      <td width="11%"><a href="?lan=en"><img src="../commons/images/logo/en-flage.png" width="20" height="13" alt="English" /></a></td>
                      	      <td width="11%"><a href="?lan=kh"><img src="../commons/images/logo/kh-flage.png" width="20" height="13" alt="Khmer" /></a></td>
                   	        </tr>
                   	      </table>
                      	</div>
                        <div class="language_body">
                          <table width="100%" border="0" cellspacing="1">
                            <tr class="map" align="center">
                              <td ><a href="../contact_us/">Contact&nbsp;us</a></td>
                              <td align="right"><a href="https://mail.google.com/a/mekong.edu.kh/&ss=1&ltmpl=default&ltmplcache=2&emr=1" TARGET="_blank">E-mail</a></td>

                              <td ><a href="../library/">Library</a></td>
                              <td class="map_active"><a href="../site_map/">Site&nbsp;Map</a></td>
                            </tr>
                          </table>
                        </div>
                        <div class="language_bodysr">
                        	<div class="language_body_srh">
                            	<div class="language_body_srh_in">
                            	<input type="text" id="text" name="text_name" class="in_text_srch"/>
                             	</div>  
                             </div>
                            <div class="bottom_search_click"><img src="../commons/images/search/bottom-search.png" width="34" height="30" alt="Search" /></div>
                        </div>
                      </div>
                    </div>
                    <div class="in_header_under_text">
                    
                   	  <div class="menu_body"><a href="../"><img src="../commons/images/menu/home-active.png" width="36" height="29" id="Image5" /></a></div>
                      <div class="line_be_menu"></div>
                       <div class="menu_body"><a href="../study_mekong/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','../commons/images/menu/study-at-mekong-active.png',1)"><img src="../commons/images/menu/study_at_mekong.png" width="112" height="38" id="Image11" /></a></div>
                       <div class="line_be_menu"></div>
                        <div class="menu_body"><a href="../campus_life/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','../commons/images/menu/campus-life-active.png',1)"><img src="../commons/images/menu/campus-life.png" width="78" height="38" id="Image7" /></a></div>
                       <div class="line_be_menu"></div>
                        <div class="menu_body"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','../commons/images/menu/enrolment-active.png',1)"><img src="../commons/images/menu/enrolment.png" width="80" height="38" id="Image8" /></a></div>
                       <div class="line_be_menu"></div>
                        <div class="menu_body"><a href="../about_mekong/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','../commons/images/menu/about-mekong-active.png',1)"><img src="../commons/images/menu/about-mekong.png" width="99" height="38" id="Image12" /></a></div><?php  date('Y-m-d'); ?>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!--end body header--> 
        <!--body-->  
		<div class="body_conn">
        	<div class="lilk_index">
        	  <table width="163" border="0" cellspacing="1">
        	    <tr>
        	      <td width="11"><img src="../commons/images/menu/arrow-link.png" width="11" height="9" /></td>
        	      <td width="25" class="language_"><a href="../">Home</a></td>
                   <td width="11"><img src="../commons/images/menu/arrow-link.png" width="11" height="9" /></td>
        	      <td width="103" class="language_">Last new events</td>
      	      </tr>
      	    </table>
            <div class="body_alls_in">
            <div class="body_last_newevents_er">
                    	
							<div class="text_new_events_nomarl text_neevents1"><a href="../latest_new/">News</a></div>
                            <div class="text_new_events text_neevents1_active">Events</div>
                      		<div class="text_new_events_nomarl text_neevents1"><a href="../promo_school/">Promotion</a></div>
                    </div>
                <div class="body_padding">
                	
                    <div class="body_last_newevents">
                    	<div class="body_news_left">
                        	<div class="ainformation_about font_information_about">
                            	Information about
                            </div>
                        	<div class="information_about_table">
                            	<table width="100%" border="0" cellspacing="5" cellpadding="0" bgcolor="#f4f4f4">
                                  <tr>
                                    <td width="91%" class="font_events_red">Search by</td>
                                    <td width="9%" class="font_events_red">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td class="language_news">Keys word:</td>
                                    <td class="language_news">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><label for="textfield"></label>
                                  

                                   <script>
										function showResult(str) {
										  if (str.length==0) {
											document.getElementById("livesearch").innerHTML="";
											document.getElementById("livesearch").style.border="0px";
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
											  document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
											  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
											}
										  }
										  xmlhttp.open("GET","livesearch.php?q="+str,true);
										  xmlhttp.send();
										}
									</script>

                                    <form action="" method="get">
                                        <input type="text" name="txtsearch" onkeyup="showResult(this.value)" style="width:99%;" />
       									<div id="livesearch"></div>
                                    </form>
                                                                        	
                                    </td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="right"><!--<img src="../commons/images/body/go.png" width="37" height="22" alt="go" />--></td>
                                    <td align="right">&nbsp;</td>
                                  </tr>
                                </table>

                            </div>            	
                        </div>
                      <div class="body_right_for_events_right">
                        	<div class="slide_events"><img src="../commons/images/body/slide-events.png" width="720" height="201" /></div>
                            &nbsp;
							<?php if($_GET['action']=="view_new_events"){?>
                           
                            <div class="rows_under_the_slide_height_auto">
                            
                                   <?php $sql=$obj->returnArray("*",TABLE_EVENTS," where ev_id='".$_GET['ev_id']."'");
	 
								  if(!empty($sql)){
									  while($arr=mysql_fetch_array($sql)){
									  	echo '<div style="color:red">'.$arr['ev_name_en']."</div><br>";
										echo '<div style="width:20%; float:left;"><img src="../images/events/'.$arr['images'].'" width="110px"></div>';
										
											echo '<div class="events_st">'.$arr['ev_detail_en'].'</div>';
										
									  }
								  }
								
		  ?>  
                                &nbsp;
                            </div>
                            <?php }?>
   
<?php if(!isset($_GET['eventid'])){ ?>
                            <div class="rows_under_the_slide">
                            	<table width="100%" border="0" cellspacing="6" cellpadding="0">
                                      
                                      <tr>
                                        <td class="font_events_red">Keys Events</td>
                                      </tr>
                                    </table>

                   		</div>
                        <div class="row_under_eventss">
                       	  <div class="in_row_under_eventss">
                                	<table width="100%" border="0" cellspacing="4">
                                      <tr>
                                        <td width="21%">Date</td>
                                        <td width="25%">Time</td>
                                        <td width="54%">Events</td>
                                      </tr>
                                    </table>

                                </div>
                                
                        </div>

      <?php
							 
	 $sql=$obj->returnArray("*",TABLE_EVENTS," where status='1' ORDER BY ev_id DESC");
	 
	  if(!empty($sql)){
	  while($arr=mysql_fetch_array($sql)){
		 // echo $str;
	  
        ?>  

                            <div class="in_row_under_eventss1">
                            

                            	<table width="100%" border="0" cellspacing="6" cellpadding="0">
                                  <tr>
                                    <td width="21%" valign="top"><?php echo $arr['datetime']; ?></td>
                                    <td width="25%" valign="top"><?php echo date('H:i:s',$arr['datetime']); ?> </td>
                                    <td width="12%"><div class="row_for_pic"><a href="#"><img src="../images/events/<?php echo $arr['images']; ?>" width="78" height="78" alt="news" /></a></div></td>
                                    <td width="42%"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                                      <tr>
                                        <td class="font_events_red"><a href="?action=view_new_events&ev_id=<?php echo $arr['ev_id']; ?>"><?php echo $arr['ev_name_'.$_SESSION['lan']]; ?></a></td>
                                      </tr>
                                      <tr>
                                        <td valign="top" class="language_news"><?php echo substr($arr['ev_detail_'.$_SESSION['lan']], 0, 100) .((strlen($arr['ev_detail_'.$_SESSION['lan']]) > 100) ? '...' : ''); ?></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table>
                                </div>
                        
                        
                        <?php  
									  }
							  }
						
						?>
 <?php } else { ?>
           
           <div class="rows_under_the_slide_height_auto">
                            
                                   <?php $sql=$obj->returnArray("*",TABLE_EVENTS," where ev_id='".$_GET['eventid']."'");
	 
								  if(!empty($sql)){
									  while($arr=mysql_fetch_array($sql)){
									  	echo '<div style="color:red">'.$arr['ev_name_en']."</div><br>";
										echo '<div style="width:20%; float:left;"><img src="../images/events/'.$arr['images'].'" width="110px"></div>';
										
											echo '<div style="width:80%; float:left;">'.$arr['ev_detail_en'].'</div>';
										
									  }
								  }
								
		  ?>  
                                &nbsp;
                            </div>
                
 <?php }?>                     
                        
                        <div class="pagenations">
                        	<table width="100%" border="0" cellspacing="2" cellpadding="0">
                              <tr>
                                <td align="right"><!--<img src="../commons/images/body/pagenations.png" width="279" height="19" />--></td>
                              </tr>
                            </table>

                        </div>
                      </div>
                        
                        
                    </div>
                </div>
            </div>
       </div>
            
      </div>
        <!--end body-->
        <!--body footer--> 
         <?php include("../include/web_body/footer_body.php"); ?>
	</div> 
      </body>
</html>
