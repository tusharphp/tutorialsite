<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connection</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if (!$con)
{
	die ('coulnot connect'.mysql_error());
}
mysql_select_db("subproject",$con);
?>
</body>
</html>