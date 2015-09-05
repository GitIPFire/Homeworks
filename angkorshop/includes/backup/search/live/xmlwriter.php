<?php
		$xml = new DOMDocument("1.0");
	 
		if($_GET['key']!=NULL)
		{
			$t_about_mekong=mysql_query("select * from t_about_mekong where des_en like '%".$_GET['key']."%' or title_en like '%".$_GET['key']."%'");	
			$t_sub_front_detail=mysql_query("select * from t_sub_front_detail where des_en  like '%".$_GET['key']."%' or dess_en like '%".$_GET['key']."%'");
			$t_news=mysql_query("select * from t_news where ne_name_en like '%".$_GET['key']."%' or ne_detail_en like '%".$_GET['key']."%'");
			$t_events=mysql_query("select * from t_events where ev_name_en like '%".$_GET['key']."%' or ev_detail_en like '%".$_GET['key']."%'");
			$t_study_at_mekong=mysql_query("select * from t_study_at_mekong where title_en like '%".$_GET['key']."%' or des_en like '%".$_GET['key']."%'");
		
		}//$str="";
		
		$root = $xml->createElement("results"); // clear root element level 1
		$xml->appendChild($root);
		
		while($rs=mysql_fetch_array($t_about_mekong))
		{	 
			$table   = $xml->createElement("table");
			$idText = $xml->createTextNode("1");
			$table->appendChild($idText);
			 
			$id   = $xml->createElement("id");
			$titleText = $xml->createTextNode($rs[0]);
			$id->appendChild($titleText);
			
			$title   = $xml->createElement("title");
			$titleText = $xml->createTextNode($rs[1]);
			$title->appendChild($titleText);
			
			$content = $xml->createElement("content");
			$titleText = $xml->createTextNode($rs[3]);
			$content->appendChild($titleText);			 
			 
			$subroot = $xml->createElement("result"); // create element level 2
			$subroot->appendChild($table);
			$subroot->appendChild($id);
			$subroot->appendChild($title);
			$subroot->appendChild($content);		 
			$root->appendChild($subroot); 
			$xml->formatOutput = true;
			
			//echo "<xmp>". $xml->saveXML() ."</xmp>";
		}// close retrive tbl about mekong
		
		while($rs=mysql_fetch_array($t_study_at_mekong))
		{	 
			$table   = $xml->createElement("table");
			$idText = $xml->createTextNode("3");
			$table->appendChild($idText);
			 
			$id   = $xml->createElement("id");
			$titleText = $xml->createTextNode($rs[0]);
			$id->appendChild($titleText);
			
			$title   = $xml->createElement("title"); //<table>fdgd</table>
			$titleText = $xml->createTextNode($rs[1]);//fiel title_en
			$title->appendChild($titleText);
			
			$content = $xml->createElement("content"); //<content>ghygyhtfg</cont>
			$titleText = $xml->createTextNode($rs[3]);//field des_en
			$content->appendChild($titleText);			 
			 
			$subroot = $xml->createElement("result"); // create element level 2
			$subroot->appendChild($table);
			$subroot->appendChild($id);
			$subroot->appendChild($title);
			$subroot->appendChild($content);		 
			$root->appendChild($subroot); 
			//$xml->formatOutput = true;
			//echo "<xmp>". $xml->saveXML() ."</xmp>";
		}// close retrive tbl about mekong
		
		while($rs=mysql_fetch_array($t_events))
		{	 
			$table   = $xml->createElement("table");
			$idText = $xml->createTextNode("4");
			$table->appendChild($idText);
			 
			$id   = $xml->createElement("id");
			$titleText = $xml->createTextNode($rs[0]);
			$id->appendChild($titleText);
			
			$title   = $xml->createElement("title"); //<table>fdgd</table>
			$titleText = $xml->createTextNode($rs[1]);//fiel title_en
			$title->appendChild($titleText);
			
			$content = $xml->createElement("content"); //<content>ghygyhtfg</cont>
			$titleText = $xml->createTextNode($rs[3]);//field des_en
			$content->appendChild($titleText);			 
			 
			$subroot = $xml->createElement("result"); // create element level 2
			$subroot->appendChild($table);
			$subroot->appendChild($id);
			$subroot->appendChild($title);
			$subroot->appendChild($content);		 
			$root->appendChild($subroot); 
			$xml->formatOutput = true;
			//echo "<xmp>". $xml->saveXML() ."</xmp>";
		}// close retrive tbl about mekong
		
		
		
		
		while($rs=mysql_fetch_array($t_news))
		{	 
			$table   = $xml->createElement("table");
			$idText = $xml->createTextNode("5");
			$table->appendChild($idText);
			 
			$id   = $xml->createElement("id");
			$titleText = $xml->createTextNode($rs[0]);
			$id->appendChild($titleText);
			
			$title   = $xml->createElement("title"); //<table>fdgd</table>
			$titleText = $xml->createTextNode($rs[1]);//fiel title_en
			$title->appendChild($titleText);
			
			$content = $xml->createElement("content"); //<content>ghygyhtfg</cont>
			$titleText = $xml->createTextNode($rs[3]);//field des_en
			$content->appendChild($titleText);			 
			 
			$subroot = $xml->createElement("result"); // create element level 2
			$subroot->appendChild($table);
			$subroot->appendChild($id);
			$subroot->appendChild($title);
			$subroot->appendChild($content);		 
			$root->appendChild($subroot); 
			$xml->formatOutput = true;
			//echo "<xmp>". $xml->saveXML() ."</xmp>";
		}// close retrive tbl about mekong
		
		
		
		while($rs=mysql_fetch_array($t_sub_front_detail))
		{	 
			$table   = $xml->createElement("table");
			$idText = $xml->createTextNode("2");
			$table->appendChild($idText);
			 
			$id   = $xml->createElement("id");
			$titleText = $xml->createTextNode($rs[0]);
			$id->appendChild($titleText);
			
			$title   = $xml->createElement("title"); //<table>fdgd</table>
			$titleText = $xml->createTextNode($rs[2]);//fiel title_en
			$title->appendChild($titleText);
			
			$content = $xml->createElement("content"); //<content>ghygyhtfg</cont>
			$titleText = $xml->createTextNode($rs[5]);//field des_en
			$content->appendChild($titleText);			 
			 
			$subroot = $xml->createElement("result"); // create element level 2
			$subroot->appendChild($table);
			$subroot->appendChild($id);
			$subroot->appendChild($title);
			$subroot->appendChild($content);		 
			$root->appendChild($subroot); 
			$xml->formatOutput = true;
			//echo "<xmp>". $xml->saveXML() ."</xmp>";
		}// close retrive tbl about mekong
		
			
		$xml->save("live/search.xml") or die("Error");
	
	
?>