<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if (isset($_GET['vdelid']))
{
$id=$_GET['vdelid'];
$vselect=mysql_query("select * from subvideos where id='$id'");
                                      
                     $vfetch=mysql_fetch_array($vselect);
                                      
                                         	
                                             $video=$vfetch['vname'];
									  
$sql=mysql_query("delete from subvideos where id='$id'");
unlink("videos/".$video."");
if($sql )
 {
	 
	 echo "<script> alert('Data Delete Successfully');</script>";
	 echo "<script> window.location.href=''</script>";
	 
 } 
 else
 {
	 echo "<script>alert('Data Not Deleted');</script>";
	 echo "<script> window.location.href=''</script>";
 }
}
?>

</body>
</html>