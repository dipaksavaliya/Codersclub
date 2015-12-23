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
        <h2><span>About to</span> CodersClub.com</h2><div class="clr"></div>
<p><strong>CodersClub.com is a large outsourcing and crowdsourcing marketplace for small business..</strong></p>
          <p>Coers.Club.com-Rent A Coder is very proffesional and business looking website. Don't get fooled by the site's look, it is not "for the big fish" or something like that. It is just a good site available for everyone. The registration is fee and this site also lists hanreds of new projects everyday.</p>

        
        <p><strong>The Rent A Coder website is a new freelance marketplace that matches employers and providers of freelance services provided via the internet.
</strong></p>
 Service providers, or workers, register and are able to create a portfolio where they include a description of the services which they offer, examples of their work.
Employers register and complete a portfolio, they then post projects outlining the project details and their requirements. Providers are then able to bid for these projects for a fixed price.
<br><br>
We provide a solution to the problem of employers and freelancers not currently having a cost effective, fast and simple way of finding each other.
If your in need of a freelancer, or worker posting a project takes only a few minutes and is free! Once your project is posted it will go up on the site to be viewed by our community and providers, or workers with matching skills will then be able to bid for the Job.
<br><br>
You will typically start getting bids, detailing what the provider, or worker can do, for how much and in what timescale. When you get a bid you will get an email notification to log in to your account to view the details of the bid.
<br><br>
start a project the provider will normally require you to pre-fund your account with a deposit. This is held in a client deposit or escrow account until you release it on completion of the work. A small processing fee may apply.
<br><br>
We guarentee the provider, or worker you choose to hire will fully complete and deliver the contracted work by the project deadline and that the work will meet your standards, or your money will be refunded.
<br><br>
Providers, or workers that fully complete the contracted work by the project deadline and meets the employers required standards will be paid.
We are currently are advertised on microsoft adwords and google adsense, listed in all major search engines.
</p>
</div>
        <div class="article">
          <h2><span>Our</span> Mission</h2><div class="clr"></div>
          <p><strong>CodersClub.com-Rent A Coder is a global software and developement marketplace.</strong></p>
          <p></p>
          <p>Ut ullamcorper velit et nisi feugiat non sagittis tortor pharetra. Mauris ut urna et magna commodo cursus. Curabitur quis elementum arcu. Maecenas eleifend, urna vitae vehicula bibendum, felis tellus tincidunt lorem, at iaculis neque eros ac dui. Nunc malesuada pulvinar suscipit. Phasellus sed tortor quis ligula facilisis aliquam. Aliquam quis magna eu dolor posuere malesuada. Quisque consequat, metus fermentum convallis imperdiet, ante justo pharetra enim, vel commodo ipsum mauris eget purus. Morbi lacinia nisl urna, scelerisque suscipit lacus. Nulla ac orci ut nunc venenatis gravida.</p>
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
        <img src="images/white.jpg" width="56" height="56" alt="CodersClub.com" />
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
      <p class="lf"> Copyright <a href="#">CodersClub.com</a>. Posted by CodersClub.com <a href="#">Rent A Coder</a></p>
      <ul class="fmenu">
        <li class="active"><a href="welcome3.php">Home</a></li>
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