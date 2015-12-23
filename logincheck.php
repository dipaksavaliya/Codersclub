<?php
    session_start();
    include_once('conn.php');
    
    $un=$_POST["txt_uname"];
    $pw=$_POST["txt_pass"];
    
    $_SESSION['uname']=$_POST["txt_uname"];
    $_SESSION['password']=$_POST["txt_pass"];
    
    if(is_null($_SESSION['uname'])==false)
    {
    $qry="SELECT userid,username,password,usertype FROM user WHERE username='$un' AND password='$pw'";
    $rsl=mysql_query($qry);
    $rnum=mysql_num_rows($rsl);

      while($row_sel=mysql_fetch_array($rsl))
      {
       $uid=$row_sel['usertype'];
       $userid=$row_sel['userid'];
      }
      $_SESSION['userid']=$userid;
      $_SESSION['uid']=$uid;
            if($uid==1)
            {
                header('location:welcome1.php');
            }
            else if($uid==2)
            {
                header('location:welcome2.php');
            }
            else if($uid==3)
            {
                header('location:welcome3.php');
            }
            else
            {
                header('location:logininvalid.php');        
         //       echo "invalid username or password";
            }
    }
    /*
    else
{
    header('location:login.php');
}
*/
?>

