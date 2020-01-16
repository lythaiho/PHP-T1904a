<?php session_start();
    if($_SESSION['user']==null) header("Location: /php/demo/login.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/import/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/import/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/import/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="/import/css/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="/import/css/style.css" type="text/css">
    <title>Document</title>
</head>
<body>
<h1>Xin chào: <?php echo $_SESSION['user']['email']; ?></h1>
</body>
<script src="/import/js/bootstrap.min.js"></script>
<script src="/import/js/all.min.js"></script>
<script src="/import/js/popper.min.js"></script>
<script src="/import/js/jquery-3.4.1.min.js"></script>
<script src="/import/js/datatables.min.js"></script>
</html>