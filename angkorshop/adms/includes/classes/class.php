<?php
	// methods collection for administrator
	include 'configure.php';
	class angkorCls
	{
		public function angkorCls()
		{
			$this->connect();
		}
		
		// create connection
		public function connect()
		{
			mysql_connect(HOST,USER,PASSWORD) or die('Oop! Error while connection to database.');
			mysql_select_db(DATABASE) or die('Not found database in server.');
		}
		
		// use to control user login
		public function angkorLogin($_TATBLE_,$_USER_,$_PWD_)
		{
			$sql="SELECT * FROM ".$_TATBLE_." WHERE username='".$_USER_."' AND password='".md5($_PWD_)."' AND status=1";
			$dataSpurce=mysql_query($sql);
			return $dataSpurce;
		}
		
		// use to general encryption
		function encrypt($_DATA_)
		{
			return md5($_DATA_);
		}
		
		// function get affected rows
		function countAffetced($dataSources)
		{	
			return mysql_num_rows($dataSources);
		}	
		
		public function fetchArray($sql)
		{
			mysql_query("set names 'utf8'");
			return mysql_query($sql);
		}
		
		function getData($sql,$fetch_field)   // display normal text
		{
			mysql_query("set names 'utf8'");  // set to support kh-font
			$SQL_CONTENT=$sql;
			$EXESC=mysql_query($SQL_CONTENT);
			$rs=mysql_fetch_array($EXESC);
			return $rs[$fetch_field];
		}
		// prevent sql injection with valid numeric
		function PrevSqlInj($source)
		{
			$IdFiltered="";
			for($i=0;$i<=strlen($source);$i++)
			{
				$char=substr($source,$i,1);
				if(!is_numeric($char)){break;}
				$IdFiltered.=$char;
			}
			return $IdFiltered;
		}
		function executeNoneQuery($sql)
		{
			mysql_query("set names 'utf8'");
			$exe=mysql_query($sql);
			return mysql_affected_rows($exe);
		}
		function uploadFile($files,$dir,$size)
		{
			$allowedExts = array("gif", "jpeg", "jpg", "png","JPG","PNG","GIF","JPEG");
			$temp = explode(".", $_FILES[$files]["name"]);
			$extension = end($temp);
			if (($_FILES[$files]["size"] < ($size))&& in_array($extension, $allowedExts))
			{
				if ($_FILES[$files]["error"] > 0)
				{
					echo "Return Code: " . $_FILES[$files]["error"] . "<br>";
				}
				else
				{    
					move_uploaded_file($_FILES[$files]["tmp_name"],
					$dir.$_FILES[$files]["name"]);
		  
				}
			}
			else
			{
				echo "<script>alert('Invalid File!');</script>";
			}
		
		}

	}
	$obj=new angkorCls();
?>