<?php
require 'config.php';
?>

<html>
	<head>
	
		<link rel="stylesheet" href="../styles/edit.css">
		
	</head>
	
	<body>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<fieldset>
			
				<legend > 
				
					Add Women Clothe Products In To iCLOTHES
					
				</legend>

				<br><br>

				<lable> ID </lable><br><br> 
				<input type="text" name="wID"><br><br>
				
				<lable>Name</lable><br><br>
				<input type="text" name="wName"><br><br>
				
				<lable>Material</lable><br><br> 
				<input type="text" name="wMat" ><br><br>
				
				<lable>Price</lable><br><br>
				<input type="text" name="wPrice"><br><br>

				<br><br>
				<input type="submit" value="submit" name="submitBtn" class="lbutton">
				<input type="reset" value="reset" class="lbutton"><br><br>
				
				<br><br>
				<br><br>


				<?php
				if(isset($_POST["submitBtn"]))
				{
					$ID=$_POST["wID"];
					$Name=$_POST["wName"];
					$Material=$_POST["wMat"];
					$Price=$_POST["wPrice"];
					
					$sql="INSERT INTO women(ID,NAME,MATERIAL,PRICE) VALUES('$ID','$Name','$Material','$Price')";
					
					if($conn->query($sql))
					{
						echo "updated";
					}
					
					else
					{
						echo "Error".$conn->error;
					}
				}

				function readData()
				{
					global $conn;
					$sql = "SELECT * FROM women";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) 
					{
						echo ("<table border='1'>");
				?>
						<html>
						<th >Product ID</th><th> Name </th><th> Material </th><th> Price </th></html>
						
						<?php
						while($row = $result->fetch_assoc()) 
						{
							echo ("<tr>");
							echo ("<td>". $row['ID']. "</td>");
							echo ("<td>" . $row['NAME'] . "</td>");
							echo ("<td>" . $row['MATERIAL'] . "</td>");
							echo ("<td>" . $row['PRICE'] . "</td>");
							echo ("<tr>");
						}
						echo ("</table>");
					}
					
					else 
					{
						echo "No results <br />"; 
					}
				}

				readData();
				?>



				<br><br><button class="nbuttn"><a class = "buttn" href = "home.php">BACK TO HOME</a></button>
				<button class="nbuttn"><a class = "buttn" href = "wdelete.php">GO TO DELETE</button></a><br>

			</fieldset>
		</form>

	</body>
	
</html>