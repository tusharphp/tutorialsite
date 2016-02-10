<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "connection.php";
if($_POST['id'])
{
$id=mysql_real_escape_string($_POST['id']);

$delsql="delete from entrysub where id='$id'";
mysql_query( $delsql);
}
 
?>
</body>
</html>