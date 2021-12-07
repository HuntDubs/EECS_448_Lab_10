<?php

$entered_id = $_POST["userID"];
$entered_post = $_POST["post"];

if ($entered_post == ""){
  echo "You must enter characters in your post.<br>Invalid Post!<br>";
  exit();
}

$mysqli = new mysqli("mysql.eecs.ku.edu", "h211w862", "iquu4ohJ", "h211w862");
/* check connection */
$idcheck = "SELECT user_id FROM Users WHERE user_id='" . $entered_id . "'";

$check = mysqli_query($mysqli, $idcheck);
if(mysqli_num_rows($check) > 0){
  $add = "INSERT INTO Posts (author_id, content) VALUES ('" . $entered_id . "','" . $entered_post . "')";
  if(mysqli_query($mysqli, $add)){
    echo "Post was saved.<br>";
  }
} else {
  echo "User doesn't exist! Please go create a user with the desired name.<br>";
}


/* close connection */
$mysqli->close();


?>
