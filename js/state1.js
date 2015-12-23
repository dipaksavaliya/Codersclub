var xmlhttp;

function showUser(str)
{
    //alert(str);
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var url="state.php";
url=url+"?q="+str;
//url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",url,true);
xmlhttp.send(null);
}

function stateChanged()
{
if (xmlhttp.readyState==4)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}
var xmlhttp2;

function show(str2)
{
   // alert(str2);
xmlhttp2=GetXmlHttpObject();
if (xmlhttp2==null)
  {
  alert ("Browser does not support HTTP Request");
  return;
  }
var url2="city.php";
url2=url2+"?q="+str2;
//url=url+"&sid="+Math.random();
xmlhttp2.onreadystatechange=stateChanged2;
xmlhttp2.open("GET",url2,true);
xmlhttp2.send(null);
}

function stateChanged2()
{
if (xmlhttp2.readyState==4)
{
document.getElementById("txt").innerHTML=xmlhttp2.responseText;
}
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}