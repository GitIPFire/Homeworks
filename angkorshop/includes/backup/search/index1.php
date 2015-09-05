<?php 

include("administrator/configure/classes/class/class.php");
define ('WEB_DIR',"../");
$_SESSION['menuId']=1;
//if($_GET['lan']=='kh'){
//	$obj->languages($_GET['lan']);	
//}else if($_GET['lan']=='en'){
//	$obj->languages($_GET['lan']);	
//}
//else{
//	$obj->languages($_SESSION['lan']);
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cambodian Mekong University</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<link href="../include/slid_show_images/styles/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../include/slid_show_images/scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../include/slid_show_images/scripts/jquery-slidedeck.pack.lite.js"></script>
<script type="text/javascript">$('.slidedeck').slidedeck();</script>
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

<body onload="MM_preloadImages('commons/images/menu/home_active.png','commons/images/menu/study-at-mekong-active.png','commons/images/menu/campus-life-active.png','commons/images/menu/enrolment-active.png','commons/images/menu/about-mekong-active.png')">
	
		<!--body header-->
        <?php include("../include/web_body/header_body_campus_life.php"); ?>

			<div id="search_page">ddddDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD</div>

	
    
    <script type="../include/slid_show_images/text/javascript">$('.slidedeck').slidedeck();</script>
		
      </body>
</html>
