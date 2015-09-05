<?php
	define('PAGE','Products');
	define('INDEX','1');
	define('SUBPAGE','Add New Product');
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
?>

<?php
	if(isset($_POST['save']))
	{
		$status=(isset($_POST['status']))?'1':'0';
		$ind=$obj->getData('SELECT * FROM '._T_PRODUCT.' ORDER BY id DESC',0);
		if($_FILES['img']['name']!="")
		{
			$sql="INSERT INTO "._T_PRODUCT."(id,proCode,proName,price,discount,retailPrice,picture,contact,cateCode,status)".
			" VALUES('".
				($ind+1)."','".
				$_POST['code']."','".
				$_POST['name']."','".
				$_POST['price']."','".
				$_POST['discount']."','".
				$_POST['PAD']."','".
				$_POST['code'].$_FILES['img']['name']."','".
				$_POST['contact']."','".
				$_POST['category']."','".
				$status."'".
			")";	
			$obj->uploadFile('img',PATHS.UPLOAD,1024*300);
		}
		else
		{
			$sql="INSERT INTO "._T_PRODUCT."(id,proCode,proName,price,discount,retailPrice,contact,cateCode,status)".
			" VALUES('".
				($ind+1)."','".
				$_POST['code']."','".
				$_POST['name']."','".
				$_POST['price']."','".
				$_POST['discount']."','".
				$_POST['PAD']."','".
				$_POST['contact']."','".
				$_POST['category']."','".
				$status."'".
			")";	
		}
		$obj->executeNoneQuery($sql);	
		header('location:'.PATHS.PRODUCTS);	
	}
	else if(isset($_POST['edit']))
	{
		$status=(isset($_POST['status']))?'1':'0';
		if($_FILES['img']['name']!="")
		{
			$sql="UPDATE "._T_PRODUCT.
			" SET proCode='".$_POST['code'].
			"', proName='".$_POST['name'].
			"', price='".$_POST['price'].
			"', discount='".$_POST['discount'].
			"', retailPrice='".$_POST['PAD'].
			"', picture='".	$_POST['code'].$_FILES['img']['name'].
			"', contact='".$_POST['contact'].
			"', cateCode='".$_POST['category'].
			"', status='".$status."'".
			" WHERE MD5(proCode)='".$_GET['id']."'";	
			$obj->uploadFile('img',PATHS.UPLOAD,1024*300);
		}
		else
		{
			$sql="UPDATE "._T_PRODUCT.
			" SET proCode='".$_POST['code'].
			"', proName='".$_POST['name'].
			"', price='".$_POST['price'].
			"', discount='".$_POST['discount'].
			"', retailPrice='".$_POST['PAD'].
			"', contact='".$_POST['contact'].
			"', cateCode='".$_POST['category'].
			"', status='".$status."'".
			" WHERE MD5(proCode)='".$_GET['id']."'";	
		}
		$obj->executeNoneQuery($sql);
		header('location:'.PATHS.PRODUCTS);
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
                                <td width="15%">Priduct Code:</td>
                                <td width="45%">
								<input type="text" class="field" placeholder="Enter Product's Code" name="code" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",1);?>"/>
								</td>
                                <td>*You must enter product code with valid numeric.</td>
                            </tr>
                            <tr>
                                <td width="15%">Priduct Name:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Enter Product's Name" name="name" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",2);?>"/></td>
                                <td>*Product name must less than 50 characters.</td>
                            </tr>
                            <tr>
                                <td width="15%">Price / Unit:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Enter Product's Price" name="price" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",3);?>"/></td>
                                <td>*Product's price must valid floating point.</td>
                            </tr>
                            <tr>
                                <td width="15%">Discount %:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Example: 10 means 10%" name="discount" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",4);?>"/></td>
                                <td>Discount value will automatically to 0, If user not given.</td>
                            </tr>
                            <tr>
                                <td width="15%">Price After Dis:</td>
                                <td width="45%"><input type="text" class="field" placeholder="No Enterable" disabled="disabled" name="PAD" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",5);?>" /></td>
                                <td>Automatic Calculate if you given discount value.</td>
                            </tr>
                            <tr>
                                <td width="15%">Products Pictures:</td>
                                <td width="45%"><input type="file" style="color:#d3d3d3;" name="img"/></td>
                                <td>Otional, Upload or use Default image.</td>
                            </tr>
                            <tr>
                                <td width="15%">Contact:</td>
                                <td width="45%"><input type="text" class="field" placeholder="Enter Contact" name="contact" value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",7);?>" /></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="15%">Category:</td>
                                <td width="45%">
                                	<div class="field">
                                    	
                                    	<select style=" width:100%; border:none; outline:none; height:1.9em" name="category">
                                        	<option value="<?php echo $obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",8);?>" disabled="disabled" selected="selected"><?php echo $obj->getData("SELECT * FROM "._T_CATEGORY." WHERE cateCode='".$obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",8)."'",2);?></option>
                                            <?php
                                            	$cate=$obj->fetchArray('SELECT * FROM '._T_CATEGORY.' WHERE status=1');
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
                                    	 <?php $s=$obj->getData("SELECT * FROM "._T_PRODUCT." WHERE MD5(proCode)='".$_GET['id']."'",9)?>
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
                            <td width="15%">Product Code</td>
                            <td width="45%">Product Name</td>
                            <td width="10%" align="center">Status</td>
                            <td width="20%" align="center">Action</td>
                        </tr>
                        
                        <?php
                        	$data=$obj->fetchArray('SELECT * FROM '._T_PRODUCT);
							$index=1;
							while($rs=mysql_fetch_array($data))
							{
								echo '<tr height="25">'.
										'<td>'.$index.'</td>'.
										'<td>'.$rs[1].'</td>'.
										'<td>'.$rs[2].'</td>'.
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
