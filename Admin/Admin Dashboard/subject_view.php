<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src=""></script>
<script type="text/javascript">


</script>

<title>Untitled Document</title>
</head>

<body>
<?php include ("connection.php");?>
                            <table>
                            <tr>
                            	<th style="text-align:center;"> <h1>Subject Name</h1> </th>
                                
                                
                               </tr>
							 <?php
							 							 
							 $vviewsub=mysql_query("select * from entrysub");
							 
							 while($vvsrows=mysql_fetch_array($vviewsub))
							 {
								 $sid=$vvsrows['id'];
								 $vvsub=$vvsrows['subname'];
							 	
							 ?>
                            
                             <tr>
                             
                             <td> <?php echo $vvsub;?></td>
                             
                         
                             
                              </tr>
                           
                           <?php } ?>

                            <tr align="center">
                         
                            </tr>
                            </table>
                            
</body>
</html>