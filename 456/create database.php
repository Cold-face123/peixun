<?php
$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
title VARCHAR(30) NOT NULL,
content VARCHAR(50),
time TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}

$conn->close();

