<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Angkor Fashion Shop- Welcome to our shop.</title>
<link rel="stylesheet" type="text/css" href="<?php echo PATH.CSS.RESPONSE.RESPONSE_STYLE;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo PATH.CSS.STYLE;?>" />
<script type="text/javascript" src="<?php echo PATH.SCRIPT;?>js.js"></script>
</head>
<body>
	<div class="head">
		<div class="container">
        	<div class="head-top">
            	<div class="banner_img">
                	<a href="<?php echo SITE;?>" style="border:none; outline:none; text-decoration:none;">
            			<img src="<?php echo PATH.IMAGES.COMMONS;?>logo.png" width="" class="img-responsive" alt=""/>
                    </a>
                </div>
                <div class="box">
                    <select name="category">
                        <?php
                        	$data=$obj->fetchArray('SELECT * FROM '._T_CATEGORY.' WHERE status=1');
							while($rs=mysql_fetch_array($data))
							{
								echo '<option value="'.$rs[1].'">'.$rs[2].'</option>';
							}
						?>
                    </select>
                </div>
            </div>
        </div>
	</div><!-- heade-->