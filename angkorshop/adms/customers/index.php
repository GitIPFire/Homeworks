<?php
	define('PAGE','Customers');
	define('INDEX','5');
	define('SUBPAGE','Add New Customer');
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
?>
	<?php
    
	if(isset($_POST['edit']))
	{
		$status=(isset($_POST['status']))?'1':'0';
		
		$sql="UPDATE "._T_CUSTOMERS.
		" SET status='".$status."'".
		" WHERE MD5(userCode)='".$_GET['id']."'";	
		
		$obj->executeNoneQuery($sql);
		header('location:'.PATHS.CUSTOMERS);
	}
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
                	<form method="post" enctype="multipart/form-data">
                        <table border="0" cellspacing="10" width="100%">
                            <tr>
                                <td width="15%">Full Name:</td>
                                <td width="45%">
								<input type="text" class="field" disabled="disabled" placeholder="Full name" name="code" value="<?php echo $obj->getData("SELECT * FROM "._T_CUSTOMERS." WHERE MD5(userCode)='".$_GET['id']."'",2).''.$obj->getData("SELECT * FROM "._T_CUSTOMERS." WHERE MD5(userCode)='".$_GET['id']."'",3);?>"/>
								</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="15%">E-mail:</td>
                                <td width="45%"><input type="text" class="field"  disabled="disabled" placeholder="E-mail" name="name" value="<?php echo $obj->getData("SELECT * FROM "._T_CUSTOMERS." WHERE MD5(userCode)='".$_GET['id']."'",4);?>"/></td>
                                <td></td>
                            </tr>
                           
                            <tr>
                            	<td>Status:</td>
                                <td>
                                	<div>
                                    	 <?php $s=$obj->getData("SELECT * FROM "._T_CUSTOMERS." WHERE MD5(userCode)='".$_GET['id']."'",7)?>
                                    	<input type="checkbox" style="margin-top:0.4em;" name="status" <?php echo($s=='1')?' checked':'';?> />
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td></td>
                                <td>
                                    <input type="submit" value="Update" class="button" name="edit" />
                                    <input type="reset" value="Cancel" class="button" />
                                </td>
                                <td></td>
                            </tr>
                        </table>
                   	</form>                
                </div><!--right-top-->
                
                <div class="right-top" id="right___">
                	
                	<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" class="tbl">
                    	<tr align="left" style="background: #FFF; color:#333; font-weight:bold;" height="30">
                        	<td width="10%">N<sup>&deg;</sup></td>
                            <td width="15%">Full name</td>
                            <td width="45%">E-mail</td>
                            <td width="10%" align="center">Status</td>
                            <td width="20%" align="center">Action</td>
                        </tr>
                        
                        <?php
                        	$data=$obj->fetchArray('SELECT * FROM '._T_CUSTOMERS);
							$index=1;
							while($rs=mysql_fetch_array($data))
							{
								echo '<tr height="25">'.
										'<td>'.$index.'</td>'.
										'<td>'.$rs[2].' '.$rs[3].'</td>'.
										'<td>'.$rs[4].'</td>'.
										'<td align="center">';
								echo		($rs['status']==1)?'<img src="'.PATHS.IMAGES.COMMONS.LST.ON.'" />':'<img src="'.PATHS.IMAGES.COMMONS.LST.OFF.'" />';
								echo	'</td>'.
										'<td align="center"><a href="?action=edit&id='.md5($rs[1]).'"><img src="'.PATHS.IMAGES.COMMONS.LST.EDIT.'"/></a> | <img src="'.PATHS.IMAGES.COMMONS.LST.KILL.'" /></td>'.
									 '</tr>';
								$index++;
							}
						?>
                        
                        
                    </table>
                </div>
            </div><!-- right-container-->
        </div><!--container-->
    </div><!--main-->
    	
   <?php
    	include PATHS.'includes/footer.php';
	?>
