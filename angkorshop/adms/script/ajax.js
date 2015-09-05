

//******Ajax library function*******//

function silentRepalce(str,path,demo)
{
	 var pageWidth = window.innerWidth; 
     var pageHeight = window.innerHeight/1.5; 
     if (typeof pageWidth != "number"){ 
     	if (document.compatMode == "CSS1Compat"){ 
            pageWidth = document.documentElement.clientWidth; 
            pageHeight = document.documentElement.clientHeight; 
      	} 
		else 
		{ 
            pageWidth = document.body.clientWidth; 
            pageHeight = document.body.clientHeight; 
      	} 
     } 
     //Make the background div tag visible...
     var divbg = document.getElementById('bg'); 
     divbg.style.visibility = "visible";   
	  
      var divobj = document.getElementById(demo); 
      divobj.style.visibility = "visible"; 
      if (navigator.appName=="Microsoft Internet Explorer") 
	  {
      	computedStyle = divobj.currentStyle; 
	  }
	  else 
	  {
		  computedStyle = document.defaultView.getComputedStyle(divobj, null); 
	  }
      //Get Div width and height from StyleSheet 
      var divWidth = computedStyle.width.replace('px', ''); 
      var divHeight = computedStyle.height.replace('px', ''); 
      var divLeft = (pageWidth - divWidth) / 2; 
      var divTop = (pageHeight - divHeight) / 2; 
      //Set Left and top coordinates for the div tag 
      divobj.style.left = divLeft + "px"; 
      divobj.style.top = divTop + "px"; 
      //Put a Close button for closing the popped up Div tag 
      if(divobj.innerHTML.indexOf("closepopup('" + demo +"')") < 0 ) {
      divobj.innerHTML = "<span class=\"close_button\" onclick=\"closepopup('" + demo +"')\">X</span></a>" + divobj.innerHTML; 
	  }
	
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
	  
	xmlhttp.open("GET",path+"?id="+str,true);
	xmlhttp.send();
}

function closepopup(id)
{
      var divbg = document.getElementById('bg'); 
      divbg.style.visibility = "hidden"; 
      var divobj = document.getElementById(id); 
      divobj.style.visibility = "hidden"; 
}