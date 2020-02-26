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
//        echo $row["id"] . $row['username'] . $row["email"];
        $users[] = $row;
    }
} else {
    echo "No result found";
}
?>
<?php foreach ($users as $u): ?>
    <p><?php echo $u["id"] . "-" . $u['username'] . "-" . $u["email"]; ?></p>
<?php endforeach; ?>