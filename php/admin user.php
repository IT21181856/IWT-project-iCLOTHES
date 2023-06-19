<?php require 'config.php';?>
<html>
<body>
<head><link rel="stylesheet" href="../styles/edit.css"></head><fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Delete user details </h3>
<label>Enter user ID</label><br><br><input type="text" name="User_ID"><BR /><br>
<input type="submit" value="Delete" name="btnSubmit" class="btn">
<input type="reset" value="Reset" class="btn">
</form>
</body>
</html>
<?php

function readData()
{
global $conn;
$sql="SELECT * FROM users";
$result=$conn->query($sql);
if ($result->num_rows>0)
   {
echo("<table border='3'>");
?>
<html>
<th >User_ID</th><th>User_Name</th><th>Full_name</th><th>Gender</th><th>Age</th><th>Address</th></html>
<?php
	while($row=$result->fetch_assoc())
	{
		echo ("<tr>");
		echo ("<td>".$row['User_ID'] ."</td>" );
		echo ("<td>".$row['User_Name']."</td>");
		echo ("<td>".$row['Full_name']."</td>");
		echo ("<td>".$row['Gender']."</td>");
		echo ("<td>".$row['Age']."</td>");
		echo ("<td>".$row['Address']."</td>");

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
function deleteData($ID){
global $conn;
$sql = "delete from users where User_ID='$ID'";
if($conn->query($sql)){
echo "Deleted successfully<BR />";
}else{
echo "Error: ".$conn->error;
}
}

if(isset($_POST["btnSubmit"]))
{ 
$ID=$_POST["User_ID"];
if($ID!="")
   {
deleteData($ID);
   }

}

?>

<br><br>
<button class="btn2"><a href = "home.php">GO BACK TO HOME</a></button>
</fieldset>