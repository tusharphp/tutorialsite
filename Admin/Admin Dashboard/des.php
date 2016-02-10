<?php session_start();
$adname=$_SESSION['adminname'];
$adimage=$_SESSION['adminimage'];
$adid=$_SESSION['adminid'];
?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<script type="text/javascript" src="/SubProject/Admin/Admin Dashboard/js/jquery.min.js"></script>
	<!--<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="../jquery-1.7.2.min.js"><\/script>');</script>-->
	<script type="text/javascript" src="/SubProject/Admin/Admin Dashboard/js/jquery.main.js"></script>
    <script type="text/javascript" ></script>
    <script>
	function tupdate()
	{
		$('.topicview').hide();
		$('.topicupdate').fadeIn(1000);
		
	}
	</script>
    <script>
//Dropdown list
	function droplist()
	{
	$(".dropdown").fadeIn(1000);
	
	}
	$(document).mouseup(function (e)
{
    var container = $(".dropdown");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
    }
	
	
	
});	//dropdown end</script>

    <script language="javascript" type="text/javascript">
	function subupdate()
	{
		$('#subjectupdate').fadeIn(500);
	}
	</script>
    
    
    
    <script language="javascript" type="text/javascript">
	function chevalidate()
	{
		var chks=document.getElementsByClassName('checkbox[]');
		var hasCheaked=false;
		for (var i=0; i<chks.length; i++)
		{
			if (chks[i].checked)
			{
				hasCheaked=true;
				break;
			}
		}
		
		if (hasCheaked==false)
		{
			alert('Please select atleast one');
			return false;
		}
		return true;
	}
	
	
	</script>
    
    <script language="javascript">
	
	window.document.onkeydown = function (e)
	{
    	if (!e){
        e = event;
    }
    if (e.keyCode == 27){
        lightbox_close();
    }
}

function lightbox_open(){
    window.scrollTo(0,0);
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';
	  
}

function lightbox_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
	
}	
	</script>
    
<script language="javascript">
	
	window.document.onkeydown = function (e)
	{
    	if (!e){
        e = event;
    }
    if (e.keyCode == 27){
        adminupdate_close();
    }
}

function adminupdate_open(){
    window.scrollTo(0,0);
    document.getElementById('adminupdate').style.display='block';
    document.getElementById('fadeadupdate').style.display='block';  
}

function adminupdate_close(){
    document.getElementById('adminupdate').style.display='none';
    document.getElementById('fadeadupdate').style.display='none';
}	
	</script>
    <script>
	function subupdate()
	{
		$("#subview").hide();
		$("#subjectupdate").show();
	}
	
	</script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
          
			<div id="header">
            <div id="logo">
            </div>
					<nav class="links">
						<div class="logo"></div>
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
                            
						</span>
                        
                        <a href="#" class="opener" onClick="droplist();">opener</a>
                        <a href="#" class="btn-on">On</a>
                        <div class="dropdown" >
                        <img class="image" src="/SubProject/login/image/<?php echo $adimage; ?>" style="width:70px; height:80px; float:left;"/>
                          <ul style="list-style-type:none;">
                            <li><a href="#" onClick="lightbox_open();">Profile</a></li><br>
                            <li><a href="#" onClick="adminupdate_open();">Profile Update</a></li>
                            </ul>
                            
                        
                        </div>						
					</div>
                    
                    
				</div>
                <!-- Admin Profile Pop up box -->
                <div id="light">
                 <?php include("admin_profile.php"); ?>
                </div>
                <div id="fade" onClick="lightbox_close();"></div>
                <!-- Admin Profile Update Pop box-->
              <div id="adminupdate">
              <?php include ("admin_profile_update.php");?>             
              
              </div>  
                 <div id="fadeadupdate" onClick="adminupdate_close();"></div>
                

                            
             
              
<div class="tabs">
                 
    <div id="tab-1" class="tab">
				<article>
                	<div class="text-section">
								<marquee style=""><h1>Subject Entry</h1></marquee><br>
                                
					</div>
                					<?php include("Subject_entry.php")?>
            </article>
				
                      </div>
                    
               
                    
                    
                    
 <!-- Topic Entry -->                   
					
		<div id="tab-2" class="tab">
				<article>
							<div class="text-section">
                            <h1>Topic Entry</h1>
							</div>
                          <?php include("topic_entry.php");?>  
                           
						</article>
					</div>
                   
                     
                    <div id="tab-3" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
                            <?php include("desciption_entry.php");?>
                          
                            
                            
                            
						</article>
                       
					</div>
                    
 <!-- Subject View -->         

					<div id="tab-4" class="tab">
                       <article>          
					      
                        
							<div class="text-section">
								<h1>View Subject Name</h1>
								<p><button name="subupdat" value="" onClick="subupdate();" >Subject Update</button></p>
							</div>
							<div id="subview">
							
                            <?php include("subject_view.php")?>
                            </div>
                            <div id="subjectupdate">
                            <?php include("SubEdit.php")?>
                            </div>
                            
                          </article> 
                                                        
					
					</div>
                    
<!-- Topic view and Update -->                    
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1>Topic Name</h1>
								<p>To Update Click here:<input type="submit" onClick="tupdate();" value="Update"> </p>
							</div>
                            
                            <?php include("topic_view.php");?>
                            
                    
                                                   
                            </article>
					</div>
					<div id="tab-6" class="tab">
						<article>
							<div class="text-section">
								<h1>Dashboard</h1>
								<p>This is a quick overview of some features</p>
							</div>
                           <div id="desview">
                           <?php include "desciption_view.php";?>
                           </div>
                            
							
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
			<strong class="logo"><a href="#">Tushar</a></strong>
			<ul class="tabset buttons">
				<li class="active">
					<a href="#tab-1"><h4 align="center">Subject Entry</h4></a>
				
				</li>
				<li>
					<a href="#tab-2"><h4> Topic Entry </h4></a>
				
				</li>
				<li>
					<a href="#tab-3"><h4 align="center">Heading and Desciption Entry</h4></a>
				
				</li>
				<li>
					<a href="#tab-4"><h4> View Subject</h4></a>
				
				</li>
				<li>
					<a href="#tab-5" class="ico5"><h4> View Topic</h4></a>
					
				</li>
				<li>
					<a href="#tab-6" class="ico6"><h4>Desciption View</h4></a>
					
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