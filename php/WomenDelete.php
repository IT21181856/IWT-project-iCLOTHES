<?php
	include 'connectWomen.php';
	
	if(isset($_GET['deleteID']))
	{
		$ID =$_GET['deleteID'];
		
		$sql1="delete from women where ID=$ID";
		$result = mysqli_query($conn, $sql1);
		if($result)
		{
			header('location:ShowWomenList.php');
		}
		else
		{
			die(mysqli_error($conn));
		}
	}



?>