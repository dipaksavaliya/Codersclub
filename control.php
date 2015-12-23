<?php
include('model.php');
class control {
    function Data_country()
   {
       $mo =new model();
       $rs0=$mo->country();
       return $rs0;
   }
   function Data_state()
   {
       $mo =new model();
       $rs1=$mo->state();
       return $rs1;
   }
   function Data_city()
   {
       $mo=new model();
       $rs2=$mo->city();
       return $rs2;
   }

}

?>
