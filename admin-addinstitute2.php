<?php echo '<html>
<head><title>Corporate Campus</title>
<link type="text/css" rel="stylesheet" href="admin.css" />
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
'; include("admin-menu.php"); ;echo '<br><br><br>
 ';

include("../conn.php");
  if(isset($_POST['submit']) )
{

$cname=$_POST['cname'];
$ccode=$_POST['ccode'];
$csn=$_POST['csn'];
$add=$_POST['add'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$ofno=$_POST['ofno'];
$acode=$_POST['acode'];
$date = date('Y/m/d H:i:s');


 $result=mysql_query("INSERT INTO cc.addinst (colname,colcode,colshortname,address,state,pin,office,acode,date) VALUES 
('$cname','$ccode','$csn','$add','$state','$pin','$ofno','$acode','$date')") or die("invalid query");

if($result)
	 echo "Successfully inserted!";
     

mysql_close($con);
} 


;echo '</div>
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
