<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                            
                             <?php
							 include("connection.php");
							 $adminproup=mysql_query("select * from admininfo where id='$adid'");
							 while($adproup=mysql_fetch_array($adminproup))
							 {
								 
								 $adnameup=$adproup['name'];
							 }
							 ?>
                            
                             <label>Name </label><input type="text" name="adnup" value=" <?php echo $adnameup;?>" />
                                                        
                                                                                 
                           
                          
                          <input type="submit" name="adminup" value="Update">
                          </form>
                           <?php
						   if (isset($_POST['adminup']))
						   {
							   $adnup=$_POST['adup'];
							   $adidup=$_POST['adid'];
							   							   
							   $adupdate=mysql_query("update admininfo set name='$adnup' where id='$adid'");
							   if ($adupdate)
							   {
								   ?><script> alert ('Updated Succefully');</script>
                                   <?php
							   }
						   }
						   
							 
						   ?>
                           
                          
              
</body>
</html>