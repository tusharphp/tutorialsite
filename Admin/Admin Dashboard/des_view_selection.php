<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include("connection.php")?>
<table width="800px" border="1px">
                    <tr>
                    <th>Subject Name</th>
                    <th>Topic Name</th>
                    <th>Heading</th>
                    <th>Description</th>
                    </tr>

  <?php
   if($_POST['id'] || $_POST['tid'])
								{
									$id=$_POST['id'];
									$tid=$_POST['tid'];	
 
  $sqldis=mysql_query("select entrysub.id,entrysub.subname,topicentry.id,topicentry.topicname,desciptionentry.heading,desciptionentry.desciption from entrysub join topicentry on entrysub.id=topicentry.sub_id join desciptionentry on topicentry.id=desciptionentry.topicid where entrysub.id='$id' or topicentry.id='$tid'");
  
  while($disrow=mysql_fetch_array($sqldis))
 
  {
	$subid=$disrow['id'];
	  $sid=$disrow['topicname'];
	 $sname=$disrow['subname'];
	 $hname=$disrow['heading'];
	  $dname=$disrow['desciption'];
	 ?>
     
    <tr> 
	 <td><?php echo $sname;?></td>
     
	 <td> <?php echo $sid ?></td>
      <td><?php echo $hname;?></td>
     <td><?php echo $dname;?></td>
     </tr>
     
	<?php }
								}
  ?>
    
  
  </table>
                 
       
</body>
</html>