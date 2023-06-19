<?php
    
	include 'connectAsa.php';
	$UID=$_GET['editUID'];
	$sql1= "select * from rdetails where UID=$UID";
	$result= mysqli_query($conn,$sql1);
	$row =mysqli_fetch_assoc($result);
	
	$username=$row['username'];
	$email=$row['email'];
	$phoneNumber=$row['phoneNumber'];
	$referenceNumber=$row['referenceNumber'];
	$type=$row['type'];
	$reason=$row['reason'];
	$date=$row['date'];
	
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$email= $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];
		$referenceNumber= $_POST['referenceNumber'];
		$type= $_POST['type'];
		$reason= $_POST['reason'];
		$date= $_POST['date'];
		
		$sql1="update rdetails set UID=$UID,username='$username',email='$email', phoneNumber=$phoneNumber, referenceNumber= '$referenceNumber' ,type='$type', reason='$reason', date='$date' where UID=$UID";
		
		$result = mysqli_query($conn,$sql1);
		if($result)
		{
			header('location:ShowExchangeList.php');
			
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
	<title>iCLOTHES | Return And Exchange</title>
	    <link rel="stylesheet" href="../styles/header and footer.css">
		<link rel="stylesheet" href="../styles/returnNexchange.css">
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
  <a href="../html/logout.html"class="login" >LOGOUT</a> 
  <a class="active" href="view_payment.php" class="cart"><font-size:204px>CART</a> 
 
</div>


<hr class="hrl">
<!--nav bar-->
 
    <ul class="menu">
		 <ul class="menu">
		 <li class = "menu"> <a href="../html/HOME.html">HOME</a> </li>
		 <li class = "menu"> <a href="../html/womenHome.html">WOMEN</a> </li>
		 <li class = "menu"> <a href="../html/MEN.html">MEN</a> </li>
		 <li class = "menu"> <a href="../html/KID.html">KID</a> </li>
		 <li class = "menu"> <a href="../html/fabric.html">FABRICS</a> </li>
		 <li class = "menu"> <a href="../html/designerHome.html">DESIGNER</a> </li>		   	  
	</ul><br/><br/>
	

	
	<!--note-->
	
<div class="div1">
  <p><strong><legend class="leg1">Return Policy</legend></strong> 
  <br><br>
  If your product is damaged, defective, incorrect or incomplete at the time of delivery, please raise a return request on website Return or exchange request must be raised within 14 days for ICLOTHES items.
  <br><br>
  The company reserves the right to refund or exchange the order or to refuse your request, subject to terms and conditions.
  
  </p>
</div>

<div class="div2">
  <p><strong><legend class="leg2">Valid Reason To Return An Order</legend></strong>
  <ul>
		<li>Delivered product is damaged</li>
		<li>Delivered product is incomplete (i.e. has missing items and/or accessories.)</li>
		<li>Delivered product is incorrect (i.e. wrong product/size/colour, fake item, or expired)</li>
		<li>Delivered product is does not match product description or picture.</li>
		<li>Delivered product does not fit.</li>
  
  </ul>
  </p>
</div>

<div class="div3">
  <p><strong><legend class="leg3">How To Return Or Exchange Order<legend></strong> 
  <br>Fill out the form below and submit. Our agent will contact you within a day...</p>
</div>	
	
	
	
	  <br><br>  <br><br>
	
	
	
	
	
	
	
	
	
	
	
<!--add FORM-->	

<body>



<div class="container">
  <form method="post">
  
   <h2>RETURN  OR  EXCHANGE  REQUEST </h2>
    <br>
     
    <label for="userName">User Name</label>
    <input type="text" id="username" name="username" placeholder="Your name... " value=<?php echo $username;  ?> required>
	
	<label for="email">Email </label>
    <input type="text" id="email" name="email" placeholder="Enter your email..." value=<?php echo $email;  ?> required>

	<label for="telephoneno">Phone Number</label>
    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number..." value=<?php echo $phoneNumber;  ?> required >
	
	<label for="refNumber">Reference Number </label>
    <input type="text" id="referenceNumber" name="referenceNumber" placeholder="Enter your reference number..." value=<?php echo $referenceNumber;  ?> required>
	

    <label for="type" >Type</label>
    <select id="type" name="type ">
      <option value=<?php echo $type;  ?> value="exchange" >Exchange</option>
      <option value="return" >Return</option>
	  
    </select>

	
    <label for="reason">Reason</label>
    <textarea id="reason" name="reason" placeholder="Enter the reason" style="height:200px" value=<?php echo $reason;  ?> required></textarea>
	
	<br>
	<br>
	<label for="date">Date </label>
    <input type="date" id="date" name="date" value=<?php echo $date;  ?> required>
	<br>
    <br>
	
    <center>
    <input type="submit" name ="submit"  value="Update">
	</center>
  </form>
</div>




















</body>
	
	
	
	
	


	  


	
	
	
	
	
	
	
	
	
	
<!--footer-->	
	
<hr>
<footer>
  <ul class="menu2">
		 <li class = "menu2"> <a href="	Return And Exchange.php">RETURN & EXCHANGE</a> </li>
		 <li class = "menu2"> <a href="Feedback.php">FEEDBACK</a> </li>
		 <li class = "menu2"> <a href="#">CUSTOMER SERVICE</a> </li>
		 <li class = "menu2"> <a href="Warehouse.php">WAREHOUSE</a> </li>
		
</ul><br>
	<hr class="hrl">
	 
<!--nav bar-->
 
    
	</ul>
	<footer>
	<ul class="menu03">
		<li class = "menu03"> <a href="contact_us.html">Contact US</a> </li>
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
	