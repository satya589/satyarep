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
 <form name=f1 method=post action="admin-addinstitute2.php" onSubmit="return val();" >
	<table align=center border=0>
	
	<tr>
	<td>	
	College name:</td><td><input type=text name=cname length=20 onKeyPress="clean();"></td><td id="l2" width=40%></td>
	</tr>
	<tr>
	<td>	
	College code:</td><td><input type=text name=ccode length=20 onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr>
	<td>	
	College\'s short name:</td><td><input type=text name=csn length=20 onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr>
	<td>	
	Address:</td><td><textarea name=add rows=4 cols=20 onKeyPress="clean();"></textarea></td><td id="l9" width=40%></td>
	</tr>
	<tr>
	<td>	
	State:</td><td><input type=text name=state length=20 onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr>
	<td>	
	PIN code:</td><td><input type=text name=pin length=20 onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr>
	<td>	
	office phone no.:</td><td><input type=text name=ofno length=20 onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr>
	<td>	
	Authentication code:</td><td><input type=text readonly name=acode length=20 id="rndnumber" onKeyPress="clean();"></td><td id="l3" width=40%></td>
	</tr>
	<tr><td>&nbsp </td><td></td></tr>
	<tr>
	<td></td><td>
	<input type="submit" name="submit" value=Submit>
	<input type=reset value=Clear></td></tr>
	</table>
	  
	</form>
 
 <script type="text/javascript" language="javascript">
 var rnd1=Math.floor(Math.random()*99);
 var rnd2=Math.floor(Math.random()*99);
 document.f1.rndnumber.value=\'in\'+rnd1+\'te\'+rnd2+\'nt\';
</script>
	
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
