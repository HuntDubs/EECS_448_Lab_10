<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "h211w862", "iquu4ohJ", "h211w862");
$sql = "SELECT user_id FROM Users";
$result = mysqli_query($mysqli, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "All of the current Users<br><br>";
    echo "<table border=1px solid black>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> user_id: </td>";
        echo "<td>". $row["user_id"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "There are currently no users.<br>";
}

$mysqli->close();

?>
