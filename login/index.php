<?php session_start(); 
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
        <link rel="stylesheet" href="css/style.css">   
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form form--login">

        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input id="login__username" type="text" class="form__input" placeholder="Username" required name="lid">
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input id="login__password" type="password" class="form__input" placeholder="Password" required name="pass">
        </div>

        <div class="form__field">
          <input type="submit" value="Sign In" name="ok">
        </div>

      </form>

      <p class="text--center">Not a member? <a href="/SubProject/login/Regform.php">Sign up now</a> <span class="fontawesome-arrow-right"></span></p>

    </div>

  </div>
  <?php
  include("connection.php");
 if (isset($_POST['ok']))
 {
	 $log=$_POST['lid'];
	 $pa=$_POST['pass'];
	
	$sqllog=mysql_query("select * from admininfo where logid='$log'");
	while($row=mysql_fetch_array($sqllog))
	{
		$adid=$row['id'];
		$n=$row['name'];
		$i=$row['image'];
		$_SESSION['adminname']=$n;
		$_SESSION['adminimage']=$i;
		$_SESSION['adminid']=$adid;
		$l=$row['logid'];
		$pas=$row['password'];
		if ($log==$l && $pa==$pas)
		{?>
			<script> alert('login Succesfully') </script>
            <?php echo "<script>window.location.href='../Admin/Admin Dashboard/Admin-Panel.php'</script>";
            
				}
		else
		{
			?>
			<script> alert('Invalid login') </script>
            <?php
		}
		
	}

	 
	 
 }
  
  ?>

</body>
    
    
    
    
    
  </body>
</html>
