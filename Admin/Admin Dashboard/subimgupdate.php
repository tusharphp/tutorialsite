<?php
$getimgid=$_GET['simgid'];
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<input type="file" name="file"  />
<input type="submit" name="imgup"  value="Update"/>
</form>
<?php
include "connection.php";
if (isset($_POST['imgup']))
{
	$file=$_FILES['file'];
	  $name1=$file['name'];
	  $type=$file['type'];
	  $size=$file['size'];
	  $tmppath=$file['tmp_name'];
	  if ($name1!=" ")
	  {
		  move_uploaded_file($tmppath,'image/'.$name1);
	  }
echo $name1;
$sql ='update entrysub set subimg="$name1" where id="$getimgid"';
if ($sql)
{
	echo ("Update Succefully");
}
}

?>
</body>
</html>