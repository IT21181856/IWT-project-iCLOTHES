<?php
	include 'connectAsa.php';

?>



<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | Return And Exchange</title>

	   <link rel="stylesheet" href="../styles/ShowExchangeList.css">

   </head>
   
   
   
<body>  


	
	
	
	
	
<div>	
	
<button class="button1" ><a href = "Return And Exchange.php" class="hrf">Another Request </a>
</button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
	  <th scope="col">Ref Number</th>
	  <th scope="col">Type</th>
	  <th scope="col">Reason</th>
	  <th scope="col">Date</th>
	  <th scope="col">Change</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  
  $sql1=" select * from rdetails";
  $result =mysqli_query($conn, $sql1);
  
  if ($result)
  {
      while( $row =mysqli_fetch_assoc($result))
	  {
		  $UID =$row['UID'];
		  $username =$row['username'];
		  $email =$row['email'];
		  $phoneNumber =$row['phoneNumber'];
		  $referenceNumber =$row['referenceNumber'];
		  $type =$row['type'];
		  $reason =$row['reason'];
		  $date =$row['date'];
		  
		  
		  
		  echo'<tr>
      <th scope="row">'.$UID.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
	  <td>'.$phoneNumber.'</td>
	  <td>'.$referenceNumber.'</td>
	  <td>'.$type.'</td>
	  <td>'.$reason.'</td>
	  <td>'.$date.'</td>
	  
	  <td>
			<button class=button2> <a href= "ExchangeEdit.php? editUID='.$UID.' "  class="hrf">Edit</button>
			<button class=button3> <a href= "ExchangeDelete.php? deleteUID='.$UID.'" class="hrf">Delete</button>
  
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
	