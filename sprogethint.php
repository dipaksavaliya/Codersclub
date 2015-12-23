<?php
$con = mysql_connect('localhost', 'root', '');
mysql_select_db("CodersClub", $con);
$sql="SELECT proname FROM project";
$result = mysql_query($sql);
 $a=mysql_num_rows($result);
//get the q parameter from URL

?>

<?php
while($row = mysql_fetch_array($result))
{
?> 
    <?php 
   $r[]=$row['proname'];
   // echo $row['proname'];?>
<?php

}
 $q=$_GET["q"];
//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  
  for($i=0; $i<$a; $i++)
    {
        
    if (strtolower($q)==strtolower(substr($r[$i],0,strlen($q))))
      {
        
      if ($hint=="")
        {
           
        $hint=$r[$i];
        }
      else
        {
            
        $hint=$hint." , ".$r[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>