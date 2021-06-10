<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "login_sample_db";


$con = mysqli_connect($server, $username, $password, $dbname);


if(isset($_POST['submit']))
{
	
	if(!empty($_POST['user_first_name'])&& !empty ($_POST['user_second_name'])&& !empty ($_POST['message']))
	{
		
		$user_first_name = $_POST['user_first_name'];
		$user_second_name = $_POST['user_second_name'];
		$message = $_POST['message'];
		
		$query = "insert into form(user_first_name,user_second_name,message) values('$user_first_name','$user_second_name','$message')";
		
		$run = mysqli_query($con,$query) or die(mysqli_error($con));
		
		if($run)
			
			{
				
		        echo "Message Successfully Sent.";
				
			}
		else
		
	        {
			
		        echo "Message Not Sent Successfully.";
			
			}
		
		
		
	}
	
	else
	
	{
	 
        echo "all fields required.";	 
		
	}



}



?>