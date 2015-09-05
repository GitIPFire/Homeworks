<?php
	define('PAGE','Settings');
	define('INDEX','8');
	define('SUBPAGE','Help');
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
?>

    <?php
    	include PATHS.'includes/header.php';
	?>	
    <div class="main" style="margin-top:4em;" id="main">
    	<div class="container">
        	<?php 
				include PATHS.'includes/left.php';
			?>
            <div class="right-container" id="right">
            	<div class="tuggle" style="padding:1em 0 0 0; font-weight:bold; text-align:center;"><?php echo PAGE.' > '.SUBPAGE;?></div>
                <div class="right-top" id="right_top">
                	     
                </div><!--right-top-->
                
                <div class="ri right-top" id="right___">
                	<table border="0" width="90%" align="center">
                    	<tr>
                        	<td>
                            	<div class="field" style="padding:4em 2em 8em 2em; opacity:0.2;">
                                	<p style="color:#000; auto 0 auto;">
                                    	Oop! Sorry, Page dnder construction.<br />
                                        This page is underconstruction. please check back our webpage.<br />		                                        Thank you!
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>                	
                </div>
            </div><!-- right-container-->
        </div><!--container-->
    </div><!--main-->
    	
   <?php
    	include PATHS.'includes/footer.php';
	?>
