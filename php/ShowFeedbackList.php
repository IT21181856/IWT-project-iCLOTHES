<?php
	include 'connectFeedback.php';

?>



<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | Feedback</title>

	   <link rel="stylesheet" href="../styles/FeedbackListShow.css">
       
   </head>   


<body>
	<div class="imageEdit">
  <div class="text">Feedback</div>
</div>
	
	<center>
	  <button class="button1" ><a href = "Feedback.php" class="hrf">Add Feedback </a>
</button></center>
	
<div>	
	  



<table class="table">
  <thead>
    <tr>
      <th scope="col">Feedback Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
	  <th scope="col">Feedback</th>
	  <th scope="col">Date</th>
	  <th scope="col">Update</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  
  $sql1=" select * from feedbacks";
  $result =mysqli_query($conn, $sql1);
  
  if ($result)
  {
      while( $row =mysqli_fetch_assoc($result))
	  {
		  $ID =$row['ID'];
		  $username =$row['username'];
		  $email =$row['email'];
		  
		  $feedback =$row['feedback'];
		  $date =$row['date'];
		  
		  
		  
		  echo'<tr>
      <th scope="row">'.$ID.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
	 
	  <td>'.$feedback.'</td>
	  <td>'.$date.'</td>
	  
	  <td>
			<button class=button2> <a href= "FeedbackEdit.php? editID='.$ID.' "  class="hrf">Edit</button>
			<button class=button3> <a href= "FeedbackDelete.php? deleteID='.$ID.'" class="hrf">Delete</button>
  
	  </td>
	  
    </tr>';
		  
		  
		  
	  }
  }
  
  
  
  ?>
 	
  </tbody>
</table>


   
   
   </div>  
	
	</body>
    </html>
	