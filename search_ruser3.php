<?php
    ob_start();
    include_once('conn.php');
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

<script type="text/javascript" src="js/sclienthint.js"></script>
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="welcome3.php"><small>Where Buyers meet Coders!! </small><span>Coders</span>Club.com</a></h1></div>

       <div class="menu_nav">
       <p align="right"><font color="white">      
 <?php
    session_start();
       echo "You Login As ".$_SESSION['uname'];
       if($_SESSION['uname']=='')
       {
           header('location:index.php');
       }
       else
       {
?></font> &nbsp;|&nbsp; &nbsp; &nbsp; 
<a href="logout.php">Logout</a></p>
       <ul><li><a href="welcome3.php"><span><span>Home</span></span></a></li>
             <li><a href="contact3.php"><span><span>Contacts</span></span></a></li></ul>
             
         </div>
   
      <div class="clr">
        
      </div>
      
     <?php
    include_once('menu3.php');
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
          <h2><span>Search Users</span> here..</h2><div class="clr"></div>
          
     
<form method="post">
Input Name:<input type="text" id="txt1" name="txt_fname" onkeyup="showHint(this.value)" />

<p>Suggestions:<span id="txtHint"></span></p>
<input type="submit" value="Search User Details" name="btn"/> 
<br>
<br>  
<br> 
      


 <?php
            if(isset($_REQUEST['btn']))
            { 
             ?>
             <p><b>User :</b>
             <?php
    
              echo $fname=$_POST['txt_fname'];
              ?>
              
              

 <table border="1" width="80%">
<tr>
       <th>First Name</th>     
       
       <th>Last Name</th>
        
        <th>Skills </th>
       
        <th>Country</th>
        
        <th>State</th>
         
        <th>City </th> 
</tr>     
              
              <?php
    

               $fn="select  login .fname, login .lname, login .skill, country.cname, state.sname, city.city
               from login inner join state
               on login.state=state.sid inner join country
               on login.country=country.cid inner join city
               on login.city=city.cityid where login.fname like '$fname%' ";
                $rs=mysql_query($fn);

                while($row=mysql_fetch_array($rs))
                {   
                    echo "<tr><td>".$row['fname']."</td>"; 
                    echo "<td>".$row['lname']."</td>"; 
                    echo "<td>".$row['skill']."</td>"; 
                    echo "<td>".$row['cname']."</td>"; 
                    echo "<td>".$row['sname']."</td>"; 
                    echo "<td>".$row['city']."</td></tr>"; 
               
              ?>


<?php
     }
            }
?>
  </table>  
</form>          </div>
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
            <li><a href="search_all3.php">Search</a><br /></li>
            <li><a href="search_ruser3.php">Search users</a><br />You can search Registered users</li>
            <li><a href="search_tech3.php">Search projects by technologies</a><br />You can search projects by its technologies</li>
            <li><a href="search_pro3.php">Search projects by title</a><br />You can search projects by project title</li>
            
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
        <p>CodersClub.com is a large outsourcing and crowdsourcing marketplace for small business..We have many satisfied customers from all over the world. We connect over number of buyers and freelancers globally from over different countries regions. Through our website, buyers can hire freelancers..<a href="about3.php">Read more...</a></p>
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
        <p><a href="contact3.php">CodersClub.com</a></p>
        <p>+91 (846) 066-6940</p>
        
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"> Copyright <a href="welcome3.php">CodersClub.com</a>. Posted by CodersClub.com <a href="welcome.php">Rent A Coder</a></p>
      <ul class="fmenu">
        <li><a href="welcome3.php">Home</a></li>
        <li><a href="term3.php">Terms</a></li>
        <li><a href="about3.php">About Us</a></li>
        <li><a href="contact3.php">Contacts</a></li>
        
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