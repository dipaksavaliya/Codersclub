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
                   <h2><span>Rent A Coder</span></h2><div class="clr"></div>
          <p>You can post your projects here with full defination of that project and attachment is also required.
          All the fields should be fill up and required.</p><hr>
        
          <h2><span>Post your</span> Project here:</h2> 
          <div class="clr"></div>
<hr>
          <form method="post" enctype="multipart/form-data" name="frm" >
<ol><li>

        <label>Project Name:</label>
        <input type="text" name="txt_proname" class="text" />
        </li><li>
        
        
        <label>Required Technologies</label>
        <input type="text" name="txt_tech" class="text"/>
        </li><li>
        
    
        <label>Project defination:</label>
        <textarea id="message" name="txt_prodef" rows="5" cols="50" class="text" /></textarea>
        </li><li><hr>
        
        <label>Attach File:</label>
        <input type="file" name="file" />
        </li><li><hr>
        
                
        <label>Project Budget111111111111:</label>
        <input type="text" name="txt_probud" />USD
        </li><li>
        
        <label>Bidding Period:</label>
        <input type="text" name="txt_bidperiod" >Days(max 30 days)
        </li><li>
        <hr>
        
        <h4>*project will be reviewed by staff before it goes live.</h4>  
        <input type="submit" value="Post Project" name="btn_postp">&nbsp;&nbsp; 
        <input type="reset" value="Reset">
        <br><br>
<?php
        include_once('conn.php');
        session_start();
        $un=$_SESSION['uname'];
        $uid=$_SESSION['userid'];
        $pn=$_REQUEST['txt_proname'];
        $pt=$_REQUEST['txt_tech'];
        $pd=$_REQUEST['txt_prodef']; 
        $file=$_REQUEST['file'];
        $pb=$_REQUEST['txt_probud'];
        $bidp=$_REQUEST['txt_bidperiod'];
        $sd=$_date['y-m-d'];
 //       $ed=$_REQUEST['y-m-d'];
        
        
          if(isset($_REQUEST['btn_postp']))
        {
        $qryp="insert into project(userid,username,proname,protech,prodef,fileup,probudget,bidperiod,startdate,enddate) values ('$uid','$un','$pn','$pt','$pd','$file','$pb','$bidp',now(),date_add( now( ) , INTERVAL $bidp DAY ))";
       $rs=mysql_query($qryp);
        
        if($rs)
    {
     
 //    DATEADD(DD,'$bidp',GATEDATE())  
        //echo "You Login As  ".$usrid;
        session_start();
       $_SESSION['proname']=$_POST['txt_proname'];
       $_SESSION['prodef']=$_POST['txt_prodef']; 
       
        header('location:postsuccess3.php');
    }
    else
    {
        echo "<h2><span>Your Project Hasn't Been Posted Successfully!!</span></h2>";        
    
    }
        }
    
    include_once('fileupload.php');


//SELECT * FROM `project` WHERE curdate() between startdate and enddate    
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
<font size="5" color="#0689D7" face="arial"><b>You can Bid on Project Its Free!!</b></font><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;
<img src="images/bidp1.jpg" />
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