<?php
$getsubjectid=$_GET['subjectid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="/SubProject/userinterface/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	
		</head>

<body>
<!DOCTYPE html>
<!-- Template by quackit.com -->


	
	
	
	    <div id="uheader">
    <h1>Hello</h1>
    </div>
    
	  <nav>
    
		<ul class="mcd-menu">
<?php

	include("connection.php");
$subd=mysql_query("select * from topicentry where sub_id='$getsubjectid'");
  while($row=mysql_fetch_array($subd))
							{
											
								$topicid=$row['id'];
								$subject_id=$row['sub_id'];
								$topicname=$row['topicname'];
?>     


			<li>
				<a href="">
					<i class="fa fa-home"></i>
					<strong><?php echo $topicname; ?></strong>
                    
					<small>sweet home</small>
				</a>
                
                
                
			</li>

<?php
								 
							}

?> 
    </ul>
    </nav>
    <article>
    
    <?php
	$hdview=mysql_query("select * from desciptionentry");
	while($hdrow=mysql_fetch_array($hdview))
	{
		$head=$hdrow['heading'];
		$des=$hdrow['desciption'];
	
        
		echo "<h1> $head; </h1>";
		echo "<p> $des;</p>";
		
	}
	
	?>
  
    
    </article>
			
 	</body>
</html>
</body>
</html>