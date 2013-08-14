<?php echo '<html>
<head><title>Corporate Campus</title>
<link type="text/css" rel="stylesheet" href="admin.css" />
<script type="text/javascript">
function val()
{
if(document.f1.usr.value=="")
{
document.getElementById(\'err1\').innerHTML="Enter user name!";
document.f1.usr.focus();
return false;
}
else if(document.f1.pwd.value=="")
{
document.getElementById(\'err2\').innerHTML="Enter password!";
document.getElementById(\'err1\').innerHTML="";
document.f1.pwd.focus();
return false;
}
else
{
document.getElementById(\'err1\').innerHTML="";
document.getElementById(\'err2\').innerHTML="";
return true;
}
}

</script>
';
	 session_start();
     if(!isset($_SESSION['userid'])) {
     header("location:admin.php");
    } else {
	 $uname=ucfirst($_SESSION['username']);  
     }	 
 ;echo '
</head>
<body style="background-image: url(../images/texture2.jpg); background-repeat: repeat;">
<div id="top1"></div>
<div id="bar"></div>
<div id="top">
     <div style="Float:left;width:150px;height:79px;background-color:white;padding-left:100px"><a href="../home.html"><img src="../images/logo.jpg" /></a></div>
     <div style="Float:right;height:79px;background-color:white">
	 <span style="font-family:trebuchet MS, sans-serif;font-size:60px;padding-right:100px;color:#D5D5D5">Corporate Campus</span>
	 </div> 
</div>
<div id="bar"></div>
<div class="content">
'; include("admin-menu.php"); ;echo '<br>


		';
	 
	include("../conn.php");
    $id=$_GET['id'];
    $data = mysql_query("SELECT * FROM cc.instreg WHERE iid='$id'") 
    or die(mysql_error()); 
	$info = mysql_fetch_array( $data );
   
    Print "<br><center class='viewprofile'><table class='hov' border cellpadding=8>"; 
   
    
   ;echo '	<tr ><td style="width:30%">College name :</td><td>'; echo $info['colname'];;echo '</td></tr>
	<tr><td>College code :</td><td>'; echo $info['colcode'];;echo '</td></tr>
	<tr><td>College short name :</td><td>'; echo $info['colshortname'];;echo '</td></tr>
	<tr><td>User name:</td><td>'; echo $info['username'];;echo '</td></tr>
	<tr><td>Password :</td><td>********</td></tr>
	<tr><td>Authentication code:</td><td>'; echo $info['acode'];;echo '</td></tr>
	<tr><td>Address :</td><td>'; echo $info['address'];;echo '</td></tr>
	<tr><td>State :</td><td>'; echo $info['state'];;echo '</td></tr>
	<tr><td>PIN code :</td><td>'; echo $info['pin'];;echo '</td></tr>
	<tr><td>mobile no. :</td><td>'; echo $info['mobile'];;echo '</td></tr>
	<tr><td>Office Landline :</td><td>'; echo $info['office'];;echo '</td></tr>
	<tr><td>Contact\'s firstname :</td><td>'; echo $info['firstname'];;echo '</td></tr>
	<tr><td>Contact\'s last name:</td><td>'; echo $info['lastname'];;echo '</td></tr>
	<tr><td>E-mail id :</td><td>'; echo $info['email'];;echo '</td></tr>
	<tr><td>Registered on :</td><td>'; echo $info['date'];;echo '</td></tr>
	 </table></center><br>
	 
	 
	
</div>
<div id="bar2"></div>
<div id="footer">
<center><span style="font-size:8pt;color:black"> &copy Copyrights Reserved 2013</span></center>
	<ul id="footermenu">
	<li><a href="../home.html">Home</a></li>
	<li><a href="../student-login.php">Student</a></li>
	<li><a href="../institute-login.php">Institute</a></li>
	<li><a href="../corporate-login.php">Corporate</a></li>
	
	</ul>
</div>
</body>
</html>';?>
