<?php
include('define.php');
class pAjax
{
	public function pAjax()
	{
		$this->pAjaxOpenConnection();
	} 
	public function pAjaxOpenConnection()
	{
		$pAjaxCon=mysql_connect(HOSTID,USERID,PWD) or die('Oop! Error Connection.');
		mysql_select_db(CATALOG) or die('Oop! Database not found in this server.');
	}
	public function pAjaxAppend($code, $name, $price,$amt)
	{
		$pAjaxSQL="SELECT * FROM TBL_PRODUCT WHERE CODE='".mysql_real_escape_string($code)."'";
		$pAjaxResource=mysql_query($pAjaxSQL);
		if(mysql_num_rows($pAjaxResource)>=1)
		{
			$pAjaxSQL="UPDATE TBL_PRODUCT SET NAME='".mysql_real_escape_string($name)."', PRICE='".mysql_real_escape_string($price)."', AMOUNT='".mysql_real_escape_string($amt)."' WHERE CODE='".mysql_real_escape_string($code)."'";
			mysql_query($pAjaxSQL);
		}
		else
		{
			$pAjaxSQL="INSERT INTO TBL_PRODUCT VALUES('','".mysql_real_escape_string($code)."','".mysql_real_escape_string($name)."','".mysql_real_escape_string($price)."','".mysql_real_escape_string($amt)."')";
			mysql_query($pAjaxSQL);
		}
	}
	public function pAjaxKill($code)
	{
		$pAjaxSQL="DELETE FROM TBL_PRODUCT WHERE CODE='".mysql_real_escape_string($code)."'";
		mysql_query($pAjaxSQL);
	}
	public function pAjaxGetDataSet($condition="")
	{
		$pAjaxSQL="SELECT CODE, NAME, PRICE, AMOUNT FROM TBL_PRODUCT ".$condition;	
		$pAjaxResource=mysql_query($pAjaxSQL);
		return $pAjaxResource;
	}
}

$pAjax=new pAjax();
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>
