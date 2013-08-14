<?php echo '<html>
<head><title>Corporate Campus</title>
<link type="text/css" rel="stylesheet" href="admin.css" />
<link href="../images/icon.png" rel="icon" type="image/png" />
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
<div class="content"><br><br><br><br>
	<table width="84%" height="508">
	 <tr width=100% height=100%>
	 <td width="65%"><div class="std-content"><span style="margin-left:60px;color:green;font-size:40px">Administrator</span></div></td>
	 <td width="30%"  valign="top"><div class="std-login">
	  <form name=f1 method=post action="" onSubmit="return val();">
	  <table>
	  <tr><center><div style="color:#BEAC4F;font-size:18px;">Login here</div></center><br></tr>	  
	  <tr><span >User name</span><br></tr>
	  <tr><input type="text" name="usr" autofocus length=20></tr>
	  <div id="err1" style="color:red;font-size:12px;"></div>
	   <tr><span>Password<span><br></tr>
	  <tr><input type="password" name="pwd"></tr>
	  <div id="err2" style="color:red;font-size:12px;">
	     ';
if(isset($_POST['submit'])){
include("../conn.php");
$u=$_POST['usr'];
$p=$_POST['pwd'];
$query = "SELECT * FROM cc.adminlogin where(username='".$_POST['usr']."') AND (password='".$_POST['pwd']."')";
$res=mysql_query($query);
//echo $res;
$row=mysql_fetch_array($res);
if(mysql_num_rows($res) > 0) {
    session_start();
    $_SESSION['userid'] = $row['aid'];
    $_SESSION['username'] = $row['username'];
    header("location:admin-home.php");
}
else {
echo "Invalid username/password!";
}
}
;echo '	  </div><br>
	  <tr><input name="submit" type="submit" value="submit" onclick="return val();"><a href=""><span style="color:#BEAC4F;font-size:12px;margin-left:10px">Forgot Password?</span></a></tr>
	  </table>
	  </form>
	  </div>	 </td>
	 
	 </tr>
</table>
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
