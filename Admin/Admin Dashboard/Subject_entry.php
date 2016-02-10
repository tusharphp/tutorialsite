<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>




</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

       <form name="suben" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"/>
                <table >
                
						
                            <tr>
                            <th><h2> Enter Subject Name</h2></th>
                            
                            </tr>
                            <tr>
							<td align="center"><input type="text" name="subname" placeholder="Enter Subject"> <br /> <br /><br /></td>
                            </tr>
                            <tr>
							<td align="center"><input type="submit" name="oksub" value="Submit"></td>
                            </tr>
							
                            
                        </table>
                        </form> 
                        
                              <?php
							include("connection.php");
							if (isset($_POST['oksub']))
							{
								$subn=$_POST['subname'];
								
							$subentry=mysql_query("insert into entrysub values(null,'$subn')");
							if ($subentry)
							{
								?><script> alert ("Subject Entry successfully");</script>
                                <?php
							}
							}
					?>
</body>
</html>