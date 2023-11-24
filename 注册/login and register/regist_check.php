<?php
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "LZC1235679";
$dbname = "database1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("链接失败：".mysqli_connect_error());
}
function alert($str,$url){
    echo '<script> alert ("'.$str.'");location.href="'.$url.'";</script>';
}
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$sql = "select * from users where username = '$username'";
$rs = mysqli_query($conn,$sql);
if(mysqli_num_rows($rs) > 0){
    alert('手机号已注册！','regist.php');
    exit();
}
if(strlen($username) != 11){
    alert('电话号码不完整,请填写完整！', 'regist.php');
    exit();
}
if ($password1 != $password2){
    alert('两次输入的密码不一致','regist.php');
    exit();
}
$sql = "insert into users (username,password)
VALUES ('$username', '$password1')";
$rs = mysqli_query($conn,$sql);
if($rs){
    alert('用户注册成功!','');
}else {
    alert('注册失败', 'regist.php');
}
