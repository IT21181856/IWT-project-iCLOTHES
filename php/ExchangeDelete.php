<?php
	include 'connectAsa.php';
	
	if(isset($_GET['deleteUID']))
	{
		$UID =$_GET['deleteUID'];
		
		$sql1="delete from rdetails where UID=$UID";
		$result = mysqli_query($conn, $sql1);
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