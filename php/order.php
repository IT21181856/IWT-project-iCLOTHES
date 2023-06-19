<?php

require 'config.php';
session_start();
if(!isset($_SESSION["unm"])){
header('location:login.php');
die();	
}
?>

<!DOCTYPE.html>
<html>
	<head>
		<title> ORDER FORM </title>	
			
			<link rel="stylesheet" href="../styles/designer.css">
			<link rel="stylesheet" href="../styles/style1.css">
				
	</head>

	<body style="background-color : #c2d6d6;" >
		<!--img class="logo" src="images/logo.jpg" alt="shopping cart logo" width="200px" height="200px"-->
  
			<img  class ="logo"  src = "../images/logo.png"> 
				<center>
					<h2  class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
				</center>
  
		<!--icon bar-->
		
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<div class="icon-bar">
					<input type="text" class="search" placeholder="Search.." >
						<a href="#"class="login" >LOGIN</a> 
						<a class="active" href="#" class="cart"><font-size:204px>CART</a> 
				</div>


			<hr class="hrl">
		
		<!--nav bar-->
 
			<ul class="menu">
				 <li class = "menu"> <a href="../html/HOME.html">HOME</a> </li>
				<li class = "menu"> <a href="../html/womenHome.html">WOMEN</a> </li>
				<li class = "menu"> <a href="../html/MEN.html">MEN</a> </li>
				<li class = "menu"> <a href="../html/KID.html">KID</a> </li>
				<li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
				<li class = "menu"> <a href="../html/designerHome.html">DESIGNER</a> </li>
				  
			</ul>
	
			
		<!-- add page photo-->

		<img src = "../images/q4.jpg" style = "width: 100%" >

		<!--designer page nav bar-->
		
			<ul class = "menud">
				<li class = "menud"><a href="file:///C:/Users/ASUS/Desktop/IWTassignment2/src/html/all_designers.html">All</a></li>
				<li class = "menud"><a href="file:///C:/Users/ASUS/Desktop/IWTassignment2/src/html/global_designers%20.html">Global</a></li>
				<li class = "menud"><a href="../html/local_designers.html">Local</a></li>
				<li class = "menud"><a href="../html/pioneers.html">Pioneers</a></li>
				<li class = "menud"><a class = "actived" href="../html/orderform.html">Place Order</a></li>

			</ul>
	
	
	
		<h2> PLACE YOUR ORDER </h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	
			<fieldset>
		
				<legend > Customer Details </legend>
				
				Customer ID <br>
				<input type = "text"  name  = "cID"   id  = "cID"  required> <br/><br/>
				
				Customer Name <br>
				<input type = "text"  name  = "cName" id  = "cName"required> <br/><br/>
				
				Customer Contact Number <br>
				<input type = "text" name = "phone" id = "phone" required> <br/><br/>
				
				Customer Address <br>
				<textarea rows = "3" cols = "198" name = "address" id = "address" required></textarea> <br/>
				
			</fieldset>
			<br/><br/>
			
			
			<fieldset>
		
				<legend > Your Designer </legend>
				
				Designer ID <br>
				<input type = "text"  name  = "dID"   id  = "dID" required> <br/><br/>
				
				Designer Name <br>
				<input type = "text"  name  = "dName"  id  = "dName"required> <br/><br/>
				
				
			</fieldset>
			<br/><br/>
		
		
			<fieldset>
			
				<legend> What Is On Your Mind </legend>
				
				<textarea rows = "20" cols = "198" name = "needs" id = "needs" required></textarea> <br/>
				
			</fieldset>
			<br/><br/>
		
		

			
		
			<center>
			<input class = "lbutton" type = "Submit" value = "Submit"  name = "Submit"  id = "Submit">  
			<input class = "lbutton" type = "Reset" value = "Reset"  name = "Reset"   id = "Reset">
			</center>
		
	
			
			<?php
				if(isset($_POST["Submit"]))
				{
					$CUSTOMER_ID=$_POST["cID"];
					$CUSTOMER_NAME=$_POST["cName"];
					$CUSTOMER_CONTACT_NUMBER=$_POST["phone"];
					$ADDRESS=$_POST["address"];
					$DESIGNER_ID=$_POST["dID"];
					$DESIGNER_NAME=$_POST["dName"];
					$DESCRIPTION=$_POST["needs"];


					$sql="INSERT INTO dorder(CUSTOMER_ID,CUSTOMER_NAME,CUSTOMER_CONTACT_NUMBER,CUSTOMER_ADDRESS,DESIGNER_ID,DESIGNER_NAME,DESCRIPTION)VALUES('$CUSTOMER_ID','$CUSTOMER_NAME','$CUSTOMER_CONTACT_NUMBER','$ADDRESS','$DESIGNER_ID','$DESIGNER_NAME','$DESCRIPTION')";

					if($conn->query($sql))
					{
						echo "<script>alert('Order Submission Successed!! Please check your message box to download the e-receipt with your order id.')
						window.location.replace('../html/home.html')</script>";
			
					}
					
					else
					{
						echo "Error".$conn->error;
					}

				}
			?>
	
	
		</form>
		
	</body>
	
</html>		
			