<?php
$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";
$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "DELETE FROM MyGuests WHERE id= 1";
$res = mysqli_query($conn,$sql);

$conn->close();