<?php
    
	include 'connectWomen.php';
	$ID=$_GET['editID'];
	$sql1= "select * from women where ID='$ID'";
	$result= mysqli_query($conn,$sql1);
	$row =mysqli_fetch_assoc($result);
	
	$ID = $row['ID'];
	$Name= $row['Name'];
	$Material=$row['Material'];
	$Price= $row['Price'];
	
	
	

	
	if(isset($_POST['submit']))
	{
		$ID = $_POST['ID'];
		$Name= $_POST['Name'];
		$Material= $_POST['Material'];
		$Price= $_POST['Price'];
		
		
		$sql1="update women set ID='$ID',Name='$Name',Material='$Material', Price='$Price' where ID='$ID'";
		
		$result = mysqli_query($conn,$sql1);
		if($result)
		{
			header('location:ShowWomenList.php');
			
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
  <a href="../html/login.html"class="login" >LOGIN</a> 
  <a class="active" href="#" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
		 <li class = "menu"> <a href="../html/HOME.html">HOME</a> </li>
		 <li class = "menu"> <a href="../html/WOMEN">WOMEN</a> </li>
		 <li class = "menu"> <a href="../html/MEN">MEN</a> </li>
		 <li class = "menu"> <a href="../html/KID">KID</a> </li>
		 <li class = "menu"> <a href="../html/ACCESSORIES">ACCESSORIES</a> </li>
		 <li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
		 <li class = "menu"> <a href="../html/DESIGNER">DESIGNER</a> </li>	  
	</ul><br/><br/>
	

	
	<!--note-->
	

	
	
	  <br><br>  <br>
	
	
	
	
	
	
	
<!--add FORM-->	

<body>




<div class="container">
  <form method="post">
  
    <br>
     
    <label for="ID">Product ID</label>
    <input type="text" id="ID" name="ID" placeholder="Product ID... "value=<?php echo $ID;  ?> required>
	
	<label for="Name">Product Name</label>
    <input type="text" id="Name" name="Name" placeholder="Product Name... "value=<?php echo $Name;  ?> required>

	<label for="Material">MATERIAL</label>
    <input type="text" id="Material" name="Material" placeholder="Enter the Material..."value=<?php echo $Material;  ?> required >
	
	<label for="Price">Price </label>
    <input type="text" id="Price" name="Price" placeholder="Enter Price..."value=<?php echo $Price;  ?> required>
	
	
    <center>
    <input type="submit" name ="submit"  value="Submit">
	</center>
  </form>
  	<br><br>

</div>




















</body>
	
	
	
	
	


	  


	
	
	
	
	
	
	
	
	
	
<!--footer-->	
	
<hr>
<footer>
  <ul class="menu2">
		 <li class = "menu2"> <a href="../html/LoginAsa.html">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="../html/feedback">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="#">CUSTOMER SERVICE</a> </li>
		 <li class = "menu2"> <a href="../html/warehouse">WAREHOUSE</a> </li>
		
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
	