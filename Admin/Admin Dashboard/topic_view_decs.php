

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select topic</title>

</head>

<body>
<?php include("connection.php")?>
<form method="post" action="<? echo $_SERVER['PHP_SELF']?>">
		<select id="topsel" name="topname" >
                              <?php
							  
								if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$topsel=mysql_query("select * from topicentry where sub_id='$id'"); ?>

                            		<label> Select Topic: </label>
                            
                            <?php
							while ($toprow=mysql_fetch_array($topsel))
							{
								$toid=$toprow['id'];
								$topname=$toprow['topicname'];
								$suid=$toprow['sub_id'];
								
								?>
							
							<option value="<?php echo $toid ?>" ><?php echo $topname;?></option>
                            <?php $topname++;
							}
							
							}
							?> 
                              </select>
                              
                              </form >
                             <div id="tresult"><?php echo $topname;?></div>
                              
</body>
</html>