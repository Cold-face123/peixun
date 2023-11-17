<?php

$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "UPDATE MyGuests SET username ='Hanma',title='update' WHERE id = 1";
$res = mysqli_query($conn,$sql);

$conn->close();