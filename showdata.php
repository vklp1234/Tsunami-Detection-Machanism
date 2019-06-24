<?php

$con=mysqli_connect('118.185.43.122','0187cs161025','sistec','0187cs161025');
                             
                   $response = array();
                   $sql="select *from tsunami";
                    $result=mysqli_query($con,$sql);
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
						               	       
			                                        $response['message'] ='Ocean wide Destruction';
			                                        $mobile="9425017733";
													$message="Team HYPERx From Sistec college Bhopal -The result is Ocean wide Destruction";
													$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8085433341&Password=B8267F&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=aditywqsR2WylXaNniex6AprUVGv") ,true);
													if ($json["status"]==="success") 
													{
													    echo $json["msg"];
													   
													}else
													{
													    echo $json["msg"];
													   
													}
						          	          
						               	   }
						               	   elseif($magni>=7.6 && $magni<=7.8) 
						               	   {
						               	   	         $response['message'] ='Reginonal Destruction';
						               	   	         $mobile="8889867740";
						               	   	         $message="Team HYPERx - Reginonal Destruction";
													$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8085433341&Password=B8267F&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=aditywqsR2WylXaNniex6AprUVGv") ,true);
													if ($json["status"]==="success") 
													{
													    echo $json["msg"];
													   
													}else
													{
													    echo $json["msg"];
													   
													}
						          	          
						               	   }
						               	   elseif($magni>=7.0 && $magni<=7.5) 
						               	   {
						               	   	         $response['message'] ='Local Destruction';
						               	   	         $mobile="8889867740";
						               	   	         $message="Team HYPERx - Local Destruction";
													$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8085433341&Password=B8267F&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=aditywqsR2WylXaNniex6AprUVGv") ,true);
													if ($json["status"]==="success") 
													{
													    echo $json["msg"];
													   
													}else
													{
													    echo $json["msg"];
													   
													}
						          	          
						               	   	  
						               	   }
						               	   elseif($magni>=6.5 && $magni<=7.0) 
						               	   {
						               	   	     $response['message'] ='Very small scale';
						               	   	     $mobile="8889867740";
						               	   	      $message="Team HYPERx - Very Small Scale";
													$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8085433341&Password=B8267F&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=aditywqsR2WylXaNniex6AprUVGv") ,true);
													if ($json["status"]==="success") 
													{
													    echo $json["msg"];
													   
													}else
													{
													    echo $json["msg"];
													   
													}
						               	   	   
						               	   }
						               	   else
						               	   {
						               	   	      $response['message'] ='No Tsunamis';
						               	   	      
						               	   	 
						               	   }
						               }
						               elseif($loc=='inland' && $magni>6.5)
						               {
						               	      $response['message'] ='No Tsunamis';
						               	     
						               }
						          }
						          elseif($magni>6.5)
						          {
						          	   $response['message'] ='No Tsunamis';
						          	 
						          }	
						          else
						          {
						               $response['message'] ='No Tsunamis';

						          }
						    }
						}     
						    
	echo json_encode(array("name"=>$response['message']));


?>