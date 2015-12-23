<?php
    session_start();
    $uid=$_SESSION['uid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >
<html>
<head>
<title>CodersClub.com-Rent A Coder</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript">
function mouseOver()
{
document.getElementById("b1").src ="images/img2.jpg";
}
function mouseOut()
{
document.getElementById("b1").src ="images/img1.jpg";
}
</script>


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
        /*    filter: alpha(opacity=80);      */
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
      <div class="logo"><h1><a href="#"><small>Where Buyers meet Coders!! </small><span>Coders</span>Club.com</a></h1></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="#"><span><span>Home</span></span></a></li>
          <li><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'"><span><span>Login</span></span></a></li>
          <li><a href="about.php"><span><span>About Us</span></span></a></li>
          <li><a href="contact.php"><span><span>Contacts</span></span></a></li>
          <li><a href="register.php"><span><span>Register</span></span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<center><div><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"- codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="1000" height="130">
  <param name="movie" value="1234.swf" />
  <param name="quality" value="high" />
  <param name="allowScriptAccess" value="always" />
  <param name="wmode" value="transparent">
     <embed src="1234.swf"
      quality="high"
      type="application/x-shockwave-flash"
      WMODE="transparent"
      width="1000"
      height="130"
      pluginspage="http://www.macromedia.com/go/getflashplayer"
      allowScriptAccess="always" />
</object></div></center>
  
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
  <p><a href="register.php">Create an Account?</a></p>
 </form>
 <img src="images/img2.jpg" width="300px" height="200px">
 </center>
</div>
<div id="fade" class="black_overlay"></div>
        
        
          <h2>Rent A Coder</h2><div class="clr"></div>
          <p>Posted by <a href="#">CodersClub.com</a> &nbsp;|&nbsp; What Its <a href="hwitwrks.php">mean</a>,&nbsp;| Read <a href="about.php">More</a> &nbsp;|&nbsp;<?php
    print (date("l, dS F 'y"));
?></p>
          
          <img src="images/img1.jpg" width="613" height="154" alt="CodersClub.com" id="b1" onmouseover="mouseOver();"  onmouseout="mouseOut();"/>
          <p>Rent A Coder is a site serves as a meeting point between software buyers and software coders. You can easily get earning and hire coders in <a href="index.php">CodersClub.com</a>. This 
can be only possible when you are a register on this site <a rel="license" href="index.php">CodersClub.com</a>, 
which means that you are free to use it for any personal or commercial purpose that provided you on this site <a href="#">CodersClub.com</a>.</p>
          <p class="spec"><a href="about.php" class="rm">Read more</a> &nbsp;|&nbsp; <a href="contact.php" class="com">Comments</a> &nbsp;|&nbsp; <span class="date"><?php
    print (date("l dS F Y"));
?></span></p>
        </div>
        <div class="article">
          <h2><span>Latest 10</span> projects</h2><div class="clr"></div>
          Posted by <a href="#">CodersClub.com</a> &nbsp;|&nbsp; Steps for post <a href="hwitwrks.php">projects</a>
          
          <?php
    include_once('latestprodis.php');
?>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Gets your projects</span>done! </h2><div class="clr"></div>
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
        <img src="images/white.jpg" width="56" height="56" alt="CodersClub.com" />
        <p>CodersClub.com is a large outsourcing and crowdsourcing marketplace for small business..We have many satisfied customers from all over the world. We connect over number of buyers and freelancers globally from over different countries regions. Through our website, buyers can hire freelancers..<a href="about.php">Read more...</a></p>
      </div>
      <div class="col c2">
        <h2><span>Join Us On..</span></h2>
        <ul class="sb_menu">
          <li><a href="fb.php"><img src="images/f.jpg" alt="facebook"> facebook</a></li>
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
      <p class="lf"> Copyright <a href="#">CodersClub.com</a>. Posted by CodersClub.com <a href="#">Rent A Coder</a></p>
      <ul class="fmenu">
        <li class="active"><a href="index.php">Home</a></li>
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
