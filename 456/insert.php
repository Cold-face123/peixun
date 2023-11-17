<?php
$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (id, username, title, content,time)
VALUES('1','John','Huan','Helsochs,ss','2020-4-03 11:22:22')";

if ($conn->query($sql) === TRUE) {
    echo "新纪录插入成功";
}else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
