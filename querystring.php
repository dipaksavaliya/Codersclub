<?php
   $self = $_SERVER["PHP_SELF"];
 
  if($_SERVER["QUERY_STRING"]) {
 
    $finalurl = $self . "?" . $_SERVER["QUERY_STRING"] . 
      "&myvariable=myvalue";   
 
  } else {
 
    $finalurl = $self . "?" . "myvariable=myvalue";  
 
  } 
?>