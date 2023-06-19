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
				
					Add Designers To iCLOTHES
					
				</legend>


				<br><br>
				
				<lable>ID</lable><br><br>
				<input type="text" name="dID"><br><br>
				
				<lable>Name</lable><br><br>
				<input type="text" name="dName"><br><br>
				
				<lable>Description</lable><br><br> 
				<input type="text" name="dDes" ><br><br>
				
				<lable>Email</lable><br><br>
				<input type="text" name="dMail"><br><br>

				<br><br>
				
				<input type="submit" value="submit" name="submitBtn" class="lbutton">
				<input type="reset" value="reset" class="lbutton"><br><br>
				
				
				<br><br>
				<br><br>



				<?php
					if(isset($_POST["submitBtn"]))
					{
						$ID=$_POST["dID"];
						$Name=$_POST["dName"];
						$Description=$_POST["dDes"];
						$Email=$_POST["dMail"];
						
						$sql="INSERT INTO designer(D_ID,NAME,DESCRIPTION,EMAIL) VALUES('$ID','$Name','$Description','$Email')";
						
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
						$sql = "SELECT * FROM designer";
						$result = $conn->query($sql);
						
						if ($result->num_rows > 0) 
						{
							echo ("<table border='1'>");
				?>
							<html>
							<th > Designer ID</th><th> Name </th><th> Description </th><th> Email </th></html>
							
							<?php
								
								while($row = $result->fetch_assoc()) 
								{
									echo ("<tr>");
									echo ("<td>". $row['D_ID']. "</td>");
									echo ("<td>" . $row['NAME'] . "</td>");
									echo ("<td>" . $row['DESCRIPTION'] . "</td>");
									echo ("<td>" . $row['EMAIL'] . "</td>");
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
					<button class="nbuttn"><a class = "buttn" href = "ddelete.php">GO TO DELETE</button></a><br>

				</fieldset>
				
			</form>
			
		</body>
		
</html>