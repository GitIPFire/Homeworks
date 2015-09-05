<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration Console</title>
<link rel="stylesheet" type="text/css" href="<?php echo PATHS.CSS;?>styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PATHS.CSS;?>responsive.css" />
<script type="text/javascript" src="<?php echo PATHS.SCRIPT;?>jquery.js"></script>
<script type="text/javascript" src="<?php echo PATHS.SCRIPT;?>script.js"></script>
<script type="text/javascript" src="<?php echo PATHS.SCRIPT;?>ajax.js"></script>
<script>
	

	//$(document).ready(function(){
//		$("#tug").click(function(){
//			$("#left").animate({ 
//			  	opacity:'0.5',
//			  	width:'25px'
//    		});
//		}); 
//	});
</script>
<style>
	.popup {
	  background-size:100%;
      background:  url(../images/commons/header.png) repeat-x; 
      height: auto; width: 80%; 
	  box-shadow: 0 0 4px #666;
     /* position: absolute; visibility: hidden; */
	 position: fixed; visibility:hidden;
      font-size: small; text-align: justify; 
      padding: 5px; overflow: auto; 
      z-index: 10001; 
	  border-radius:5px;
}
.popup_bg {
      /*position: absolute; */
	  position:fixed;
      visibility: hidden; 
      height: 100%; width: 100%; 
      left: 0px; top: 0px; 
      filter: alpha(opacity=90); /* for IE */ 
      opacity: 0.9; /* CSS3 standard */ 
      background-color: #999; 
      z-index: 10000; 
}
.close_button {
      font-family: Verdana, Geneva, sans-serif;
	  cursor:pointer;
      font-size: small; font-weight: bold; 
      float: right; color: #666; 
      display: block; text-decoration: none; 
      padding: 0px 3px 0px 3px; 
}
	/*_______*/
</style>
</style>
</head>

<body onload="alertSize()" onresize="alertSize()">
	<div class="header" style="position:fixed; background: url(<?php echo PATHS;?>images/commons/back.jpg);">
    	<div class="container">
        	<div class="header-bottom">
            	<div class="logo">
                	<header>
                    	<section style="color:#000;">CONTROL PANEL</section>
                    </header>
                </div>
                <div class="search">
                	<form>
                    	<input type="text" placeholder="Search..." />
                    </form>
                </div>
                <div class="anav"></div>
            </div><!--header-bottom-->
        </div><!--container-->
    </div><!--header-->