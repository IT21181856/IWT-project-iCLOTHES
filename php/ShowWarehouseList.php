<?php
	include 'connectWarehouse.php';

?>



<!DOCTYPE html>
<html>
   <head>
	<title>iCLOTHES | WAREHOUSE</title>

	   <link rel="stylesheet" href="../styles/WarehouseListShow.css">
       
   </head>   


<body>
	<div class="imageEdit">
  <div class="text">WAREHOUSE DATA</div>
</div>
	
	<center>
	  <button class="button1" ><a href = "Warehouse.php" class="hrf">Add Details </a>
</button></center>
	
<div>	
	  



<table class="table">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      
	  <th scope="col">Price</th>
	  <th scope="col">Date</th>
	  <th scope="col">Change</th>
	  
    </tr>
  </thead>
  <tbody>
  
  
  <?php
  
  $sql1=" select * from warehousedata";
  $result =mysqli_query($conn, $sql1);
  
  if ($result)
  {
      while( $row =mysqli_fetch_assoc($result))
	  {
		  $ID =$row['ID'];
		  $productname =$row['productname'];
		  $quantity =$row['quantity'];
		  $price =$row['price'];
		  $date =$row['date'];
		  
		  
		  
		  echo'<tr>
      <th scope="row">'.$ID.'</th>
      <td>'.$productname.'</td>
	  <td>'.$quantity.'</td>
	  <td>'.$price.'</td>
	  <td>'.$date.'</td>
	  
	  <td>
			<button class=button2> <a href= "WarehouseEdit.php? editID='.$ID.' "  class="hrf">Edit</button>
			<button class=button3> <a href= "WarehouseDelete.php? deleteID='.$ID.'" class="hrf">Delete</button>
  
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
	