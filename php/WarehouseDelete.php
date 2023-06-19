<?php
	include 'connectWarehouse.php';
	
	if(isset($_GET['deleteID']))
	{
		$ID =$_GET['deleteID'];
		
		$sql1="delete from warehousedata where ID=$ID";
		$result = mysqli_query($conn, $sql1);
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