<?php
require 'config.php';
?>
<html>
<head>

<link rel="stylesheet" href="../styles/edit.css">
</head>
<body style="background-color : #c2d6d6;" >
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
<legend > 
<h3>Add Fabric Products To iCLOTHES</h3><br><br>
</legend>

<lable>ID</lable><br> <input type="text" name="ofID"><BR/><br>
</lable>Name</lable><br> <input type="text" name="ofName"><BR/><br>
</lable>Description</lable><br> <input type="text" name="ofDesc" ><BR/>
<br><br><input type="submit" value="submit" name="submitBtn" class="lbutton">
<input type="reset" value="reset" class="lbutton"><br><br>
</form>


<?php
if(isset($_POST["submitBtn"])){
$ID=$_POST["ofID"];
$Name=$_POST["ofName"];
$Description=$_POST["ofDesc"];
$sql="INSERT INTO fabrics(ID,Name,Description) VALUES('$ID','$Name','$Description')";
if($conn->query($sql)){
	echo "updated";
}
else{
	echo "Error".$conn->error;
}
}

function readData(){
global $conn;
$sql = "SELECT * FROM fabrics";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
echo ("<table border='1'>");
?>
<html>
<th >Fabric ID</th><th> Name </th><th> Description </th></html>
<?php
while($row = $result->fetch_assoc()) {
echo ("<tr>");
echo ("<td>". $row['ID']. "</td>");
echo ("<td>" . $row['Name'] . "</td>");
echo ("<td>" . $row['Description'] . "</td>");
echo ("<tr>");
}
echo ("</table>");
}else {
echo "No results <br />"; 
}
}

readData();
?>



<br><br><button class="btn2"><a href = "home.php">BACK TO HOME</a></button>
<button class="btn2"><a href = "delete.php">GO TO DELETE</button></a><br>

</fieldset>
</body>
</html>