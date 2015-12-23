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
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="#"><small>Where Buyers meet Coders!! </small><span>Coders</span>Club.com</a></h1></div>

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
	   <ul><li><a href="#"><span><span>Home</span></span></a></li>
	 		<li><a href="contact1.php"><span><span>Contacts</span></span></a></li></ul>
       	  </div>
       <div class="clr"></div>
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

          <p>Posted by <a href="#">CodersClub.com</a> &nbsp;|&nbsp; What Its <a href="hwitwrks1.php">mean</a>,&nbsp;| Read <a href="about1.php">More</a> &nbsp;|&nbsp;<?php
    print (date("l dS F Y"));
?></p>
          
          <img src="images/img1.jpg" width="613" height="154" alt="CodersClub.com" id="b1" onmouseover="mouseOver();"  onmouseout="mouseOut();"/>
          <p>Rent A Coder is a site serves as a meeting point between software buyers and software coders. You can easily get earning and hire coders in <a href="#">CodersClub.com</a>. This 
can be only possible when you are a register on this site <a rel="license" href="#">CodersClub.com</a>, 
which means that you are free to use it for any personal or commercial purpose that provided you on this site <a href="#">CodersClub.com</a>.</p>
          <p class="spec"><a href="about1.php" class="rm">Read more</a> &nbsp;|&nbsp; <a href="contact1.php" class="com">Comments</a> &nbsp;|&nbsp; <span class="date"><?php
    print (date("l dS F Y"));
?></span></p>
        </div>
                
        <div class="article">
          <h2><span>Projects</span></h2>
          <div class="clr"></div>
<?php
    include_once('latestprodis1.php');
?>
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
            <li><a href="search_all1.php">Search</a><br /></li>
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
        <li class="active"><a href="#">Home</a></li>
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