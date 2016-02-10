
<body>

<?php include("userheader.php");?>	
	
	

        
      
   
   
    <div id="searchbox">
    <input type="text" placeholder="Search">
    <input type="submit" value="Search">
    </div>
    
 <div id="boxcontainer"> 
    
<?php
include("connection.php");
$subd=mysql_query("select * from entrysub");
  while($row=mysql_fetch_array($subd))
  
							{
								$subsel=$row['subname'];
								$subselid=$row['id'];
								$simg=$row['subimg'];
?>


		  <div id="subbox" style="background-image:url(/SubProject/Admin/Admin%20Dashboard/image/<?php echo $simg ?>);     background-size: cover;">
           				<h1><?php echo "<a href='topic.php?subjectid=$subselid&&sname=$subsel'>$subsel</a>"; ?></h1>
                        <h2>Explore the <?php echo $subsel; ?> </h2>
                       <div class="subboxbut">Learn <?php echo $subsel; ?></div>

     </div>           
              
<?php	}?>
    
    </div>
    
<?php include "footer.php";?>   
      
			
    

                
		
		
	
	</body>
</html>
</body>
</html>