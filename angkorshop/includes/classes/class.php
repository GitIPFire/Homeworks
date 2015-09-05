<?php
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
		
		function displayList($_CODE_,$_IMAGE_,$_NAME_,$_PRICE_)
		{
			echo '<div class="col_1_of_3 span_1_of_3">'.
			'<div class="view view-first">'.
					'<a href="details/?id='.md5($_CODE_).'" class="nav">'.
							'<div class="inner_content clearfix">'.
									'<div class="product_image">';
											echo ($_IMAGE_==""||$_IMAGE_==NULL)?'<img src="'.PATH.ADMINS.UPLOAD.'default.png" class="img-responsive" alt=""/>':'<img src="'.PATH.ADMINS.UPLOAD.$_IMAGE_.'" class="img-responsive" alt=""/>';
											echo '<div class="product_container">'.
													'<div class="cart-left">'.
															'<p class="title">'.$_NAME_.'<br />'.$_PRICE_.'<sup>.00</sup></p>'.
													'</div>'.
											'</div>'.
									'</div>'.
							'</div>'.
					'</a>'.
				'</div>'.
			
			'</div>';
		}	
		

	}
	$obj=new angkorCls();
?>