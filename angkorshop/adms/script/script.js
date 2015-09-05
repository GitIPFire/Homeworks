// JavaScript Document
function header(url,openStyle)
{
	if(openStyle=='0')
	{
		window.location.href=url;
		
	}
	else
	{
		window.open(url);	
	}
}

function alertSize() {
		var winW = 630, winH = 460;
		if (document.body && document.body.offsetWidth) {
			winW = document.body.offsetWidth;
		 	winH = document.body.offsetHeight;
		}
		if (document.compatMode=='CSS1Compat' &&
			document.documentElement &&
			document.documentElement.offsetWidth ) {
		 	winW = document.documentElement.offsetWidth;
		 	winH = document.documentElement.offsetHeight;
		}
		if (window.innerWidth && window.innerHeight) {
			 winW = window.innerWidth;
		 	winH = window.innerHeight;
		}
		document.getElementById('left').style.height=winH+'px';
		//alert(winH);
		//document.writeln('Window width = '+winW);
		//document.writeln('Window height = '+winH);
		var r=document.getElementById('right_top').offsetHeight;
		document.getElementById('right___').style.height=(winH-(r+72))+'px';
	
}
function clearText(ele)
{
	var e=document.getElementById(ele);
	e.value=''; e.defaultValue='';
}