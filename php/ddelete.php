<?php require 'config.php';?>

	<html>
	
		<head>
		
			<link rel="stylesheet" href="../styles/edit.css">
			
		</head>
		
		<body>
			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			
				<fieldset>
				
					<legend > 
					
						Delete Designers From iCLOTHES' Designer List 
					
					</legend>



					<label>Enter designer ID</label><br><br>
					<input type="text" name="dID"><br><br>
					
					<input type="submit" value="Delete" name="btnSubmit" class="lbutton">
					<input type="reset" value="Reset" class="lbutton">
					
					<br><br>
					<br><br>

					<?php

						function readData()
						{
						global $conn;
						$sql="SELECT * FROM designer";
						$result=$conn->query($sql);
						if ($result->num_rows>0)
						{
							echo("<table border='3'>");
					?>
							<html>
							<th >ID</th><th>Name</th><th>Description</th><th>Email</th></html>
							
							<?php
							
								while($row=$result->fetch_assoc())
								{
									echo ("<tr>");
									echo ("<td>".$row['D_ID'] ."</td>" );
									echo ("<td>".$row['NAME']."</td>");
									echo ("<td>".$row['DESCRIPTION']."</td>");
									echo ("<td>".$row['EMAIL']."</td>");

									echo ("</tr>");
								}
								
								echo("</table>");
						}
						
						else 
						{
							echo "No results <BR />";
						}
						
					} 
					
					readData();
					
					function deleteData($ID)
					{
						global $conn;
						$sql = "delete from designer where D_ID='$ID'";
						
						if($conn->query($sql))
						{
							echo "Deleted successfully<BR />";
						}
						
						else
						{
							echo "Error: ".$conn->error;
						}
					}

					if(isset($_POST["btnSubmit"]))
					{ 
						$ID=$_POST["dID"];
						
						if($ID!="")
						{
							deleteData($ID);
						}

					}

					?>

					<br><br>
					<button class="nbuttn"><a class = "buttn" href = "home.php">GO BACK TO HOME</a></button>
					<button class="nbuttn"><a class = "buttn" href = "designer.php">GO TO ADD & CHECK PRODUCTS</a><button>
					
				</fieldset>
				
			</form>
			
		</body>
		
</html>