<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
$(document).ready(function()
	{
		$("#subdv").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "des_view_selection.php",
				data: dataString,
				cache: false,
				success: function(data)
			{
				$("#des").html(data);
			}
			
		});

	});

});

</script>
<script type="text/javascript">
$(document).ready(function()
	{
		$("#subdv").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "topic_view_decs.php",
				data: dataString,
				cache: false,
				success: function(html)
			{
				$("#topdv").html(html);
			
						} 
		});

	});

});

</script>
<script type="text/javascript">
$(document).ready(function()
	{
		$("#topdv").change(function()
		{
			var tid=$(this).val();
			var dataString = 'tid='+ tid;

			$.ajax
			({
				type: "POST",
				url: "des_view_selection.php",
				data: dataString,
				cache: false,
				success: function(data)
			{
				
			
			$("#des").html(data);
			} 
		});

	});

});

</script>

<script type="text/javascript">
$(document).ready(function()
	{
		$("#subdv").change(function()
		{
			var id=$(this).val();
if (id=="")
{
	$("#allview").show();
}
else
{
	$("#allview").hide();
}
		});
	});
</script>
</head>

<body>
			<?php include("connection.php");?>
           
            
            
			<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
             <table border="1px" border="1px" width="800px">
            <tr>
            <th>Select Subject</th>
         
            
       
            
                             <?php
                            $subd=mysql_query("select * from entrysub");
							?>
                            
                            
                             
                             <td><select name="subselect" id="subdv" class="styled-select">
                             <option value=""> select subject </option>
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$subdv=$row['subname'];
								$id=$row['id'];
								
								?>
                                
                             	 <option value="<?php echo $id; ?>"> <?php echo $subdv; ?></option>  
								<?php  $subdv++; 
								
							}?>
                             
                              </select></td>
                            <br /><br />  
                      			</tr>			
					
                           <tr>
                           <th> Select Topic</th>
                              
							<td><select name="topic" id="topdv" class="styled-select">
							<option selected="selected" value="">--Select Topic--</option>
							</select></td>
                            </tr>
                            
                            
                            <br />
                            <tr>
                            <th>Desciption Heading</th>
                            <td>
                            <select id="headec" name="head" class="styled-select">
                            <option selected="selected" value="<?php echo $toid; ?>"></option>
                            </select></td>
                            </tr>
                      
                            <tr >
                            <div id="decs" >
                            </div>
                            
                            </table>
                              </form>
                                
                                                                
                                
                    <table id="allview" border="1px" width="800px" >
                    <tr>
                    <th>Subject Name</th>
                    <th>Topic Name</th>
                    <th>Heading</th>
                    <th>Description</th>
                    </tr>
                    
  <?php
 
  $sqldis=mysql_query("select entrysub.id,entrysub.subname,topicentry.topicname,desciptionentry.heading,desciptionentry.desciption from entrysub join topicentry on entrysub.id=topicentry.sub_id join desciptionentry on topicentry.id=desciptionentry.topicid ");
  
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
  ?>
    
  
  </table>
               
<div id="des"></div>                    			
                
</body>
</html>