<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if($_POST['id'])
{
$id=mysql_escape_string($_POST['id']);
$firstname=mysql_escape_string($_POST['firstname']);
$file=mysql_escape_string($_POST['imgsub']);
$file=$_FILES['file'];
	  $name1=$file['name'];
	  $type=$file['type'];
	  $size=$file['size'];
	  $tmppath=$file['tmp_name'];
	  if ($name1!=" ")
	  {
		  move_uploaded_file($tmppath,'image/'.$name1);
	  }

$sql ="update entrysub set subname='$firstname', subimg='$name1' where id='$id'";
mysql_query($sql);
}
?>
</body>
</html>