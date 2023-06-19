

<?php
  include 'connection.php';
  session_start();
	$id=$_SESSION['id'];
	$query=mysqli_query($db,"delete FROM register where ID ='$id'")or die(mysqli_error());
	
  
		 
 
		if($query){
		  header('location:../html/home.html');
		} 
		
		else {
		  
		  echo 'Error deleting record: ' . $id->error;
		}

		$id->close();
?>