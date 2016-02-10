<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("connection.php"); ?>
<form name="subupdate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                             <table >
                            <tr>
                            	<th>Subject Name </th>
                                <th> id </th>
                                <th>Delete</th>
                                <th> Update</th>
                             </tr>
							 <?php
							 							 
							 $viewsub=mysql_query("select * from entrysub");
							 $count=mysql_num_rows($viewsub);
							 while($vsrows=mysql_fetch_array($viewsub))
							 {
								 
								 $vsub=$vsrows['subname'];
							 	$subid=$vsrows['id'];
							 ?>
                            
                             <tr>
                             
                             <td> <input type="text" value="<?php echo $vsub;?>" name="subedit"></td>
                             <td> <?php echo $subid;?></td>
                             <td><input type="checkbox" name="checkbox[]" id="checkbox[]" value="<?php echo $subid;?>"></td>
                             <td> <?php echo "<a href='/SubProject/Admin/Admin Dashboard/sub_edit.php?id=$subid' >Edit</a>"?></td>
                            </tr>
                           
                           <?php } ?>

                            
                            </table>
                            <input type="submit" value="Delete" name="delsub">
                            <input type="submit" value="Update" name="updatesub">
							</form>
                            <?php
					
							if (isset($_POST['delsub']))
							{
								for($i=0;$i<$count;$i++)
    								{
    									$del_id=$_POST['checkbox'][$i];
										echo $del_id;
										
																		
    									$dels=mysql_query("delete from entrysub where id='$del_id'");
										if ($dels)
										{
										?><script> alert('deleted Succesfully');</script>
                                        <?php
										}
														
										
    								}
									
								
							}?>
                   
                            

</body>
</html>