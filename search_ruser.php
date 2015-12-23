<?php
    ob_start();
    include_once('conn.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>
<head>
<title>CodersClub.com_Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript" src="js/sclienthint.js"></script>

<style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 285%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
           
            top: 25%;
            left: 33%;
            width: 25%;
            height: 50%;
            padding: 16px;
            border: 16px solid #4181EB;
            background-color: white;
            z-index:1002;
            overflow: auto;
            position: fixed;
        }
    </style>

</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><small>Where Buyers meet Coders!! </small><span>Coders</span>Club.com</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span><span>Home</span></span></a></li>
          <li><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><span><span>Login</span></span></a></li>
          <li><a href="about.php"><span><span>About Us</span></span></a></li>
          <li><a href="contact.php"><span><span>Contacts</span></span></a></li>
          <li><a href="register.php"><span><span>Register</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="hbg">&nbsp;</div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        
        <div id="light" class="white_content">
        <a href = "javascript:void(0)" class="Close" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"></a>
        <center>
      <h2><span>Login</span> here..</h2><div class="clr"></div>
<form method="post" action="logincheck.php">
<table>
<tr>
    <td><label>Username:</label></td>
    <td><input type="text" maxlength="20" name="txt_uname"></td>
</tr>
<tr>
    <td><label>Password:</label></td>
    <td><input type="password" maxlength="20" name="txt_pass"></td>
</tr>
<tr>
    <td><input type="submit" name="submit" value="login"> </td>
    <td><input type="checkbox" name="chkremember">Remember Me</td>
</tr>
</table>
 <p><a href="#">Forgot Your Password?</a></p>
 <p><a href="register.php">Create an Account?</a></p>
 </form>
 <img src="images/img2.jpg" width="300px" height="180px">
 </center>
</div>
<div id="fade" class="black_overlay"></div>        

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
</form>  
          
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Gets your projects</span> done!</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="postlogin.php">Post Project</a></li>
            <li><a href="bidlogin.php">Bid Project</a></li>
            <li><a href="latestpro.php">Latest Projects</a></li>
            <li><a href="browsepro.php">Browse Project</a></li>
            <li><a href="hwitwrks.php">How it works?</a></li>
            <li><a href="help.php">Help</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Rent A Coder</span></h2><div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="search_all.php">Search</a><br /></li>
            <li><a href="search_ruser.php">Search users</a><br />You can search Registered users</li>
            <li><a href="search_tech.php">Search projects by technologies</a><br />You can search projects by its technologies</li>
            <li><a href="search_pro.php">Search projects by title</a><br />You can search projects by project title</li>
            <li><a href="register.php">Registration</a><br />You can be a member of the site by filling this form</li>
          </ul>
        </div>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>About</span></h2>
        <img src="images/white.jpg" width="56" height="56" alt="pix" />
         <p>CodersClub.com is a large outsourcing and crowdsourcing marketplace for small business..We have many satisfied customers from all over the world. We connect over number of buyers and freelancers globally from over different countries regions. Through our website, buyers can hire freelancers..<a href="about.php">Read more...</a></p>
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
        <p><a href="contact.php">CodersClub.com</a></p>
        <p>+91 (846) 066-6940</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"> Copyright <a href="#">CodersClub.com</a>. Posted by CodersClub.com <a href="index.php">Rent A Coder</a></p>
      <ul class="fmenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
