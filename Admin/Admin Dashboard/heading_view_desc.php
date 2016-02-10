<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select topic</title>

</head>

<body>
<?php include("connection.php")?>
<form method="post" action="<? echo $_SERVER['PHP_SELF']?>">
		<select id="headec" name="headec" >
                              <?php
							  
								if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$headsel=mysql_query("select * from desciptionentry where topicid='$id'"); ?>

                            		<label> Select Topic: </label>
                            
                            <?php
							while ($headrow=mysql_fetch_array($headsel))
							{
								$headid=$headrow['id'];
								$topid=$headrow['topicid'];
								$head=$headrow['heading'];
								$des=$headrow['desciption']; 
								?>
							
							<option value="<?php echo $headid ?>" > <?php echo $head;?></option>
                            <?php $head++;
							}
							
							}
							?> 
                              </select>
                              
                              
		<select id="decs" name="headec" >
                              <?php
							  
								if($_POST['id'])
								{
									$id=$_POST['id'];							  
							   		$headsel=mysql_query("select * from desciptionentry where id='$id'"); ?>

                            		<label> Select Topic: </label>
                            
                            <?php
							while ($headrow=mysql_fetch_array($headsel))
							{
								$headid=$headrow['id'];
								$topid=$headrow['topicid'];
								$head=$headrow['heading'];
								$des=$headrow['desciption']; 
								?>
							
							<option value="<?php echo $headid ?>" > <?php echo $des;?></option>
                            <?php $head++;
							
							}
							
							}
							?> 
                              </select>
                              
                             <div id="decs"><?php echo $des;?></div> 
                              
                              
                              <textarea  id="headec"><?php echo $des;?></textarea>
                              
                              </form >
                         
                             
                              
</body>
</html> 