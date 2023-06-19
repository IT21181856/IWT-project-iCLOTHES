<?php
	$email =$_POST['email'];
	$password = $_POST['password'];
	
	// Database connection here 
	$con = new mysqli("localhost","root","","iclothes");
	if($con->connect_error)
	{
		die("Failed to connect: ".$con->connect_error);
	}
	else
	{
		$stmt =$con->prepare("select * from register where email =?");
		$stmt-> bind_param("s",$email);
		$stmt -> execute();
		$stmt_result =$stmt -> get_result();
		if($stmt_result ->num_rows > 0)
		{
			$data = $stmt_result -> fetch_assoc();
			if($data['password'] == $password)
			{
				header("location:Return And Exchange.php");

				
			}
			else
			{
				header("location: ../html/LoginAsa.html");

			}
		}
		else
		{
			header("location: ../html/LoginAsa.html");
			
		}
	}
	
  
  ?>
