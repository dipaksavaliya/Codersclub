<?php
class model
{
    function model()
    {
          include_once('conn.php');
    }
    function country()
    {
       echo $qry_cont="select * from country";
        $rs0=mysql_query($qry_cont);
        return $rs0;
    }   
    function state()
    {
       echo  $qry_st="select * from state";
        $rs=mysql_query($qry_st);
        return $rs;
    }
    function city()
    {
        echo $qry_ct="select * from city";
        $rs1=mysql_query($qry_ct);
        return $rs1;
    }
   
}
?>
