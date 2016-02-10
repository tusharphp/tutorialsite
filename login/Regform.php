<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="/SubProject/login/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="/SubProject/login/regstyle.css" rel="stylesheet" type="text/css" />
<script src="/SubProject/login/jquery-1.9.1.js"  type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#name").keyup(function() {
var name = $('#name').val();
if(name=="")
{
$("#disp").html("");
}
else
{
$.ajax({
type: "POST",
url: "cheaker.php",
data: "name="+ name ,
success: function(html){
$("#disp").html(html);
}
});
return false;
}
});
});	</script>
</head>

<body>

<link href='/SubProject/login/regstyle.css' rel='stylesheet' type='text/css'>
<link href="/SubProject/login/font-awesome-4.3.0/css/font-awesome.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" />

<div class="testbox">
  <h1>Registration</h1>

  <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
     
      <hr>
   <label id="icon" for="name"><i class=" fa fa-user"></i></label>
  <input type="text" name="name" id="name1" placeholder="Name" required/>
     
  <label id="icon" for="name"><i class="fa fa-area-chart  "></i></label>
  
  <input type="text" name="emai" placeholder="Email" id="name"/>
  
  
  <div id="disp" class="displaymsg">uiuiuiui</div> 
  <label id="icon" for="name"><i class="fa fa-shield"></i></label>
  <input type="password" name="password" id="name" placeholder="Password" required/>
   <label id="icon" for="name"><i class="fa fa-image"></i></label>
   <input type="file" name="file" id="file"  />
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <input type="submit" class="button" name="ok" value="Register">
  </form>
  <?php
  include("connection.php");
  if (isset($_POST['ok']))
  {
	  $n=$_POST['name'];
	  $e=$_POST['emai'];
	  $p=$_POST['password'];
	  
	  $file=$_FILES['file'];
	  $name1=$file['name'];
	  $type=$file['type'];
	  $size=$file['size'];
	  $tmppath=$file['tmp_name'];
	  if ($name1!=" ")
	  {
		  move_uploaded_file($tmppath,'image/'.$name1);
	  }
	  $regsql=mysql_query("insert into admininfo values (null,'$n','$e','$p','$name1')");
	  if ($regsql)
	  {?>
		  <script> alert('Account Created');</script>
          <?php
	  }
	  
  }
   
  ?>
  
  
</div>
</body>
</html>