<!DOCTYPE html>
<html>
<head>
     <title>Tsunami Detection</title>
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <script type="text/javascript">
		     	$(document).ready(function()
		     	{
					$("#submit").click(function() 
					{
						var depth = $("#depth1").val();
						var location = $("#location1").val();
						var magnitude = $("#magnitude1").val();
						
						if (depth == '' || location == '' || magnitude == '') 
						{
						   alert("Insertion Failed Some Fields are Blank....!!");
						} 
						else
						{
							    $.post("insertdata.php", {
								depth2: depth,
								location2: location,
								magnitude2: magnitude,
								}, function(data)
								{
										alert(data);
										$('#form1')[0].reset(); 
								});
					}
				});
				});

     </script>
     <style type="text/css">
     	table tr th
     	{
     		 size: 15px;
     	}
     	table tr td
     	{
     		 size: 10px;
     		 color: white;
     	}
     	    .imgHolder 
     	    {
			    position: relative;
			}
			.imgHolder span 
			{
			    position: absolute;
			    right: 90px;
			    top: 88px;
			    color: red;
			}
			img {
			    border: 1px solid red;
			}
	</style>
</head>

<body style="background-color: grey; ">
   <div class="container" style="margin-top: 50px;">
   	<div style="margin-left: 90px;">
   		<h1 style="color:white;margin-bottom: 40px;margin-left:280px;"><i><b><u>Tsunami Testing Bulletin</u></b></i></h1>
   	   <form name="form" id="form1">
          <div class="form-row align-items-center">
              <div class="col-sm-3 my-1">                   
                    <input type="number" class="form-control" id="depth1"  name="depth" placeholder="Earth-quake Depth">
              </div>
               <div class="col-sm-3 my-1">                                     
                     <input type="text" class="form-control" id="location1"  name="location" placeholder="Location">                  
               </div>
               <div class="col-sm-3 my-1">                                   
                    <input type="number" step="any" name="magnitude" id="magnitude1" class="form-control" id="" placeholder="Magnitude">                  
               </div>
          </div>                             
             <button type="button" id="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Submit</button>
          </form>
       </div> 



      <div class="container">
        <div class="row" style="margin-top:20px;">
         <div class="col-sm-7">
       	 <table class="table table-bordered" style="margin-right:500px;">
		       	 <tr style="background-color: black;color: white">
		       	 	<th>Eath-quake Depth</th>
		       	 	<th>Location</th>
		       	 	<th>Magnitude</th>
		       	 	<th>Tsunami Potential</th>
		       	 	<th>Image</th>
		       	 </tr>
		       	 <?php
                     $connection = mysqli_connect("118.185.43.122", "0187cs161025", "sistec","0187cs161025");
                    $sql="select *from tsunami";
                    $result=mysqli_query($connection,$sql);
                     if ($result->num_rows > 0)
                        {
						       while($row = $result->fetch_assoc())
						       {
						          $dp=$row["depth"];
						          $loc=$row["location"];
						          $magni=$row["magnitude"];
						          if($dp<100)
						          {
						               if($loc=='verynear')
						               {
						               	   if($magni>7.9) 
						               	   {
						               	   	$count =1;
						               	        ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>Ocean Wide Destruction</td>
											       	 	<td><img src="image/sunami6.jpg" width="200" height="100"></td>
                                                        
										  	       	</tr>
						          	          <?php

						               	   }
						               	   elseif($magni>=7.6 && $magni<=7.8) 
						               	   {
						               	   	   ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>Reginonal Destruction</td>
											       	 	<td><img src="image/sunami5.jpg" width="200" height="100"></td>
											       	 	   		
											       	 </tr>
						          	          <?php
						               	   }
						               	   elseif($magni>=7.0 && $magni<=7.5) 
						               	   {
						               	   	  ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>Local Destruction</td>
											       	 	<td><img src="image/sunami4.jpg" width="200" height="100"></td>
											       	 
											       	 </tr>
						          	          <?php
						               	   }
						               	   elseif($magni>=6.5 && $magni<=7.0) 
						               	   {
						               	   	   ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>Very small scale</td>
											       	 	<td><img src="image/sunami3.jpg" width="200" height="100"></td>
											       	 </tr>
						          	          <?php
						               	   }
						               	   else
						               	   {
						               	   	  ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>No sunamis</td>
											       	 	<td><img src="image/sunami1.jpg" width="200" height="100"></td>
											       	 </tr>
						          	          <?php
						               	   }
						               }
						               elseif($loc=='inland' && $magni>6.5)
						               {
						               	      ?>
			                                        <tr style="color: black;">
											       	 	<td><?php echo $dp."km";?></td>
											       	 	<td><?php echo $loc;?></td>
											       	 	<td><?php echo $magni;?></td>
											       	 	<td>No sunamis</td>
											       	 	<td><img src="image/sunami1.jpg" width="200" height="100"></td>
											       	 </tr>
						          	          <?php
						               }
						          }
						          elseif($magni>6.5)
						          {
						          	  ?>
                                        <tr style="color: black;">
								       	 	<td><?php echo $dp."km";?></td>
								       	 	<td><?php echo $loc;?></td>
								       	 	<td><?php echo $magni;?></td>
								       	 	<td>No sunamis</td>
								       	 	<td><img src="image/sunami1.jpg" width="200" height="100"></td>
								       	 </tr>
						          	  <?php
						          }	
						          else
						          {
						               ?>
                                        <tr style="color: black;">
								       	 	<td><?php echo $dp."km";?></td>
								       	 	<td><?php echo $loc;?></td>
								       	 	<td><?php echo $magni;?></td>
								       	 	<td>No sunamis</td>
								       	 	<td><img src="image/sunami1.jpg" width="200" height="100"></td>
								       	 </tr>
						          	  <?php
						          }
						       }
						}
						else
						{
							echo "0 results";
						}
		       	?>
       	 </table>
       </div>
       <div class="col-sm-4">
       	  <div style="height:500px;">
       	  	<div class="imgHolder">
			    <img src="image/mobileimg.jpg" width="350px" height="600px" style="border-radius:16%" />
			    <span>
			    	 <h3><h3 style="color:green;"><center><u>Team : HYPER X</u></center></h3>
			         <h4 style="color:blue;margin-top:60px;margin-left:20px;">Tsunami Detection</h4>
			         <h4><center>Results</center></h4>
			         
                     
                     <?php
                  
						          if($dp<100)
						          {
						               if($loc=='verynear')
						               {
						               	   if($magni>7.9) 
						               	   {
						               	        ?>
			                                        <blink><h4><center>Ocean Wide Destruction</center></h4></blink>
			                                        
                                                          
			                                        
						          	          <?php
						               	   }
						               	   elseif($magni>=7.6 && $magni<=7.8) 
						               	   {
						               	   	   ?>
			                                        <blink><h4><center>Reginonal Destruction</center></h4></blink>
						          	          <?php
						               	   }
						               	   elseif($magni>=7.0 && $magni<=7.5) 
						               	   {
						               	   	  ?>
			                                        <blink><h4><center>Local Destruction</center></h4></blink>
						          	          <?php
						               	   }
						               	   elseif($magni>=6.5 && $magni<=7.0) 
						               	   {
						               	   	   ?>
			                                       <blink><h4><center>Very small scale</center></h4></blink>
						          	          <?php
						               	   }
						               	   else
						               	   {
						               	   	  ?>
			                                       <blink><h4><center>No Tsunamis</center></h4></blink>
						          	          <?php
						               	   }
						               }
						               elseif($loc=='inland' && $magni>6.5)
						               {
						               	      ?>
			                                        <blink><h4><center>No Tsunamis</center></h4></blink>
						          	          <?php
						               }
						          }
						          elseif($magni>6.5)
						          {
						          	  ?>
                                       <blink><h4><center>No Tsunamis</center></h4></blink>
						          	  <?php
						          }	
						          else
						          {
						               ?>
                                       <blink><h4><center>No Tsunamis</center></h4></blink>
						          	  <?php
						          }
						     
		          	       ?>




			    </span>
			</div>
       	  </div>
       </div>
    </div>
   </div>
 </div>  
  
</body>
</html>