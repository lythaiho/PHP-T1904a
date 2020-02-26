<?php

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
$sql = "SELECT * FROM users";
$resulf = $conn->query($sql);
$users = [];
if ($resulf->num_rows > 0) {
    while ($row = $resulf->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo "No result found";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="function/views/import/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="function/views/import/css/style.css" type="text/css">
    <title>List Users</title>
</head>
<body>
<section>
    <div class="container">
        <div class="text-36 pt-4">List Users</div>
        <table class="table border-bottom border-left border-right" id="list-users">
            <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">UserName</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($users as $u): ?>
            <tr>
                <td><?php echo $u ["id"];?></td>
                <td><?php echo $u ["email"];?></td>
                <td><?php echo $u ["username"];?></td>
                <td><?php echo $u ["age"];?></td>
                <td><?php echo $u ["address"];?></td>
                <td><?php echo $u ["telephone"];?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</section>
</body>
<script src="function/views/import/js/bootstrap.min.js"></script>
<script src="function/views/import/js/all.min.js"></script>
<script src="function/views/import/js/popper.min.js"></script>
<script src="function/views/import/js/jquery-3.4.1.min.js"></script>
<script src="function/views/import/js/datatables.min.js"></script>
<script>
    $('#list-users').DataTable();
</script>
</html>