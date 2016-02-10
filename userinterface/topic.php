<?php
$getsubjectid=$_GET['subjectid'];
$getsubname=$_GET['sname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<!DOCTYPE html>
<!-- Template by quackit.com -->


<?php include ("userheader.php");?>

<div id="headingtext"><h2><?php echo $getsubname?> Topics</h2></div>	
<div class="mainheading">   <input type="text" placeholder="Search">
    <input type="submit" value="Search"></div>
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
				
					
					<strong><?php echo "<a href='desciption.php?tpid=$topicid'> $topicname</a>" ?></strong>
                    
					
				
                
                
                
			</li>

<?php
								 
							}

?> 
    </ul>
    </nav>
    <article>
    <?php
	$simg=mysql_query("select * from entrysub where id='$getsubjectid'");
	
	while ($srow=mysql_fetch_array($simg))
	{
		$subjectimg=$srow['subimg'];
		$des=$srow['sdes'];
	}
	echo "<img src='/SubProject/Admin/Admin Dashboard/image/$subjectimg'></img><br><br>";
	echo "<b> $des </b>";
	?>
    
    </article>
			
<div id="rnav">
<img src="/SubProject/userinterface/img/ad2.png" />
<img src="/SubProject/userinterface/img/ad3.gif" />
</div>
</body>
</html>