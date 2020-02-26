<?php
session_start();
$email=$_POST["email"];
$password= $_POST["password"];
$confirmPassword =$_POST["confirmPassword"];

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

if($password==$confirmPassword){
    $sql = "INSERT INTO users (email, password) VALUES ('{$_POST['email']}', '{$_POST['password']}') ";
    if ($conn->query($sql) === TRUE) {
        $_SESSION["message"]=[
            'message'=>"Create account successfully",
            'type'=>'success'
        ];
        header("Location: /php/demo/login.php");
    } else {
        $_SESSION["message"]=[
            'message'=>$conn->error,
            'type'=>'error'
        ];

        header("Location: /php/demo/create-account.php");
    }
}else{
    $_SESSION["message"]=[
        'message'=>"Password and Confirm password do not match",
        'type'=>'error'
    ];
    header("Location: /php/demo/create-account.php");
}
$conn->close();

