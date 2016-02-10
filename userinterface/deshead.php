<?php
$gethdid=$_GET['hid'];
$getsubname=$_GET['sname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/SubProject/userinterface/style.css">
<link href="/SubProject/userinterface/font-awesome-4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	
		
	
</head>

<body>
<!DOCTYPE html>

<?php include ("userheader.php");?>

<div id="headingtext"><h2><?php echo $getsubname?> Tutorial</h2></div>	
<div class="mainheading">   <input type="text" placeholder="Search">
    <input type="submit" value="Search"></div>
	<article>  	
<?php

	include("connection.php");
  

    
    
	$hdview=mysql_query("select * from desciptionentry where id='$gethdid'");
	while($hdrow=mysql_fetch_array($hdview))
	{
		$head=$hdrow['heading'];
		$des=$hdrow['desciption'];
		echo $head;
	
         echo "<h1> $head </h1>";
		echo "<p> $des</p>";
		
		
	}
	
	?>
  
    
    </article>
			
<div id="rnav">
<img src="/SubProject/userinterface/img/ad2.png" />
<img src="/SubProject/userinterface/img/ad3.gif" />
</div>
</body>
</html>