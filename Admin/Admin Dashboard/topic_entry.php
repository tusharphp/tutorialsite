<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Topic Entry</title>
</head>

<body>
<?php include("connection.php");?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                            <table style="margin-top:5%;">
                                                 
                            <?php
                            $subd=mysql_query("select * from entrysub");
							
                            ?>
                            <tr>
                         
                            <td>
                            
                             <select name="subselect" class="styled-select">
                             <option >----Select Subject----</option>
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$subsel=$row['subname'];
								$subselid=$row['id'];
								?>
                             	 <option value="<?php echo $subselid; ?>"> <?php echo $subsel; ?></option>  
								<?php  $subsel++; 
								
								}?>
                              </select><br /><br />
                              </td>
                            </tr>
                            <tr>
                            <th> Enter Topic Name:</th>
                            </tr>
                            <tr>
                            <td><input type="text" name="topname"></td>
                             </tr>
                             
                             <tr>
                             
								<td><input type="submit" name="oktopic" value="Submit"></td>
                                </tr>
                                </table>
                         </form>       
                                
                                
                                
                                
				<?php
							
							if (isset($_POST['oktopic']))
							{
								$subn=$_POST['subselect'];
								$topicn=$_POST['topname'];
								
								
						
								
							$subentry=mysql_query("insert into topicentry values(null,'$subn','$topicn')");
							if ($subentry)
							{
								?><script> alert ("Topic Entry successfully");</script>
                                <?php
							}
							}
					?>
                    
                    			
                
</body>
</html>