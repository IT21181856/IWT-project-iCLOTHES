<?php

	$conn = new mysqli('localhost','root','','iclothes');
	if(!$conn)
	{
		die(mysqli_error($conn));
	}
	
    
?>