<?php
	include('../includes/classes/class.php');
	$pAjaxResource=$pAjax->pAjaxGetDataSet(" ORDER BY ID DESC ");
	
	echo '<table width="96%" cellpadding="0" cellspacing="0" border="0" rules="all" align="center">';
	echo '<tr align="center">
          <td>Code</td>
          <td>Name</td>
          <td>Price</td>
          <td>Amount</td>
          </tr>';
	while($pAjaxRow=mysql_fetch_array($pAjaxResource))
	{
		echo '<tr align="center" onclick="editPro(\''.$pAjaxRow[0].'\',\''.$pAjaxRow[1].'\',\''.$pAjaxRow[2].'\',\''.$pAjaxRow[3].'\')" style="cursor:pointer;" align="'.$pAjaxRow[0].'" title="'.$pAjaxRow[0].'">
          <td>'.$pAjaxRow[0].'</td>
          <td>'.$pAjaxRow[1].'</td>
          <td>'.$pAjaxRow[2].'</td>
          <td>'.$pAjaxRow[3].'</td>
          </tr>';
	}
	echo '<table>';
?>
