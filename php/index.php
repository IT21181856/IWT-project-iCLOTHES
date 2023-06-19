<!DOCTYPE html>
  <head>
  <title>Edit details </title> 
  <link rel="stylesheet" href="../styles/userstyle.css">
  <link rel="stylesheet" href="../styles/style64.css">
  </head>
    
 <img  class ="logo"  src = "../images/logo.png"> 
 <center>
   
 <h2 class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
   <a href="index.php"class="login" >PROFILE</a> 
  <a href="../php/logout.php"class="login" >LOGOUT</a> 
  <a class="active" href="../php/payment.php" class="cart"><font-size:204px>CART</a> 
 
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
		  
	</ul>
 <div style ="background-image: url('../images/userground.jpg');">
	</br></br></br></br></br>	</br></br></br></br></br>	 
   
<div class="profile-input-field">
<center>
        <h2><b>Enter your details</b></h2>
        <form method="post" action="#" >
          <div class="form-group">
            <label class="myuser">Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your Email" required />
          </div>
          <div class="form-group">
            <label class="myuser">Password</label>
            <input type="password" class="form-control" name="pass" style="width:20em;" placeholder="Enter your Password" required />
          </div>
		  </br>
		  </br>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:20em; margin:0;" /><br><br>
            </div>
          
        </form>
      </div>
      </center>
	  
      <?php
      session_start();
      include 'connection.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['pass'];
  $query=mysqli_query($db,"SELECT * FROM register WHERE email = '$email' AND password = '$password'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['ID'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script>
    <?php
}
else
{
    ?>
    <script>
      alert('Re enter user name and password');
      document.location='index.php'
    </script>
    <?php
}
}
      ?>
	  	</br></br></br></br></br>	</br></br></br></br></br>	 
	  </div>
	  
 
	  
	  
	  
	  

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
	<li class = "menu03"> <a href="../php/contact_us.php">Contact US</a> </li>
		<li class = "menu03"> <a href="../php/aboutUs.php">About us</a> </li>
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
	
	


</body>
</html>

</body>
</html>