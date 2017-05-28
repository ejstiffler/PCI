<?php

error_reporting(0);
require_once("connection.php");
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("There is some problem in connection");

if (!empty($_POST["varnamecnic"])) {
    $strQuery = "SELECT count(*) as row1 FROM users WHERE CNIC='" . $_POST["varnamecnic"] . "'";

    $rs = mysqli_query($conn, $strQuery);
    $row = mysqli_fetch_assoc($rs);
    $user_count = $row['row1'];

    if ($user_count > 0) {
//        echo "<span class='status-not-available'> Name Not Available</span>";
        echo 0;
    } else {
//        echo "<span class='status-available'> Name Available</span>";
        echo 1;
    }
}
?>