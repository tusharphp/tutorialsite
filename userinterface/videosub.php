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

	$simg=mysql_query("select * from entrysub");
	
	while ($srow=mysql_fetch_array($simg))
	{
		$subid=$srow['id'];
		$sname=$srow['subname'];
		$subjectimg=$srow['subimg'];

		$des=$srow['sdes'];
	 

?>
			<li>
				
					
					<strong><?php echo "<a href='desciption.php?tpid=$topicid'> $sname</a>" ?></strong>
                    
					
				
                
                
                
			</li>

<?php
								 
							}

?> 
    </ul>
    </nav>
    <article>
              <?php
include "connection.php";  
                $vselect=mysql_query("select * from subvideos");
                                      
                     while($vfetch=mysql_fetch_array($vselect))
                                      {
                                         	$vid=$vfetch['id'];
                                             $video=$vfetch['vname'];
                                            
									  
	  echo "<video width='320' height='240' controls preload='auto' data-setup='{}'>";
//  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/mp4'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/mp4'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/ogg'/>";
  echo "<source src='/SubProject/Admin/Admin Dashboard/videos/".$video."' type='video/webm'/>"; 

echo "</video>"; 
echo '<a href="#" id="delvideo.php?vdelid='.$vid.'" onclick="del(this.id)">Delete</a>';
} ?>
    
    </article>
			
<div id="rnav">
<img src="/SubProject/userinterface/img/ad2.png" />
<img src="/SubProject/userinterface/img/ad3.gif" />
</div>
</body>
</html>