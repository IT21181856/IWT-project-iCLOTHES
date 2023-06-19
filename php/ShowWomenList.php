<?php
	include 'connectWomen.php';

?>



<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | WOMEN</title>

	   <link rel="stylesheet" href="../styles/WomenListShow.css">
       
   </head>   


<body>
	<div class="imageEdit">
  
</div>
	
	<center>
	  <button class="button1" ><a href = "womenN.php" class="hrf">Add Details </a>
</button></center>
	
<div>	
	  



<table class="table">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Material</th>
	  <th scope="col">Price</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  
  $sql1=" select * from women";
  $result =mysqli_query($conn, $sql1);
  
  if ($result)
  {
      while( $row =mysqli_fetch_assoc($result))
	  {
		$ID = $row['ID'];
		$Name= $row['Name'];
		$Material=$row['Material'];
		$Price= $row['Price'];
		  
		 
		  
		  
		  
		  echo ' <tr>
      <th scope="row">'.$ID.'</th>
      <td>'.$Name.'</td>
	  <td>'.$Material.'</td>
	  <td>'.$Price.'</td>
	  

	  
	  <td>
			<button class=button2> <a href= "WomenEdit.php? editID='.$ID.' "  class="hrf">Edit</button>
			<button class=button3> <a href= "WomenDelete.php? deleteID='.$ID.'" class="hrf">Delete</button>
  
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
	