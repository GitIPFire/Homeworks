<?php
		$xml = new DOMDocument("1.0");
	 		$DTD=$obj->fetchArray('SELECT * FROM '._T_PRODUCT.' WHERE status=1');
		
		$root = $xml->createElement("pagin"); // clear root element level 1
		$xml->appendChild($root);
		
		while($rs=mysql_fetch_array($DTD))
		{	 
			
			$procode   = $xml->createElement("code");
			$value = $xml->createTextNode($rs[1]);
			$procode->appendChild($value);
			
			$proname   = $xml->createElement("name");
			$value = $xml->createTextNode($rs[2]);
			$proname->appendChild($value);
			
			$price = $xml->createElement("price");
			$value = $xml->createTextNode($rs[5]);
			$price->appendChild($value);	
			
			$image= $xml->createElement('image');
			$value=$xml->createTextNode($rs[6]);
			$image->appendChild($value);		 
			 
			$subroot = $xml->createElement("page"); // create element level 2
			$subroot->appendChild($procode);
			$subroot->appendChild($proname);
			$subroot->appendChild($price);	
			$subroot->appendChild($image);	 
			$root->appendChild($subroot); 
			$xml->formatOutput = true;

		}
		
			
		$xml->save(INCLUDES."paginator.xml") or die("Error");
	
	
?>