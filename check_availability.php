<?php
error_reporting(0);
require_once("./connection.php");
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("There is some problem in connection");

if (!empty($_POST["cnic"])) {
    $strQuery = "SELECT count(*) as row1 FROM users WHERE CNIC='" . $_POST["cnic"] . "'";
   
    $rs = mysqli_query($conn, $strQuery);
    $row = mysqli_fetch_assoc($rs);
    $user_count = $row['row1'];
  
    if ($user_count > 0)
        echo "<span class='status-not-available'> CNIC Not Available.</span>";
    else
        echo "<span class='status-available'> CNIC Available.</span>";
}
?>