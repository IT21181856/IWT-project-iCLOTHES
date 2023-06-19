<?php
require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> iCLOTHES | REGISTER </title>
	<link rel="stylesheet" type="text/css" href="../styles/Registerpage.css">
	<script src="../js/myscript2.js"></script>

</head>
<body>
<br><br><br><br><br><br><br>


<div class="RegisterContainer">
	<form action="#" method="post">
		<div class="logo">
			<img src="../images/logo.png" width="200px" height="auto">
		</div>

		<div class="RegName">Register to iCLOTHES</div>

	    <hr>
	    <label for=""><b>First Name</b></label>
	    <input type="text" placeholder="First Name"  name="firstname" id="firstname">

        <label for=""><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" name="lastname" id="lastname">

		<label for=""><b>Email</b></label>
	    <input type="email" placeholder="Email" name="email" id="email">

	    <label for=""><b>Password</b>
	    <input type="password" placeholder="Enter Password" name="password" id="password"  required>
		</lable><br>
	    <label for=""><b>Repeat Password</b>
	    <input type="password" placeholder="Repeat Password" name="repeatpassword" id="repeatpassword"   required>
			<span id='message'></span>
		 	</lable>
	    <hr>
	    <div class="registerbtn">
		 
	    	<input type="submit" value="Submit" name="submit">
			 
		</div>
	</form>
</div>
		
	<?php

	if(isset($_POST["submit"]))
	{
				
		$firstname= $_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repeatpassword=$_POST['repeatpassword'];
	
		
				if ($password==$repeatpassword)
				{
				   $sql_run=mysqli_query($conn,$sql);
				 $sql="INSERT INTO register (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
                
					  if (mysqli_query($conn, $sql))
					  {
						echo"<script>alert('Registration Successfully')
						window.location.replace('login.php')</script>";
					  }
					  else
					  {
						echo "Error: ".$sql."<br>". $conn->error;
					  }
				}
				
				else
				{
				  echo"<script>alert('Password Mismatch');
				  window.location.href='Register.php'</script>";
				}

	}
		
		
	
	?>
	

</body>
</html>
