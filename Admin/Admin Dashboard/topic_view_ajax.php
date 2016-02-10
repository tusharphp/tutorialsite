<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="/SubProject/Admin/Admin Dashboard/astyle.css" />
<script type="text/javascript" src=""></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(".edit_tr").click(function()
	{
		var ID=$(this).attr('id');
		$("#topicup_"+ID).hide();
		$("#topic_input_"+ID).show();
	}).change(function()
{
var ID=$(this).attr('id');
var first=$("#topic_input_"+ID).val();
var dataString = 'id='+ ID +'&firstname='+first;
$("#topicup_"+ID).html('<img src="b_edit.png" />'); // Loading image

	if(first.length>0)
	{

		$.ajax({
		type: "POST",
		url: "topic_edit_ajax.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
			$("#topicup_"+ID).html(first);
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
</head>

<body>
<?php include("connection.php")?>
<table border="1px" style="margin:0 auto">
                            <tr>
                           
                            <th> Topic Name </th>
                            </tr>
                            <?php
                          if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$topsel=mysql_query("select * from topicentry where sub_id='$id'");

							while($toprow=mysql_fetch_array($topsel))
							{
								$tsubn=$toprow['subname'];
								$ttopn=$toprow['topicname'];
								?>
                                <tr>
                                
                                <td> <?php echo $ttopn;?></td>
                                </tr>
                                <?php
								
								
							}
								}
							?>
                            
                            </table>
                            
                            
                            
<table border="1px" style="margin:0 auto">
                            <tr>
                           
                            <th> Topic Name </th>
                            </tr>
                            <?php
                          if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$topsel=mysql_query("select * from topicentry where sub_id='$id'");

							while($toprow=mysql_fetch_array($topsel))
							{
								$tid=$toprow['id'];
								$tsubn=$toprow['subname'];
								$ttopn=$toprow['topicname'];
								?>
                                <tr id="<?php echo $tid; ?>" class="edit_tr">
                                                               
                                
                                <td class="edit_td"> 
                                <span id="topicup_<?php echo $tid;?>" class="text"><?php echo $ttopn;?></span>
                                <input type="text" value="<?php echo $ttopn;?>" class="editbox" id="topic_input_<?php echo $tid;?>" />
                                </td>
                                </tr>
                                
                                
                                <?php
								
								
							}
								}
							?>
                            
                            </table>
</body>
</html>