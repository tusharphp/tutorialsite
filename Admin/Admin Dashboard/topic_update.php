<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include ("connection.php");?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
                            <table border="1px" style="margin:0 auto;">
                            
                            <tr>
                            <th> Subject Name </th>
                            <th> Topic Name </th>
                            <th> Delete</th>
                            <th> Edit</th>
                            </tr>
                            <?php
							$topview=mysql_query("select * from topicentry");
							$counttop=mysql_num_rows($topview);
							while($toprow=mysql_fetch_array($topview))
							
							{
								$topid=$toprow['id'];
								$tsubn=$toprow['subname'];
								$ttopn=$toprow['topicname'];
								?>
                                <tr>
                                <td> <?php echo $tsubn;?></td>
                                <td> <?php echo $ttopn;?></td>
                                <td align="center"> <input type="checkbox" name="checktopdel[]" id="checktopdel[]" value="<?php echo $topid;?>" ></td>
                                <td> Edit</td>
                                </tr>
                                <?php
								
								
							}
							
							?>
                            
                            </table>
                            <input type="submit" name="topicdel" value="Delete">
                            
                            </form>
                            <?php
							if (isset($_POST['topicdel']))
							{
								for ($i=0;$i<$counttop;$i++)
								{
									$topdelid=$_POST['checktopdel'][$i];
									$topicdelq=mysql_query("delete from topicentry where id='$topdelid'");
									if ($topicdelq)
									{
										?> <script> alert ('Deleted Succesfully')</script>
                                    	<?php
									}
								}
							}
							?>
                            
</body>
</html>