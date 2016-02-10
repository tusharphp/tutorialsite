<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ("connection.php");
$subid=$_GET['id'];

$subedit=mysql_query("select * from entrysub where id='$subid'");
while($row=mysql_fetch_array($subedit))
{
	$sname=$row['subname'];
}





?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="text" name="snedit" value="<?php echo $sname; ?>" />
<input type="hidden" name="hidden" value="<?php echo $subid; ?>" />
<input type="submit" name="subedit" value="Save" />
</form>
<?php
if (isset($_POST['subedit']))
{
	$sn=$_POST['snedit'];
	$sid=$_POST['hidden'];
	echo $sn;
	$subupdate=mysql_query("update entrysub set subname='$sn' where id='$sid'");
	
	if ($subupdate)
	{
		echo "<script> alert('Upadated')</script>";
		echo "<script>window.location.href='Subject_Update.php'</script>";
	}
	
	
}
?>


</body>
</html>