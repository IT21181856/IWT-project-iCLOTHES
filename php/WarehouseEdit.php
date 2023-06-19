<?php
    
	include 'connectWarehouse.php';
	$ID=$_GET['editID'];
	$sql1= "select * from warehousedata where ID=$ID";
	$result= mysqli_query($conn,$sql1);
	$row =mysqli_fetch_assoc($result);
	
	$productname=$row['productname'];
	$quantity=$row['quantity'];
	
	$price=$row['price'];
	$date=$row['date'];
	
	if(isset($_POST['submit']))
	{
		$productname = $_POST['productname'];
		$quantity= $_POST['quantity'];
		$price= $_POST['price'];
		$date= $_POST['date'];
		
		$sql1="update warehousedata set ID=$ID,productname='$productname',quantity=$quantity, price=$price, date='$date' where ID=$ID";
		
		$result = mysqli_query($conn,$sql1);
		if($result)
		{
			header('location:ShowWarehouseList.php');
			
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
	<title>iCLOTHES | Feedback</title>
	  <link rel="stylesheet" href="../styles/header and footer.css">
		<link rel="stylesheet" href="../styles/feedback.css">
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
  <a class="active" href="view_payment.php" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
	  <li class = "menu"> <a href="../html/home.html">HOME</a> </li>
		 <li class = "menu"> <a href="../html/womenhome.html">WOMEN</a> </li>
		 <li class = "menu"> <a href="../html/MEN.html">MEN</a> </li>
		 <li class = "menu"> <a href="../html/KID.html">KID</a> </li>
		 <li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
		 <li class = "menu"> <a href="../html/designerHome.html">DESIGNER</a> </li>
	</ul><br/><br/>
	

	
	<!--note-->
	
<center>
<div class="div2">
  <p><strong><legend class="leg2">Feedback<legend></strong> 
  <br>We hope to provide you with high quality products and quality.  We look forward to your feedback on the quality of our services. If you encounter any inconvenience, please contact our representative immediately..</p>
</div>	
</center>
	
	
	  <br><br>  <br>
	
	
	
	
	
	
	
<!--add FORM-->	

<body>




<div class="container">
  <form method="post">
  
    <br>
     
    <label for="userName">Product Name</label>
    <input type="text" id="productname" name="productname" placeholder="Product name... "value=<?php echo $productname;  ?> required>
	

	<label for="Quantity">Quantity</label>
    <input type="text" id="quantity" name="quantity" placeholder="Enter the quantity..."value=<?php echo $quantity;  ?> required >
	
	<label for="price">Price </label>
    <input type="text" id="price" name="price" placeholder="Enter price..."value=<?php echo $price;  ?> required>
	
	<br>
	<br>
	<label for="date">Date </label>
    <input type="date" id="date" name="date" value=<?php echo $date;  ?>  required>
	<br>
    <br>
	
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
		 <li class = "menu2"> <a href="Feedback.php">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="#">CUSTOMER SERVICE</a> </li>
		 <li class = "menu2"> <a href="Warehouse.php">WAREHOUSE</a> </li>
		
</ul><br>
	<hr class="hrl">
	 
<!--nav bar-->
 
    
	</ul>
	<footer>
	<ul class="menu03">
	<li class = "menu03"> <a href="../php/contact_us.php">Contact US</a> </li>
		<li class = "menu03"> <a href="aboutUs.html">About us</a> </li>
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
	