<!DOCTYPE html>
  <html>
  <head>
  <title>Edit details</title>
  <link rel="stylesheet" href="../styles/userstyle.css">
  <link rel="stylesheet" href="../styles/style64.css">
  </head>
  <body >
    
 <img  class ="logo"  src = "../images/logo.png"> 
 <center>
   
 <h2 class="welcometext"> WELCOME   TO   ICLOTHES MANUFACTURES </h2>
  </center>
  
<!--icon bar-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="icon-bar">
  <input type="text" class="search" placeholder="Search.." >
   <a href="index.php"class="login">PROFILE</a> 
  <a href="../php/logout.php"class="login">LOGIN</a> 
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


	
	
	
 
 
  <?php
  include 'connection.php';
  session_start();
	$id=$_SESSION['id'];
	$query=mysqli_query($db,"SELECT * FROM register where ID='$id'")or die(mysqli_error());
	$row=mysqli_fetch_array($query);
	?>
	
	<div style ="background-image: url('../images/userground.jpg');">
	<br><br><br><br>  
  <h1><center>Edit Profile</center></h1>
  <div class="profile-input-field">
        <h2><b>Please Fill-out All Fields<b></h2>
        <form method="post" action="#" >
          <div class="form-group">
            <label class="myuser">First_name</label>
            <input type="text" class="form-control" name="firstname" style="width:20em;" placeholder="Enter your firstname" value="<?php echo $row['firstname']; ?>" required />
          </div>
          <div class="form-group">
            <label class="myuser">Last_name</label>
            <input type="text" class="form-control" name="lastname" style="width:20em;" placeholder="Enter your lastname" required value="<?php echo $row['lastname']; ?>" />
          </div>
          <div class="form-group">
            <label class="myuser">Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your Email" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group">
            <label class="myuser">Password</label>
            <input type="text" class="form-control" name="password" style="width:20em;" required placeholder="Enter your password" value="<?php echo $row['password']; ?>"></textarea>
          </div>
		   <div class="form-group">
            <label class="myuser">UserType</label>
            <input type="text" class="form-control" name="usertype" style="width:20em;" disabled placeholder="Enter user type" value="<?php echo $row['usertype']; ?>"></textarea>
          </div>
		  </br>
		  </br>
		 
          <div class="form-group">
            <input type="submit" name="update" value ="update" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center><br>
             <a href="logout.php">Log out</a>
			 </br>
			 <a href="deleteuser.php">Delete my account</a>
           </center>
          </div>
        </form>
      </div>
	  <br><br><br><br><br><br><br> <br><br> 
	  </div>
      <?php
      if(isset($_POST['update'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "UPDATE register SET firstname = '$firstname',
                      lastname = '$lastname', email = '$email', password = '$password'
                      WHERE ID = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }     
			 
?>  




 
	
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
	
	


</body>
</html>