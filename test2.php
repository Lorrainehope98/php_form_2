<?php
$con = mysqli_connect("localhost", "root", "", "garden_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO users (user_id, firstname, lastname, password, email)
VALUES ('4', 'Fred', 'Smith', 'Kettering3', 'fredsmith@yahoo.co.uk')");

mysqli_close($con);
?>