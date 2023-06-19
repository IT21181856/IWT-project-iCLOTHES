<?php
    
	include'connectWomen.php';
	
	if(isset($_POST['submit']))
	{
		$ID = $_POST['ID'];
		$Name= $_POST['Name'];
		$Material= $_POST['Material'];
		$Price= $_POST['Price'];
		
		$sql1="insert into women (ID,Name,Material,Price )
		values('$ID','$Name','$Material', '$Price')";
		
		$result = mysqli_query($conn,$sql1);
		if($result)
		{
			header('location:womenN.php');
			
		}
		else
		{
			die(mysqli_error($conn));
		}
		
		
		
	}





?>

<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | WOMEN</title>
	    <link rel="stylesheet" href="../styles/header and footer.css">
			 <link rel="stylesheet" href="../styles/women.css">

   </head>
<body>  

  <!--img class="logo" src="images/logo.jpg" alt="shopping cart logo" width="200px" height="200px"-->
  
 <img  class ="logo"  src = "../images/logo.png"> 
  <center>
   
    <h2  class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
  <a href="logout.php"class="login" >LOGOUT</a> 
  <a class="active" href="view_payment.php" class="cart"><font-size:204px>PAYMENTS</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
	               <li class = "menu"> <a href="../html/home.html">HOME</a> </li>
		       <li class = "menu"> <a href="../html/womenHome.html">WOMEN</a> </li>
				<li class = "menu"> <a href="../html/MEN.html">MEN</a> </li>
				<li class = "menu"> <a href="../html/KID.html">KID</a> </li>
				<li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
				<li class = "menu"> <a href="../html/designerHome.html">DESIGNER</a> </li>
	</ul><br/><br/>
	

	
	<!--note-->



	
	  <br><br>  <br>
	
	
	
	
	
	
	
	
	
	
	
<!--add FORM-->	

<body>



<div class="container">
  <form method="post">
  
    <br>
     
    <label for="ID">ID</label>
    <input type="text" id="ID" name="ID" placeholder="Product ID... " required>
	
	<label for="Name">Name</label>
    <input type="text" id="Name" name="Name" placeholder="Product Name... " required>

	<label for="Material">Material</label>
    <input type="text" id="Material" name="Material" placeholder="Enter the Material..."required >
	
	<label for="price">Price </label>
    <input type="text" id="Price" name="Price" placeholder="Enter price..."required>
	
	<br>
    <br>
	
    <center>
    <input type="submit" name ="submit"  value="Submit">
	</center>
  </form>
  	<br><br>
  
  
         	 <link rel="stylesheet" href="../styles/WomenShow.css">
			  <center>
	<button class = "button5"><a href = "ShowWomenList.php" class="hrf1">View details</button>
	</center>
<br><br>
  
</div>
</body>
	


	
	
	
	
<!--footer-->	
	
<hr>
<footer>
  <ul class="menu2">
		<li class = "menu2"> <a href="../html/LoginAsa.html">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="Feedback.php">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="#">CUSTOMER SERVICE</a> </li>
		
</ul><br>
	<hr class="hrl">
	 
<!--nav bar-->
 
    
	</ul>
	<footer>
	<ul class="menu03">
		<li class = "menu03"> <a href="contact_us.php">Contact US</a> </li>
		<li class = "menu03"> <a href="../html/aboutUs.html">About us</a> </li>
		<p class = "Address"> NO:14,Galle Road,Colombo-13. </p>
		
<!-- icon-->
    <center>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel= "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

 
 

<!--  icons -->
	 
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-google"></a>
	<a href="#" class="fa fa-instagram"></a>
	<a href="#" class="fa fa-pinterest"></a>
	 
 	 </center>
    <p class="copyright">© Copyright iCLOTHES | All Rights Reserved</p> 
	
	
    </footer>
	