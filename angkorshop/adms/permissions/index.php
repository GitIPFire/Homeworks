<?php
	define('PAGE','Permissions');
	define('INDEX','7');
	define('SUBPAGE','Set Permission');
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
?>

<?php
	if(isset($_POST['upd']))
	{		
		$sql="DELETE FROM "._T_PERMISSIONS." WHERE adminCode='".$_GET['id']."'";	
		$obj->executeNoneQuery($sql);			
		$menuCode=$obj->fetchArray("SELECT * FROM "._T_MENU);
		if(!empty($menuCode)){
			while($menu_row=mysql_fetch_array($menuCode))
			{
				if(isset($_POST[$menu_row[1]]))
				{
						$sql="INSERT INTO "._T_PERMISSIONS." VALUES('','".$_GET['id']."','".$menu_row[1]."')";	
						$obj->executeNoneQuery($sql);
				}
			}
		}
		header('location:'.PATHS.PERMISSIONS);
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
                        <table border="0" cellspacing="5" width="100%">
                            <tr>
                                <th height="30" width="60" align="center">Nº</th>
                                <th align="left">Menu Caption</th>
                                <th align="left">Permission</th>
                            </tr>
                        <?php 
                            $menu=mysql_query("SELECT * FROM tblmenu");
                                if(!empty($menu)){
                                    $i=1;
                                    while($menu_row=mysql_fetch_array($menu))
                                    {
                                        //$i++;
                                        $user_permission=mysql_query("SELECT * FROM tblpermise WHERE adminCode='".$_GET['id']."' AND menuCode='".$menu_row[1]."'");
                                        if(!empty($user_permission))
                                        {
                                            $user_permission_row=mysql_fetch_array($user_permission);
                                        }
                    
                        ?>
                                    <tr title="<?php echo $menu_row[2];?>">
                                        <td width="10%" height="29" align="center"><?php echo $i++; ?></td>
                                        <td width="33%" align="left"><?php echo ucfirst($menu_row[2]); ?></td>
                                        <td width="62%" align="left"><input type="checkbox" name="<?php echo $menu_row[1];?>" <?php echo ($user_permission_row[2]==''?'':'checked');?> ></td>
                                    </tr>
                        <?php
                                    } // end while
                                }  // end if
                      ?>
                            <tr>
                            	<td></td>
                                <td colspan="2" align="center">
                                   &nbsp;
                                </td>
                            </tr>
                            <tr>
                            	<td></td>
                                <td colspan="2" align="center">
                                    <input type="submit" name="upd" class="button" value="Update" <?php echo($_GET['id']==NULL)?'disabled="disabled"':'';?>/>&nbsp;&nbsp;
                                    <input type="reset" value="Cancel" class="button" />
                                </td>
                            </tr>
                        </table>
                    
                    </form>                
                </div><!--right-top-->
                
                <div class="ri right-top" id="right___">
                	
                	<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" class="tbl">
                    	<tr align="left" style="background: #FFF; color:#333; font-weight:bold;" height="30">
                        	<td width="10%">N<sup>&deg;</sup></td>
                            <td width="15%">Username</td>
                            <td width="55%">Permissions</td>
                            <td width="20%" align="center">Action</td>
                        </tr>
                        
                        <?php
                        	$data=$obj->fetchArray('SELECT * FROM '._T_USERS);
							$index=1;
							while($rs=mysql_fetch_array($data))
							{
								echo '<tr height="30">'.
										'<td>'.$index.'</td>'.
										'<td>'.$rs[4].'</td>'.
										'<td>';
										$menu=$obj->fetchArray('SELECT * FROM '._T_MENU);
										if(!empty($menu))
										{
											while($recmenu=mysql_fetch_array($menu))
											{
												$permise=$obj->fetchArray('SELECT * FROM '._T_PERMISSIONS.' WHERE menuCode='.$recmenu[1].' AND adminCode='.$rs[1]);
												if(!empty($permise))
												{
													$recperm=mysql_fetch_array($permise);
												}
												echo '<input type="checkbox"';
												echo ($recperm['2']==''?'':'checked').' title="'.$recmenu[2].'"/ disabled="disabled">';
											}
										}
								echo	'</td>';		
								echo	'<td align="center"><a href="?action=edit&id='.($rs[1]).'"><img src="'.PATHS.IMAGES.COMMONS.LST.EDIT.'" /></a> | <img src="'.PATHS.IMAGES.COMMONS.LST.KILL.'" /></td>'.
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
