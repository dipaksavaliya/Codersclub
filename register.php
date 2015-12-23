<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >

<html>
<head>
<title>CodersClub.com_Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<script type="text/javascript" src="js/codersclub.js"></script>        
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/state1.js"></script>
<script type="text/javascript" src="js/validation_regi.js"></script>

<style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 450%;
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
          <li class="active"><a href="register.php"><span><span>Register</span></span></a></li>
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
          <h2><span>Rent A Coder</span></h2><div class="clr"></div>
          <p>You can find more job and projects at our website. For post any projects or bid on any of there projects first of all you must have to register over here.</p>
        </div>
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
          <h2><span>Register</span> form:</h2><div class="clr"></div>         
          <form method="post" name="frm">
<ol><li>

        <label>First Name:</label>
        <input type="text" name="txt_fname" class="text"  maxlength="10" id="txt_fname" onfocus="white()"/>
        </li><li>
        
        <label>Last Name:</label>
        <input type="text" name="txt_lname" class="text" onfocus="checkname()">
        </li><li>
    
        <label>Gender:</label>
        <input type="radio" name="rb_gender" value="Male">Male&nbsp;&nbsp; <input type="radio" name="rb_gender" value="Female">Female 
        </li><li><hr>
    
        <label>Skills:</label>
        <table width="90%">
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="web designing" >Web designing</td>
                <td><input type="checkbox" name="chk_skill[]" value="php">Php</td>
                <td><input type="checkbox" name="chk_skill[]" value="database">Database Administration</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="javascript">Javascript</td>
                <td><input type="checkbox" name="chk_skill[]" value="ajax">Ajax</td>
                <td><input type="checkbox" name="chk_skill[]" value="drupal">Drupal</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="joomla">Joomla</td>
                <td><input type="checkbox" name="chk_skill[]" value="vb">VB</td>
                <td><input type="checkbox" name="chk_skill[]" value="j2ee">J2EE</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="my sql">My Sql</td>
                <td><input type="checkbox" name="chk_skill[]" value="orcle">Oracle</td>
                <td><input type="checkbox" name="chk_skill[]" value="jquery">jQuery</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="sql" >Sql</td>
                <td><input type="checkbox" name="chk_skill[]" value="travelling">HTML</td>
                <td><input type="checkbox" name="chk_skill[]" value="jsp">JSP</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="dhtml">DHTML</td>
                <td><input type="checkbox" name="chk_skill[]" value="mobile app">Mobile App</td>
                <td><input type="checkbox" name="chk_skill[]" value="fortran">Fortran</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="c++" >C++ Programming</td>
                <td><input type="checkbox" name="chk_skill[]" value="c" >C Programming</td>
                <td><input type="checkbox" name="chk_skill[]" value="game design">Game Design</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="graphics" >Graphics</td>
                <td><input type="checkbox" name="chk_skill[]" value="animation" >Animation</td>
                <td><input type="checkbox" name="chk_skill[]" value="computer graphics">Computer Graphics</td>
            </tr>    
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="apache">Apache</td>
                <td><input type="checkbox" name="chk_skill[]" value="perl">Perl</td>
                <td><input type="checkbox" name="chk_skill[]" value="cobol">COBOL</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="c#">C# Programming</td>
                <td><input type="checkbox" name="chk_skill[]" value="linux">Linux</td>
                <td><input type="checkbox" name="chk_skill[]" value="facebook">Facebook</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="dos">DOS</td>
                <td><input type="checkbox" name="chk_skill[]" value="java">Java</td>
                <td><input type="checkbox" name="chk_skill[]" value="visual basic">Visual Basic</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="visual foxpro">Visual Foxpro</td>
                <td><input type="checkbox" name="chk_skill[]" value="python">Python</td>
                <td><input type="checkbox" name="chk_skill[]" value="unix">UNIX</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="virtuemart">Virtuemart</td>
                <td><input type="checkbox" name="chk_skill[]" value="sap">SAP</td>
                <td><input type="checkbox" name="chk_skill[]" value="web security">Web Security</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="website management">Website Management</td>
                <td><input type="checkbox" name="chk_skill[]" value="windows desktop">Windows Desktop</td>
                <td><input type="checkbox" name="chk_skill[]" value="xml">XML</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="software architecture">Software Architecture</td>
                <td><input type="checkbox" name="chk_skill[]" value="software testing ">Software Testing </td>
                <td><input type="checkbox" name="chk_skill[]" value="android">Android</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="j2me">J2ME</td>
                <td><input type="checkbox" name="chk_skill[]" value="copywriting">Copywriting</td>
                <td><input type="checkbox" name="chk_skill[]" value="publishing">Publishing</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="3d animation">3D Animation</td>
                <td><input type="checkbox" name="chk_skill[]" value="css">CSS</td>
                <td><input type="checkbox" name="chk_skill[]" value="banner design">Banner Design</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="flash">Flash</td>
                <td><input type="checkbox" name="chk_skill[]" value="graphic design">Graphic Design</td>
                <td><input type="checkbox" name="chk_skill[]" value="logo design">Logo Design</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="maya">Maya</td>
                <td><input type="checkbox" name="chk_skill[]" value="photoshop">Photoshop</td>
                <td><input type="checkbox" name="chk_skill[]" value="data entry">Data Entry</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="autocad">AutoCAD</td>
                <td><input type="checkbox" name="chk_skill[]" value="marketing">Marketing</td>
                <td><input type="checkbox" name="chk_skill[]" value="managemnt">Managment
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="chk_skill[]" value="business plans">Business Plans</td>
                <td><input type="checkbox" name="chk_skill[]" value="computer security">Computer Security</td>
                <td><input type="checkbox" name="chk_skill[]" value="ecommerce">eCommerce</td>
            </tr>
            </table><hr>
              
            <label>Email:</label>
            <input type="text" name="txt_email" class="text"/>
            </li><li>
            
            <label>Contact NO:</label>
            <input type="text" name="txt_contact" />
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
       //               echo "</select>";
                            ?>
            </select>
            </li>
            <table>
            <tr>
            <td>State</td></tr>
            <tr>
            <td>
            <div id="txtHint">
                    <select name="cmb_state" class="sel">
                         <option>-----Select-----</option>
                    </select>
            </div></td></tr>
                    
            <tr>
            <td>City</td></tr>
            <tr>
            <td>
            <div id="txt">
                    <select name="cmb_city" class="sel">
                         <option>-----Select-----</option>
                    </select>
            </div></td></tr>
            </table><li><hr>
    
        <label>Username:</label>
        <input type="text" name="txt_uname" >
     
        </li><li>
    
        <label>Password:</label>
        <input type="password" name="txt_pass" onclick=> 
        </li><li>
   
        <label>Looking For:</label>
        <input type="radio" name="rb_look" value="1" id="buyer" >Buyer&nbsp;&nbsp; <input type="radio" name="rb_look" value="2" id="coder">Coder&nbsp;&nbsp;<input type="radio" name="rb_look" value="3" id="both">Coder & buyer both
        </li><li><hr>
    
        <label>Add Skill:</label>
        <input type="text" name="txt_addskill" class="text" /> 
        </li><li>
    
        <label>Company Name:</label>
        <input type="text" name="txt_company" class="text" /> 
        </li><li>
        
        
        <label>Company Address:</label>
        <textarea id="message" name="txt_companyadd" rows="5" cols="50" class="text" /></textarea>
        </li><li> 
    

        <input type="submit" value="Submit" name="btn_sub" onclick="c1()" />
        <input type="reset" value="Reset">
                
        <?php
        include_once('conn.php');    
        if(isset($_REQUEST['btn_sub']))
        {
        $fn=$_REQUEST['txt_fname'];
        $ln=$_REQUEST['txt_lname'];
        $ge=$_REQUEST['rb_gender'];
        $sk=$_REQUEST['chk_skill'];
        $skil=implode(" , ",$sk);
        $em=$_REQUEST['txt_email'];
        $cn=$_REQUEST['txt_contact'];
        $co=$_REQUEST['cmb_country'];
        $sta=$_REQUEST['cmb_state'];
        $ct=$_REQUEST['cmb_city'];
        $un=$_REQUEST['txt_uname'];
        $pw=$_REQUEST['txt_pass'];
        $lk=$_REQUEST['rb_look'];
        $as=$_REQUEST['txt_addskill'];
        $cn=$_REQUEST['txt_company'];
        $cd=$_REQUEST['txt_companyadd'];
        
        $qry1="insert into user(username,password,usertype) values('$un','$pw','$lk')";
        $reg1=mysql_query($qry1);
        $qry="insert into login(userid,fname,lname,gender,skill,email,contactno,country,state,city,addskill,companyname,companyadd) values ((select max(userid) from user),'$fn','$ln','$ge','$skil','$em','$cn','$co','$sta','$ct','$as','$cn','$cd')";
      $reg=mysql_query($qry);
      
      
    if($reg AND $reg1)
    {
        
        $_SESSION['uname']=$_POST["txt_uname"];
        $_SESSION['fname']=$_POST["txt_fname"];
        
       
        $utype=$_POST['rb_look'];
        if($utype=='1')
        {
            header('location:registersuccess1.php');     
        }
        else if($utype=='2')
         {
             header('location:registersuccess2.php');
         }     
         else
         {
             header('location:registersuccess3.php');
         }      
    }
    else
    {
        echo "Your register hasn't been submited";
    }
        }
    
//   insert into login(userid,fname,lname,gender,skill,email,country,state,city,addskill,companyname,companyadd) values ('select max(userid) from user','nimi','sal','female','php','nn@gmail.com','india','gujarat','surat','yuyu','tyty','rtg')     
    
?>
   
        <div class="clr"></div>
          </li></ol>
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
      <p class="lf"> Copyright <a href="index.php">CodersClub.com</a>. Posted by CodersClub.com <a href="index.php">Rent A Coder</a></p>
      <ul class="fmenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contacts</a></li>
        <li class="active"><a href="register.php">Register</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
