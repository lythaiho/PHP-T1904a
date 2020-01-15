<?php
session_start();
$email=$_POST["email"];
$password= $_POST["password"];

//server info
$serverName = "localhost";
$severUser = "root";
$serverPassword = "";
$database = "t1904a-php";
//connect database
$conn = new mysqli($serverName, $severUser, $serverPassword, $database);
//check connection
if ($conn->connect_error) {
    die("Connection False");
}
//echo "Connect successfully";
//Query spl
$sql = "SELECT * FROM users WHERE email LIKE '".$email."' AND password LIKE '".$password."'";
$resulf = $conn->query($sql);
if ($resulf->num_rows > 0) {
    echo "Login successfully";
    $user= null;
    while ($row = $resulf->fetch_assoc()) {
        $user = $row;
    }
    $_SESSION["user"] = $user;
    header("Location: /php/index.php");
} else {
    $_SESSION["message"]=[
        'message'=>"Email or password is wrong",
        'type'=>'error'
    ];
    header("Location: login.php");
}
