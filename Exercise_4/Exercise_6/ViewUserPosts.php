<?php

$entered_id = $_POST["users"];

$mysqli = new mysqli("mysql.eecs.ku.edu", "h211w862", "iquu4ohJ", "h211w862");
$sql = "SELECT content, author_id, post_id FROM Posts";
$result = mysqli_query($mysqli, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "All of the current Posts and their Post #<br><br>";
    echo "<table border=1px solid black>";
    while($row = $result->fetch_assoc()) {
        if($row["author_id"] == $entered_id){
          echo "<tr>";
          echo "<td>" . $row["post_id"] . " </td>";
          echo "<td>". $row["content"] . "</td>";
          echo "</tr>";
        }
    }
    echo "</table>";
} else {
    echo "There are currently no posts by the user.<br>";
}

$mysqli->close();

 ?>
