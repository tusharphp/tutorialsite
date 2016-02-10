<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function del(cat)
{
	
	if (confirm("Do you want of delete"))
	{
		window.location.href=cat;
	}
	else
	{
		window.location.href='video_view.php';
	}
}
</script>
</head>

<body>


          <?php
include "connection.php";  
                $vselect=mysql_query("select * from subvideos");
                                      
                     while($vfetch=mysql_fetch_array($vselect))
                                      {
                                         	$vid=$vfetch['id'];
                                             $video=$vfetch['vname'];
                                            
									  
	  echo "<video width='320' height='240' controls preload='auto' data-setup='{}'>";
//  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/mp4'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/mp4'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/ogg'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/webm'/>"; 

echo "</video>"; 

} ?>


</body>
</html>