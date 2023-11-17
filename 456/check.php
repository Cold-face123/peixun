<?php

$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM MyGuests WHERE username = 'john' ";

//$res=$conn->query($sql);
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res)) {
    echo "id:1" . $row["id"]. "username:John" . $row["username"]. "  title:Huan " . $row["title"] ."content:Helsochs,ss" . $row["content"] . " time:2020-4-03 11:22:22". $row["time"] ."<br>";
}


$conn->close();