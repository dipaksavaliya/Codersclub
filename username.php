   <?php
        
        $uname=$_POST['txt_uname'];
        $qry="SELECT count(*) as total FROM user WHERE username='$uname' ";
        $txt=mysql_query($qry);
        while($row_sel=mysql_fetch_array($txt))
      {
       $uid=$row_sel['total'];
      }
      if($uid==0)
      {
          echo "username available";
      }
      else
      {
          echo "Plz try some diff";
      }
      
?>