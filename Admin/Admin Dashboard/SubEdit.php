<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link  href="/SubProject/Admin/Admin Dashboard/astyle.css"  rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src=""></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".edit_tr").click(function()
	{
		var ID=$(this).attr('id');
		$("#first_"+ID).hide();
		$("#first_input_"+ID).show();
	}).change(function()
{
var ID=$(this).attr('id');
var first=$("#first_input_"+ID).val();
var img=$("#img_input_"+ID).val();
var dataString = 'id='+ ID +'&firstname='+first; 

$("#first_"+ID).html('<img src="b_edit.png" />'); // Loading image

if(first.length>0)
{

$.ajax({
type: "POST",
url: "tabel_edit_ajax.php",
data: dataString,

cache: false,
success: function(html)
{
$("#first_"+ID).html(first);
}
});
}
else
{
alert('Enter something.');
}

});

// Edit input box click action
$(".editbox").mouseup(function() 
{
return false
});

// Outside click action
$(document).mouseup(function()
{
$(".editbox").hide();
$(".text").show();
});

});
</script>

<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "subdel.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".edit_t").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>
</head>

<body>

<?php include("connection.php"); ?>
<table >
                     
							 <?php
							 							 
							 $viewsub=mysql_query("select * from entrysub");
							 $count=mysql_num_rows($viewsub);
							 while($vsrows=mysql_fetch_array($viewsub))
							 {
								$id=$vsrows['id']; 
								 $vsub=$vsrows['subname'];
								 $simg=$vsrows['subimg'];
							 	
							 ?>
                           
                             <tr id="<?php echo $id; ?> " class="edit_t">
                             
                             <td class="edit_tr" id="<?php echo $id;?>">
                             <span id="first_<?php echo $id; ?>" class="text"><?php echo $vsub;?></span>
                              <input type="text" value="<?php echo $vsub;?>" class="editbox" id="first_input_<?php echo $id;?>" /><br />
                              
                              <strong><?php echo "<a href='subimgupdate.php?simgid=$id'> Image Update $vsub</a>" ?></strong>
                              </td>
                            
                              
                              <span class="action"><td> <a href="#" id="<?php echo $id;?>" class="delete" >Delete</a></td></span>
                              
                            </tr>
                           
                              <?php } ?>
                              </table>
                            
</body>
</html>