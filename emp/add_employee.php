<html><head>
<title>Add New Record in MySQL Database</title>
<script>
function formValidation()
{

var uname = document.registration.emp_name;
var uadd = document.registration.emp_address;
var uzip = document.registration.emp_salary;


if(allLetter(uname))
{
if(alphanumeric(uadd))
{ 
if(allnumeric(uzip))
{

}
}
}
return false;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Employee must have alphabet characters only');
uname.focus();
return false;
}
}
function alphanumeric(uadd)
{ 
var letters = /^[0-9a-zA-Z]+$/;
if(uadd.value.match(letters))
{
return true;
}
else
{
alert('Employee address must have alphanumeric characters only');
uadd.focus();
return false;
}
}
function allnumeric(uzip)
{ 
var numbers = /^[0-9]+$/;
if(uzip.value.match(numbers))
{
alert('Form Successfully Submitted');
window.location='reg.html';
return true;

}
	else
{
alert('salary must have numeric characters only');
uzip.focus();
return false;
}


//alert('Form Successfully Submitted');
//window.location='thankyou.html';
//<form action="https://select.worldpay.com/wcc/purchase" 
//onsubmit="window.location = 'thankyou.html';" target="_blank" method="post">
return true;
}


</script>
</head>
<style>
input, select {  

float: center;  
font-family:Arial, Helvetica, sans-serif ;
color:#30F;
font-size:15px;
margin-bottom: 5px;  
} 
tr, td {  

float: center;  
font-family:Arial, Helvetica, sans-serif ;
color:#F00 ;
font-size:20px;

margin-bottom: 10px;  
}   
body {
background-color:#99FFFF;
text-align: center;
height:40%; width:80%;
}
 
 
.index {
position:relative;
background-image:url('back.jpg');
background-repeat:no-repeat;
height:525px; width:701px;
}

</style>
<body bgcolor="#009966">

<div style="position: absolute; left: 50; top: 40; right: 50; bottom: 40; background-color:#0FC; background:url(images10.jpg); alignment-adjust:middle; "> 
<?php
if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $emp_name = addslashes ($_POST['emp_name']);
   $emp_address = addslashes ($_POST['emp_address']);
}
else
{
   $emp_name = $_POST['emp_name'];
   $emp_address = $_POST['emp_address'];
}
$emp_salary = $_POST['emp_salary'];

$sql = "INSERT INTO employee ".
       "(emp_name,emp_address, emp_salary, join_date) ".
       "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";
mysql_select_db('test');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

header("location:reg.html");
mysql_close($conn);
}
else
{
?>
<br /><br /><br />
<form method="post" action="thankyou.html" name="registration" >
<table align="center" width="300" height="120" border="0" cellspacing="1" cellpadding="1" background="images7.jpg" >
<tr>
<td width="800"></td>
<td></td>
</tr>
<tr>
<td width="800">Employee Name</td>
<td><input name="emp_name" type="text" id="emp_name"></td>
</tr>
<tr>
<td width="800">Employee Address</td>
<td><input name="emp_address" type="text" id="emp_address"></td>
</tr>
<tr>
<td width="800">Employee Salary</td>
<td><input name="emp_salary" type="text" id="emp_salary"></td>
</tr>
<tr>
<td width="800"> </td>
<td> </td>
</tr>
<tr>
<td width="800"> </td>
<td>
<input name="registration" type="submit" id="registration" value="Add Employee" onClick="return formValidation()";>
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</div>
</html>