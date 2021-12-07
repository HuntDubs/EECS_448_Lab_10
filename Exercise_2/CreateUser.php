<?php

$entered_id = $_POST["userID"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "h211w862", "iquu4ohJ",
"h211w862");
/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$sql = "INSERT INTO Users (user_id) VALUES ('" . $entered_id . "')";

if (mysqli_query($mysqli, $sql)) {
  echo "New User created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
  echo "<br><br>";
  echo "User ID is not Valid!<br>";
}


/* close connection */
$mysqli->close();


?>
