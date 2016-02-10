<?php
$gettpid=$_GET['tpid'];
$getsubname=$_GET['sname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>


<?php include ("userheader.php");?>

<div id="headingtext"><h2><?php echo $getsubname?> Tutorial</h2></div>	
<div class="mainheading">   <input type="text" placeholder="Search">
    <input type="submit" value="Search"></div>
	  <nav>
    
		<ul class="mcd-menu">
<?php

	include("connection.php");
$subd=mysql_query("select * from desciptionentry where topicid='$gettpid'");
  while($row=mysql_fetch_array($subd))
							{
											
								$hdid=$row['id'];
								$heading=$row['heading'];
								$desc=$row['desciption'];
								$subject_id=$row['sub_id'];
								$topicname=$row['topicname'];
?>     


			<li>
				
				
					<?php echo "<a href='deshead.php?hid=$hdid'> $heading </a>" ?>
                    
					
				
                
                
                
			</li>

<?php
								 
							}

?> 
    </ul>
    </nav>
    <article>
   <?php echo "<h1> $heading; </h1>";
		echo "<p> $desc;</p>";?>
    
    <?php
	$hdview=mysql_query("select * from desciptionentry where sub_id='$getsubjectid'");
	while($hdrow=mysql_fetch_array($hdview))
	{
		$head=$hdrow['heading'];
		$des=$hdrow['desciption'];
	
        
		
		
	}
	
	?>
  
    
    </article>
			
<div id="rnav">
<img src="/SubProject/userinterface/img/ad2.png" />
<img src="/SubProject/userinterface/img/ad3.gif" />
</div>
</body>
</html>