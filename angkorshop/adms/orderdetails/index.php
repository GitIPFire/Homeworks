<?php 
	define('PATHS','../');
	include PATHS.'includes/classes/class.php';
		//$data=$obj->fetchArray("SELECT * FROM "._T_ORDERDETAILS." WHERE orderCode=".$_GET['id']);
		//$rsrec=mysql_fetch_array($data);
			echo '<span>OREDER CODE: '.$_GET['id'].'</span><span style=" float:right; cursor:pointer;color:#333; font-weight:bold; font-size:13px;" onClick="closepopup(\'popup1\')">X</span>';
?>
							<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" style="font-size:11px;">
                            <tr align="center" valign="top" style=" color:#333; font-weight:bold; font-size:11px;" height="30">
                                <td width="10%">N<sup>&deg;</sup></td>
                                <td width="25%">Product Code</td>
                                <td width="20%">Quanity</td>
                                <td width="20%">Price</td>
                                <td width="25%">Sub Total</td>
                            </tr>
                            <?php
                            	$data=$obj->fetchArray("SELECT * FROM "._T_ORDERDETAILS." WHERE orderCode=".$_GET['id']." ORDER BY id DESC");
								$index=1;
								while($rs=mysql_fetch_array($data))
								{
									echo '<tr height="25" align="center">'.
											'<td>'.$index.'</td>'.
											'<td>'.$rs[2].'</td>'.
											'<td>'.$rs[3].'</td>'.
											'<td>'.$rs[4].'</td>'.
											'<td>'.($rs[4]*$rs[3]).'</td>'.
										 '</tr>';
									$index++;
								}
								if($index==1)
								{
									echo '<tr><td colspan="5" align="center">No records found.</td></tr>';
								}
							?>
                        </table>
						