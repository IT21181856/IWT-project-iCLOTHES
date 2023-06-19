<?php
	include 'connectFeedback.php';
	
	if(isset($_GET['deleteID']))
	{
		$ID =$_GET['deleteID'];
		
		$sql1="delete from feedbacks where ID=$ID";
		$result = mysqli_query($conn, $sql1);
		if($result)
		{
			header('location:ShowFeedbackList.php');
		}
		else
		{
			die(mysqli_error($conn));
		}
	}



?>