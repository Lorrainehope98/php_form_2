<?php
require "db.php";
if (isset($_POST["emailaddress"])) {
	$sql = "INSERT INTO users (emailaddress, password)
	      	VALUES ('$_POST[emailaddress]', '$_POST[password]')";
	if (mysqli_query($con,$sql)) {
	   // redirect uses GET instead of POST
		header('Location: test.php');
	}
}	
?>
<html>
<body>
<form action="users.php" method="post">
Emailaddress: <input type="text" name="emailaddress">
Password: <input type="text" name="password">
<input type="submit" value="go">
</form>
<p><a href="/lorraine/garden/test.php">Reload</a></p>
<?php
// return all names
$result = mysqli_query($con, "SELECT * FROM users");

while ($row = mysqli_fetch_array($result)) {
	echo $row['emailaddress'] . " " . $row['password'];
	echo "<br>";
}
?>
</body>
</html>








