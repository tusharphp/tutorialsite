<?php session_start();
$adname=$_SESSION['adminname'];
$adimage=$_SESSION['adminimage'];

?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="../Admin/Admin Dashboard/css/all.css" />
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="/SubProject/Admin/Admin Dashboard/js/jquery.main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
				<div class="controls">
					<nav class="links">
						<ul>
							<li><a href="#" class="ico1">Messages <span class="num">26</span></a></li>
							<li><a href="#" class="ico2">Alerts <span class="num">5</span></a></li>
							<li><a href="#" class="ico3">Documents <span class="num">3</span></a></li>
						</ul>
					</nav>
					<div class="profile-box">
						<span class="profile">
							<a href="#" class="section">
								<img class="image" src="/SubProject/login/image/<?php echo $adimage; ?>" alt="image description" width="26" height="26" />
								<span class="text-box">
									Welcome
									<strong class="name"><?php echo $adname; ?></strong>
								</span>
							</a>
							<a href="#" class="opener">opener</a>
						</span>
						<a href="#" class="btn-on">On</a>
					</div>
				</div>
                <form name="suben" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"/>
                
                
                
                
				<div class="tabs">
                				<div id="tab-3" class="tab">
						<article>
                        
							<div class="text-section">
								<h1>Admin Profile</h1>
								<p>Here you can View Admin Profile</p>
							</div>
                             <table border="1px">
                            <tr>
                            	<th>Name </th>
                                <th>Logiid </th>
                             
                             </tr>
							
                             <?php
							 include("connection.php");
							 $adminpro=mysql_query("select * from admininfo");
							 while($adpro=mysql_fetch_array($adminpro))
							 {
								 $adname=$adpro['name'];
								 $adlogid=$adpro['logid'];
							 
							 ?>
                            
                             <tr>
                             <td> <?php echo $adname;?></td>
                             <td> <?php echo $adlogid;?></td>
                            </tr>
                            <?php }?>
                            </table>
                            <br>
                            <br>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                            <table border="1px">
                            <tr>
                            	<th>Name </th>
                                <th>Logiid </th>
                             
                             </tr>
							
                             <?php
							 include("connection.php");
							 $adminproup=mysql_query("select * from admininfo");
							 while($adproup=mysql_fetch_array($adminproup))
							 {
								 $adnameup=$adproup['name'];
								 $adlogidup=$adproup['logid'];
							 
							 ?>
                            
                             <tr>
                             <td><input type="text" name="adnup" value=" <?php echo $adname;?>" ></td>
                             <td><input type="text" name="adlogup" value="<?php echo $adlogid;?>"></td>
                            </tr>
                            <?php }?>
                                                        
                           <input type="submit" name="adminup" value="Update">
                           
                           <?php
						   if (isset($_POST['adminup']))
						   {
							   $adnup=$_POST['adup'];
							   $adlog=$_POST['adlogup'];
							   
							   $adupdate=mysql_query('update admininfo set name="$adnup",logid="$adlog"');
							   if ($adupdate)
							   {
								   ?><script> alert ('Updated Succefully');</script>
                                   <?php
							   }
						   }
						   
						    
						   ?>
                           </table>
                           </form>
                           
						</article>
					</div>
                    
                
                
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1>Subject Entry</h1>
								<p>Add Subject Name Here</p>
							</div>
                            
							<ul class="states">
								<li class="error"><label>Enter Subject Name:</label>&nbsp;<input type="text" name="subname"></li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes"><input type="submit" name="oksub" value="Submit"></li>
							</ul>
                            
                           
						</article>
					</div>
                    </form>
                     <?php
							
							if (isset($_POST['oksub']))
							{
								$subn=$_POST['subname'];
								
							$subentry=mysql_query("insert into entrysub values(null,'$subn')");
							if ($subentry)
							{
								?><script> alert ("Subject Entry successfully");</script>
                                
                                <?php
								
							}
							}
					?>
					
					<div id="tab-2" class="tab">
						<article>
							<div class="text-section">
								<h1>Topic Entry</h1>
								<p>Add Topics Here</p>
							</div>
                            
                            
                            <?php
                            	$subd=mysql_query("select * from entrysub");
							
							
                            ?>
                            <label> Select Subject:</label>
                             <select name="subselect">
                             <?php
                             while($row=mysql_fetch_array($subd))
							{
								$subsel=$row['subname'];
								?>
                             	<option><?php echo $subsel; ?></option> 
								<?php  $subsel++; 
								
								}?>
                              </select>
                              
                            <ul class="states">
							
                            					<li class="warning"><label>Enter topic Name:</label>&nbsp;<input type="text" name="topname"></li>
								<li class="succes"><input type="submit" name="oktopic" value="Submit"></li>
							</ul>
                            
                           
						</article>
					</div>
                    </form>
                     <?php
							include("connection.php");
							if (isset($_POST['oktopic']))
							{
								$subn=$_POST['subselect'];
								$topicn=$_POST['topname'];
								
								
						
								
							$subentry=mysql_query("insert into topicentry values(null,'$subn','$topicn')");
							if ($subentry)
							{
								?><script> alert ("Topic Entry successfully");</script>
                                <?php
							}
							}
					?>
                    
                    
					<div id="tab-4" class="tab">
						<article>
                        
							<div class="text-section">
								<h1>View Subject Name</h1>
								<p>Here you can View Subject Name</p>
							</div>
                             <table border="1px">
                            <tr>
                            	<th>Subject Name </th>
                             
                             </tr>
							
                             <?php
							 $viewsub=mysql_query("select subname from entrysub");
							 while($vsrows=mysql_fetch_array($viewsub))
							 {
								 $vsub=$vsrows['subname'];
							 
							 ?>
                            
                             <tr>
                             <td> <?php echo $vsub;?></td>
                            </tr>
                            <?php }?>
                            </table>
                           
                           
						</article>
					</div>
                    
                    
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1>Topic Name</h1>
								<p>This is a quick overview of some features</p>
							</div>
                            <table border="1px">
                            <tr>
                            	<th>Subject Name </th>
                                <th> Topic Name </th>
                             
                             </tr>
							
                             <?php
							 $viewtop=mysql_query("select subname,topicname from topicentry");
							 while($vstrows=mysql_fetch_array($viewtop))
							 {
								 $vsub=$vstrows['subname'];
								 $vtopic=$vstrows['topicname'];
							 
							 ?>
                            
                             <tr>
                             <td> <?php echo $vsub;?></td>
                             <td> <?php echo $vtopic;?></td>
                            </tr>
                            <?php }?>
                            </table>
                           
                            
                            </article>
					</div>
					<div id="tab-6" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-7" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
					<div id="tab-8" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
							<ul class="states">
								<li class="error">Error : This is an error placed text message.</li>
								<li class="warning">Warning: This is a warning placed text message.</li>
								<li class="succes">Succes : This is a succes placed text message.</li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</div>
		<aside id="sidebar">
			<strong class="logo"><a href="#">lg</a></strong>
			<ul class="tabset buttons">
            	<li class="active">
					<a href="#tab-3" class="ico3"><span>Admin Profile</span><em></em></a>
					<span class="tooltip"><span>Subject Entry</span></span>
				</li>
				<li >
					<a href="#tab-1" class="ico1"><span>Subject</span><em></em></a>
					<span class="tooltip"><span>Subject Entry</span></span>
				</li>
				<li>
					<a href="#tab-2" class="ico2"><span>Topic Entry</span><em></em></a>
					<span class="tooltip"><span>Topic Entry</span></span>
				</li>
				<li>
					<a href="#tab-4" class="ico4"><span>Widgets</span><em></em></a>
					<span class="tooltip"><span>Widgets</span></span>
				</li>
				<li>
					<a href="#tab-5" class="ico5"><span>Archive</span><em></em></a>
					<span class="tooltip"><span>Archive</span></span>
				</li>
				<li>
					<a href="#tab-6" class="ico6">
						<span>Comments</span><em></em>
					</a>
					<span class="num">11</span>
					<span class="tooltip"><span>Comments</span></span>
				</li>
				<li>
					<a href="#tab-7" class="ico7"><span>Plug-in</span><em></em></a>
					<span class="tooltip"><span>Plug-in</span></span>
				</li>
				<li>
					<a href="#tab-8" class="ico8"><span>Settings</span><em></em></a>
					<span class="tooltip"><span>Settings</span></span>
				</li>
			</ul>
			<span class="shadow"></span>
		</aside>
	</div>
</body>
</html>