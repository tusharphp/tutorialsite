<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table border="1px">
                            <tr>
                            	<th>Name </th>
                                
                             
                             </tr>
							
                             <?php
							 include("connection.php");
							 $adminpro=mysql_query("select * from admininfo where id='$adid'");
							 while($adpro=mysql_fetch_array($adminpro))
							 {
								 $adname=$adpro['name'];
								 
							 }
							 ?>
                            
                             <tr>
                             <td> <?php echo $adname;?></td>
                             
                            </tr>
                           
                            </table>

</body>
</html>