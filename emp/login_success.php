
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php

session_start();
//if(!session_is_registered("myusername"))
if(!isset($_SESSION['user']))
{
header("location:index.php");

}
else if($_SESSION['user']=='admin')
{
header("location:admin.php");

}
else
{
?>
<html>
<body>
Welcome <?php echo $_SESSION['user'];

?>
</body>
</html><?php header("location:add_employee.php");
}
?>