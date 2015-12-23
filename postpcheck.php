<?php
    session_start();
    include_once('conn.php');
    $un=$_POST["txt_uname"];
    $pw=$_POST["txt_pass"];
    $_SESSION['uname']=$_POST["txt_uname"];
    $qry="SELECT username,password FROM user WHERE username='$un' AND password='$pw'";
    $rs=mysql_query($qry);
    $rnum=mysql_num_rows($rs);
      
    if($rnum>0)
    {
       $qry1="SELECT usertype FROM user WHERE username='$un'";
       $rs1=mysql_query($qry1);
       $rnum1=mysql_num_rows($rs1);
        
        
                    while($row_sel=mysql_fetch_array($rs1))
                    {
                        $uid=$row_sel['usertype'];
                    }
                        $_SESSION['uid']=$uid;
                
                    if($uid==1)
                        {
                            header('location:postp1.php');
                         
                        }
                            else if($uid==3)
                                {
                                    header('location:postp3.php');
                                }
                            else
                                {
                                    echo "You r not allowed!!";
                                }       
               
        
        }
    
    
    else
    
    {
   //     echo "invalid username or password"; 
        header('location:postlogininvalid.php');       
    }
    
?>


