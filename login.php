<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pci";

$conn = new mysqli($servername, $username, $password, $dbname) or die(mysql_error());
$dbCnic = "";
$dbPassword = "";
$cnic = $_POST['cnic'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE CNIC='" . $_POST['cnic'] . "' && Password='" . $_POST['password'] . "' ");

while ($row = mysqli_fetch_assoc($sql)) {
    $dbCnic = $row["CNIC"];
    $dbPassword = $row["Password"];
    if ($dbCnic == $cnic && $dbPassword == $password) {
        header('location:index.php');
    }
}
if ($cnic != $dbCnic or $password != $dbPassword) {
    include ('LogIn.html');
    echo "<p class='message'>" . "Incorrect CNIC or Password!" . "</p>";
    exit();
}
?>