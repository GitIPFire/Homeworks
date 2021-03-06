<?php
	define('PAGE','Users');
	define('INDEX','6');
	define('SUBPAGE','Add New User');
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
?>

<?php
	if(isset($_POST['save']))
	{
		$status=(isset($_POST['status']))?'1':'0';
		$ind=$obj->getData('SELECT * FROM '._T_USERS.' ORDER BY id DESC',0);
		
			$sql="INSERT INTO "._T_USERS."(id,adminCode,firstName,lastName,username,password,adminTypeCode,status)".
			" VALUES('".
				($ind+1)."','".
				$_POST['code']."','".
				$_POST['fname']."','".
				$_POST['lname']."','".
				$_POST['username']."','".
				md5($_POST['pass'])."','".
				$_POST['adminType']."','".
				$status."'".
			")";	
	
		$obj->executeNoneQuery($sql);	
		header('location:'.PATHS.USERS);	
	}
	else if(isset($_POST['edit']))
	{
		$status=(isset($_POST['status']))?'1':'0';
			$sql="UPDATE "._T_USERS.
			" SET adminCode='".$_POST['code'].
			"', firstName='".$_POST['fname'].
			"', lastName='".$_POST['lname'].
			"', username='".$_POST['username'].
			"', password='".md5($_POST['pass']).
			"', adminTypeCode='".$_POST['adminType'].
			"', status='".$status."'".
			" WHERE MD5(adminCode)='".$_GET['id']."'";	
	
		$obj->executeNoneQuery($sql);
		header('location:'.PATHS.USERS);
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
                                <td width="15%">User Code:</td>
                                <td width="45%">
								<input type="text" class="field" placeholder="Enter User Code" name="code" value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",1);?>"/>
								</td>
                                <td>*user code must less than 11 characters.</td>
                            </tr>
                            <tr>
                                <td width="15%">First Name:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Enter First Name" name="fname" value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",2);?>"/></td>
                                <td>*First name must less than 50 characters.</td>
                            </tr>
                            <tr>
                                <td width="15%">Last Name:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Enter Last Name" name="lname" value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",3);?>"/></td>
                                <td>*Last name must less than 50 characters.</td>
                            </tr>
                            <tr>
                                <td width="15%">Username:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Username" name="username" value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",4);?>"/></td>
                                <td>*Unique Account</td>
                            </tr>
                            <tr>
                                <td width="15%">Password:</td>
                                <td width="45%"><input type="password" class="field" placeholder="Password" name="pass" value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",5);?>" onclick="clearText(this)" /></td>
                                <td>Clear the box before typing.</td>
                            </tr>
                            <tr>
                                <td width="15%">User Type:</td>
                                <td width="45%">
                                	<div class="field">
                                    	<select style=" width:100%; border:none; outline:none; height:1.8em" name="adminType">
                                        	<option value="<?php echo $obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",1);?>" disabled="disabled"><?php echo $obj->getData("SELECT * FROM "._T_ADMIN." WHERE adminCode='".$obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",1)."'",2);?></option>
                                            <?php
                                            	$cate=$obj->fetchArray('SELECT * FROM '._T_ADMIN.' WHERE status=1');
												while($rs=mysql_fetch_array($cate))
												{
													echo '<option value="'.$rs[1].'">'.$rs[2].'</option>';
												}
											?>
                                    	</select>
                                    </div>                                	
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td>Status:</td>
                                <td>
                                	<div>
                                    	 <?php $s=$obj->getData("SELECT * FROM "._T_USERS." WHERE MD5(adminCode)='".$_GET['id']."'",7)?>
                                    	<input type="checkbox" style="margin-top:0.4em;" name="status" <?php echo($s=='1')?' checked':'';?> />
                                       
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                            	<td></td>
                                <td>
                                	<input type="submit" value="Save" class="button" name="save" />
                                    <input type="submit" value="Update" class="button" name="edit" />
                                    <input type="reset" value="Cancel" class="button" />
                                </td>
                                <td></td>
                            </tr>
                        </table>
                   	</form>                
                </div><!--right-top-->
                
                <div class="ri right-top" id="right___">
                	
                	<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" class="tbl">
                    	<tr align="left" style="background: #FFF; color:#333; font-weight:bold;" height="30">
                        	<td width="10%">N<sup>&deg;</sup></td>
                            <td width="15%">User Code</td>
                            <td width="45%">Username</td>
                            <td width="10%" align="center">Status</td>
                            <td width="20%" align="center">Action</td>
                        </tr>
                        
                        <?php
                        	$data=$obj->fetchArray('SELECT * FROM '._T_USERS.' WHERE adminTypeCode=1');
							$index=1;
							while($rs=mysql_fetch_array($data))
							{
								echo '<tr height="25">'.
										'<td>'.$index.'</td>'.
										'<td>'.$rs[1].'</td>'.
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
