<?php
	include('includes/classes/class.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AJax Transactions</title>
<script type="text/javascript" src="js/ajax-min.js"></script>
<script type="text/javascript">
var d=setInterval(function(){silentRepalce('0','ajaxtr/retrieve.php','prlist')},500);
function silentRepalce(str,path,demo)
{
	var xmlhttp;    
	if (str=="")
	  {
	  document.getElementById(demo).innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById(demo).innerHTML=xmlhttp.responseText;
		}
	  }  
	///document.getElementById(demo).scrollTop=10000;
	xmlhttp.open("GET",path+"?jid="+str,true);
	xmlhttp.send();
	//-------------
}
function runSQL(code,name,price,amt,qt)  
{
	var code = document.getElementsByName(code).item(0).value;
	var name=document.getElementsByName(name).item(0).value;
	var price=document.getElementsByName(price).item(0).value;
	var amt=document.getElementsByName(amt).item(0).value;
	var datastring="code="+ code+"&name="+name+"&price="+price+"&amt="+amt;
	// not qt=1 refer to insert statement; 2 refer to delete statement
	if(code!=""&&name!=""&&price!=""&&amt!="")
	{
		if(qt==='1')
		{
			$.ajax({
				type: "POST",
				url: "ajaxtr/save.php",
				data: datastring,
				cache: false,
				success: function(html){}
			});
		}
		else
		{
			if(confirm("Sure you want to delete this data ? There is NO Undo!" ))
			{
				$.ajax({
					type: "POST",
					url: "ajaxtr/delete.php",
					data: datastring,
					cache: false,
					success: function(html){}
				});
				clearText();
				document.getElementsByName('code').item(0).readOnly=false;
				document.getElementsByName('code').item(0).style.background='#FFF';
			}
			return false;
			
		}
		clearText();
		document.getElementsByName('code').item(0).readOnly=false;
		document.getElementsByName('code').item(0).style.background='#FFF';
	}
}

function clearText()
{
	document.getElementsByName('code').item(0).value="";
	document.getElementsByName('name').item(0).value="";
	document.getElementsByName('price').item(0).value="";
	document.getElementsByName('amt').item(0).value="";	
}

function editPro(code,name,price,amt)
{

	document.getElementsByName('code').item(0).value=code;
	document.getElementsByName('name').item(0).value=name;
	document.getElementsByName('price').item(0).value=price;
	document.getElementsByName('amt').item(0).value=amt;
	document.getElementsByName('code').item(0).readOnly=true;
	document.getElementsByName('code').item(0).style.background='#ccc';
}

</script>
<style>
	body{font-family:'Arial', Helvetica, sans-serif; font-size:11px;}
	.web-content
	{
		width:300px;
		height:auto;
		margin:0 auto 0 auto;
	}
	.title
	{
		width:100%;
		height:23px;
		background:#006;
		color:#FFF;
		padding:5px 0 0 0;
		text-align:center;
		font-size:12px;
		font-weight:bold;
	}
	.inputs{width:298px; height:auto; border:1px solid #006; float:left;}
	.inputs label{ float:left; width:293px; font-size:11px; padding:5px 0 0 5px; margin:3px 0 3px 0;}
	.inputs input{ float:left; width:275px; height:20px; margin:0 0 3px 5px; border:1px solid #CCC; outline:none; font-size:11px; padding:0 5px 0 5px;}
	.inputs button{ font-size:11px; margin:5px 0 5px 5px; float:left;}
	.inputs .prlist{ width:100%; float:left; margin:10px 0 10px 0;}
</style>
</head>
	<div class="web-content">
    	<div class="title">AJax Transaction</div>
    	<div class="inputs">
        	<label>Code:</label>
            <input type="text" name="code" />
            <label>Name:</label>
            <input type="text" name="name" />
            <label>Price:</label>
            <input type="text" name="price" />
            <label>Amount:</label>
            <input type="text" name="amt" />
            <button onclick="runSQL('code','name','price','amt','1')">Save</button><button onclick="runSQL('code','name','price','amt','2')">Delete</button><button onclick="clearText()">Clear</button>
            
            <div class="prlist" id="prlist">
            	
            </div>
        </div>
    </div>
<body>
</body>
</html>
