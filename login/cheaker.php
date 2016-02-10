<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 
  include ("connection.php");
 

if(isset($_POST['name']))
{
$name=mysql_real_escape_string($_POST['name']);
$query=mysql_query("select * from admininfo where logid='$name'");
$row=mysql_num_rows($query);
if($row==0)
{
echo "<span style='color:green;'>Available</span>";?>
<script>$(".button").show();</script>
<?php
}
else
{
echo "<span style='color:red;'>Already exist</span>";?>
<script>$(".button").hide();</script>
<?php
}
}
?>
</body>
</html>