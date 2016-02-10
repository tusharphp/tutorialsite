<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
<link rel="stylesheet" href="/SubProject/userinterface/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/SubProject/userinterface/font-awesome-4.3.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link async href="http://fonts.googleapis.com/css?family=Averia%20Sans%20Libre" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/  />
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<title>User Panel</title>
	
		
</head>
<body>
<header>
	    
        
           <div id="logo">
    </div>
 <!--      <div class="wrap">
	<div class="cube">
		<div class="front"><img src="/SubProject/userinterface/img/iconphp.jpg"></div>
		<div class="back">back</div>
		<div class="top">top</div>
		<div class="bottom">bottom</div>
		<div class="left">left</div>
		<div class="right">right</div>
	</div>
</div>-->
    <div id="socialmedia">
    		<div class="iconbackgroundfooter"> <i class="fa fa-twitter fa-2x"> </i></div>
    <div class="iconbackgroundfooter"> <i class="fa fa-facebook fa-2x" style="color:#00F;"> </i></div>
    <div class="iconbackgroundfooter"> <i class="fa fa-pinterest fa-2x"> </i></div>
    <div class="iconbackgroundfooter"> <i class="fa fa-google-plus fa-2x"> </i></div>
    <div class="iconbackgroundfooter"> <i class="fa fa-linkedin fa-2x"> </i></div>
    </div>
    
    <div id="navi">
        <div id='cssmenu'>
<ul>
   <li class='active'><a href='/SubProject/userinterface/userinterface.php'>Home</a></li>
   <li><a>Subjects</a>
   <ul>
   <?php
include("connection.php");
$subd=mysql_query("select * from entrysub");
  while($row=mysql_fetch_array($subd))
							{
								$subsel=$row['subname'];
								$subselid=$row['id'];
								$simg=$row['subimg'];
?>


		      <li><?php echo $subsel;?></li>
<?php	}?>
   </ul>
   
   
   
   </li>
   <li><a href='/SubProject/userinterface/videosub.php'>Video Tutiols</a></li>
   <li><a href='#'>Contact</a></li>
</ul>
</div>
</div>
</header>
</body>
</html>