<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
$(document).ready(function()
	{
		$("#subvup").change(function()
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
				$("#topvup").html(html);
			} 
		});

	});

});

</script>


</head>

<body>
			<?php include("connection.php");?>
                    
			<form method="post" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
             <table width="500px">
            <tr>
            <th>Select Subject</th>
            
       						<?php
                            $subd=mysql_query("select * from entrysub");
							?>
                            
                            
                             
                             <td><select name="subselect" id="subvup" class="styled-select">
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
					
                           <tr>
                           <th> Select Topic</th>
                              
							<td><select name="topic" id="topvup" class="styled-select">
							<option selected="selected" value="">--Select Topic--</option>
							</select></td>
                            </tr>
                            
                            <tr>
                            <th> Select Video File</th>
                            <td><input type="file" name="file" id="file" /></td>
                            </tr>
                            
                            
                            
                            <tr>
                            <th>Video title Heading</th>
                            <td><input type="text" name="headname" /></td>
                            
                            </tr>
                            <tr>
                            <th>Desciption </th>
                            <td><textarea name="topdes" style="width:200px; height:200px;"> </textarea></td>
                            
                            </tr>
                            <tr>
                            <th></th>
                            <td><input type="submit" value="Save" name="adddes" /></td>
                            </tr>
                            </table>
                              </form>                               
                                                                
                                
                                
				<?php
							
							if (isset($_POST['adddes']))
							{
								$subid=$_POST['subselect'];
								$topid=$_POST['topic'];
								$dheading=$_POST['headname'];
								$des=$_POST['topdes'];
								
								$file=$_FILES['file'];
								$name1=$file['name'];
								$type=$file['type'];
								$size=$file['size'];
								$tmppath=$file['tmp_name'];
								if($name1!=" ")
								{
									move_uploaded_file($tmppath,'videos/'.$name1);
								}
								
								
						
								
							$desentry=mysql_query("insert into subvideos values(null,'$subid','$topid','$name1','$dheading','$des')");
							if ($desentry)
							{
								?><script> alert ("Entry successfully");</script>
                                
                                <?php echo "<script>window.location.herf='/SubProject/Admin/AdminDashboard/Admin-Panel.php/#tab-3'</script>";
							}
							}
					?>
                    
                    			
                
</body>
</html>