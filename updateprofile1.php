<?php
    ob_start();
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title>CodersClub.com-Rent A Coder</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="welcome1.php"><small>Where Buyers meet Coders!! </small><span>Coders</span>Club.com</a></h1></div>

       <div class="menu_nav">
       <p align="right"><font color="white">      
 <?php
    session_start();
       echo "You Login As  ".$_SESSION['uname'];
       if($_SESSION['uname']=='')
       {
           header('location:index.php');
       }
       else
       {
?></font> &nbsp;|&nbsp; &nbsp; &nbsp; 
<a href="logout.php">Logout</a></p>
       <ul><li><a href="welcome1.php"><span><span>Home</span></span></a></li>
             <li><a href="contact1.php"><span><span>Contacts</span></span></a></li></ul>
     
         </div>
   
      <div class="clr">
        
      </div>
      
     <?php
    include_once('menu1.php');
?> 
    </div>
  </div>
<div class=""></div>
  <div class="content">     
    <div class="content_resize">    
      <div class="mainbar">  
        <div class="article">
          </div>
                
        <div class="article">
                   <h2><span>Edit My Profile</span></h2><div class="clr"></div>
          
          <div class="clr"></div>

<?php
    /*this code is done to the update the record selected */
    include_once('conn.php');
    session_start();
    $profile=$_SESSION['uname'];
    $upd=$_REQUEST['u'];// upd is the flag to check the update is set or not.
    
    if($upd==1)// the varibale is checked whether the flag is 1 or not
    {
       $profile=$_REQUEST['id']; // to fetch the id selected
       $qry_da="select * from login where username=$profile";  // query to fetch the record of the selected id
        $rs_da=mysql_query($qry_da);   // execution of the query
        $row_da=mysql_fetch_array($rs_da); // to fetch tha array of query result
        ?>
        
        <form method="post">
<ol><li>
        <label>First Name</label>
        <input type="text" name="txt_fname" value="<?php echo $row_da['fname'] ?>">
         </li><li>
         
        <label>Last Name</label>
        <input type="text" name="txt_lname" value="<?php echo $row_da['lname'] ?>">
        </li><li>
        
        <label>Gender</label>
        <?php
        // to check what is the gender if M then the male is checked
        if($row_da['gender']=='Male')
        {
        ?>
            <input type="radio" name="rb_gender" value="Male" checked="checked">Male&nbsp;&nbsp; <input type="radio" name="rb_gender" value="Female">Female
        <?php
        }
        else if($row_da['gender']=='Female')
        {
             ?>
            <input type="radio" name="rb_gender" value="Male" >Male&nbsp;&nbsp; <input type="radio" name="rb_gender" value="Female" checked="checked">Female
        <?php
        }
        else
        {
        ?>
        <input type="radio" name="rb_gender" value="Male">Male&nbsp;&nbsp; <input type="radio" name="rb_gender" value="Female">Female
        <?php
        }
        ?>
        </li><li>
        
        <label>Skills:</label>
        <table width="90%">
        <tr>
        <?php
            $skil_di=explode(' , ',$row_da['skill']);
            //var_dump($hob_di);
        ?>
        
            <?php
            if($skil_di[0]=='web designing')
            {
                ?>    
                <td><input type="checkbox" name="chk_skill[]" value="web designing" checked="checked">Web designing</td>     
                <?php
            }
            else
            {
                ?>    
                <td><input type="checkbox" name="chk_skill[]" value="web designing">Web designing</td>
                <?php
            }
            
            if($skil_di[0]=='php' || $hob_di[1]=='php')
            {
                ?>    
                <td><input type="checkbox" name="chk_skill[]" value="php" checked="checked">Php</td>
                <?php
            }
            else
            {
                    ?>    
                <td><input type="checkbox" name="chk_skill[]" value="php">Php</td>
                <?php
            }
            if($skil_di[0]=='database' || $hob_di[1]=='database' || $hob_di[2]=='database' )
            {
            ?>    
                <td><input type="checkbox" name="chk_skill[]" value="database">Database Administration</td>
                <?php
            }
            else
            {
                ?>
                <td><input type="checkbox" name="chk_skill[]" value="database">Database Administration</td></tr>
            <?php
            }
            
            
            ?>
            </li><li>
            
        <label>Email:</label>
        <input type="text" name="txt_email" class="text" value="<?php echo $row_da['email'] ?>">
        </li><li>
        
        <label>country:</label>
            <select name="cmb_country" class="sel" id="country" onchange="showUser(this.value)">
            <?php
                include_once('conn.php');
                        $sql = "SELECT * FROM country order by cname";
                      $res=mysql_query($sql);

                      while($row=mysql_fetch_array($res))
                      {
                         
                          echo "<option value=".$row['cid'].">" .$row['cname']."</option>";
                      }
                            ?>
            </select>
            
            <label>State</label>
        
            <?php
               $st_qy="select * from state order by sname"; // to fetch the state from the table state
                $rs=mysql_query($st_qy);
                
            ?>
            <select name="cmb_state">
                <?php
                // to display all states
                while($row=mysql_fetch_array($rs))
                {   
                                    // check which state is there in the record or not..
                    if($row[1]==$row_da['state'])
                    {
                      ?>
                    
                    <option value="<?php echo $row[1]; ?>" selected="selected"><?php echo $row[1]; ?></option>
                    <?php  
                    }
                    else
                    {
                        
                    ?>
                    
                    <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                    <?php
                    }
                }
?>
            </select>
            
            <label>City</label>
        
            <?php
               $st_qy="select * from city order by sname"; // to fetch the state from the table state
                $rs=mysql_query($st_qy);
                
            ?>
            <select name="cmb_city">
                <?php
                // to display all states
                while($row=mysql_fetch_array($rs))
                {   
                                    // check which state is there in the record or not..
                    if($row[1]==$row_da['state'])
                    {
                      ?>
                    
                    <option value="<?php echo $row[1]; ?>" selected="selected"><?php echo $row[1]; ?></option>
                    <?php  
                    }
                    else
                    {
                        
                    ?>
                    
                    <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                    <?php
                    }
                }
?>
            </select>
            
                
        <label>User Name</label>
        <input type="text" name="txt_uname" value="<?php echo $row_da['username'] ?>">
        </li><li>
        
        <label>Password</label>
        <input type="password" name="txt_pass" value="<?php echo $row_da['password'] ?>">
        </li><li>
    

        <label>Add Skill:</label>
        <input type="text" name="txt_addskill" class="text" value="<?php echo $row_da['addskill'] ?>"> 
        </li><li>
    
        <label>Company Name:</label>
        <input type="text" name="txt_company" class="text" value="<?php echo $row_da['companyname'] ?>"> 
        </li><li>
        
        
        <label>Company Address:</label>
        <textarea id="message" name="txt_companyadd" rows="5" cols="50" class="text" value="<?php echo $row_da['companyadd'] ?>"></textarea>
        </li><li>
            
        
        <input type="submit" value="Submit" name="btn_sub">
        <input type="reset" value="Reset">
    

</form> 
        <?php
    }
    
?>
          
          
          
          
<div class="clr"></div>
          </li></ol>
</form>
        </div>
            </div>
      
      <div class="sidebar"><br><br><br>
<center><div><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                            codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" 
                            width="1000" height="130">
  <param name="movie" value="123ss.swf" />
  <param name="quality" value="high" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
     <embed src="123ss.swf"
      quality="high"
      type="application/x-shockwave-flash"
      WMODE="transparent"
      width="300"
      height="200"
      pluginspage="http://www.macromedia.com/go/getflashplayer"
      allowScriptAccess="always" />
</object></div></center>
<font size="5" color="#0689D7" face="arial"><b>You can Post Project Its Free!!</b></font><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/postp1.jpg" />

        <div class="col c2">
        

        <ul class="sb_menu">
         </ul>
          <div class="clr">
                       
          </div>
          <div class="clr">
        
          </div>
          
          <div class="gadget">
        <h2 class="star"><span>Rent A Coder</span></h2><div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="search_all.php">Search</a><br /></li>
            <li><a href="search_ruser1.php">Search users</a><br />You can search Registered users</li>
            <li><a href="search_tech1.php">Search projects by technologies</a><br />You can search projects by its technologies</li>
            <li><a href="search_pro1.php">Search projects by title</a><br />You can search projects by project title</li>
            
          </ul>
        </div>
      </div>
      </div>
      <div class="clr">
      
      </div>
    </div>
  </div>
<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>About</span></h2>
        <img src="images/white.jpg" width="56" height="56" alt="pix" />
        <p>CodersClub.com is a large outsourcing and crowdsourcing marketplace for small business..We have many satisfied customers from all over the world. We connect over number of buyers and freelancers globally from over different countries regions. Through our website, buyers can hire freelancers..<a href="about1.php">Read more...</a></p>
      </div>
      <div class="col c2">
        <h2><span>Join Us On..</span></h2>
        <ul class="sb_menu">
          <li><a href="#"><img src="images/f.jpg" alt="facebook"> facebook</a></li>
          <li><a href="#"><img src="images/t.jpg" alt="twitter"> twitter</a></li>
          <li><a href="#"><img src="images/l.jpg" alt="linkedIn"> linkedIn</a></li>
          <li><a href="#"><img src="images/g.jpg" alt="google+"> googlePlus</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        <p>You can contact with us through our site or can send us mail.</p>
        <p><a href="contact1.php">CodersClub.com</a></p>
        <p>+91 (846) 066-6940</p>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"> Copyright <a href="#">CodersClub.com</a>. Posted by CodersClub.com <a href="#">Rent A Coder</a></p>
      <ul class="fmenu">
        <li class="active"><a href="welcome.php">Home</a></li>
        <li><a href="term1.php">Terms</a></li>
        <li><a href="about1.php">About Us</a></li>
        <li><a href="contact1.php">Contacts</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
<?php
       }
?>