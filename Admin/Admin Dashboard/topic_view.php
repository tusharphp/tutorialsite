<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
$(document).ready(function()
	{
		$("#subtv").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "topic_view_ajax.php",
				data: dataString,
				cache: false,
				success: function(data)
			{
				$("#tresult").html(data);
			} 
		});

	});

});

</script>

</head>

<body>
<?php include("connection.php");?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
             <table style="margin:0 auto;">
            <tr>
            <th>Select Subject</th>
            </tr>
            <tr>
       						<?php
                            $subd=mysql_query("select * from entrysub");
							?>
                            
                            
                             
                             <td>
                             <select name="subselect" id="subtv" class="styled-select">
                             <option value=""> select subject </option>
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$subsel=$row['subname'];
								$id=$row['id'];
								
								?>
                                
                             	 <option value="<?php echo $id; ?>"> <?php echo $subsel; ?></option>  
								<?php  $subsel++; 
								
							}?>
                             
                              </select></td>
                              </tr>
                              </table>
                              </form>
                              
                              <div id="tresult" style="margin:0 auto;"></div>
 
       
                           
</body>
</html>