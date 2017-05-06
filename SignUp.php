<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pci";

$conn = mysqli_connect($servername,$username,$password,$dbname) or die("There is some problem in connection");
$username=$_POST['username'];
$email=$_POST['email'];
$cnic=$_POST['cnic'];
$passport=$_POST['passport'];
$password=$_POST['password'];
$conf_passw=$_POST['confirmpassword'];
 if ($password == $conf_passw) {
            $sql = "INSERT INTO  users(UserName,Email,CNIC,Passport,Password)
			VALUES ('" . $username . "','" . $email . "','".$cnic."','".$passport."','".$password."')";
            if ($conn->query($sql) === TRUE) {
                include ('signUp.html');
                echo "<p class='message'>New record created successfully<br>" . "</p>";
            } else {
                include ('signUp.html');
                echo "<p >Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        } else {
            include ('signUp.html');
            echo "<p>password does not match please reconfirm password!" . "</p>";
            exit();
        }
?>