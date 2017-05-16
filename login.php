<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connection.php");

if (isset($_POST['cnic'])) {
    $conn = new mysqli($servername, $username, $password, $dbname) or die(mysql_error());
    $dbCnic = "";
    $dbPassword = "";
    $cnic = $_POST['cnic'];
    $password = $_POST['password'];

    $str = "SELECT * FROM users WHERE CNIC='$cnic' && Password='$password' ";
    $sql = mysqli_query($conn, $str);

    if ($row = mysqli_fetch_assoc($sql)) {
        $dbCnic = $row["CNIC"];
        $dbPassword = $row["Password"];
        if ($dbCnic == $cnic && $dbPassword == $password) {
            header('location:index.php');
        }
    }
    if ($cnic != $dbCnic or $password != $dbPassword) {

        $message = "Incorrect CNIC or Password!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PCI - Log In</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/other.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>



        <section id="SignUpSectionID">
            <!-- Its same as it is in for Sign Up Page -->

            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <ul class="breadcrumb" id="loginbread">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="signUp.php">Registration</a></li>
                            <li class="active">Log In</li>
                        </ul>
                        <div class="panel panel-default">

                            <div class="panel-heading text-center padding-top-30">LOG IN
                                <br />
                            <?= $str ?></div>
                            <div class="panel-body">
                                <form method="post" action="login.php">
                                    <!--									<label for="firstName" class="control-label " >Name:</label>-->
                                    <div class="form-group">
                                        <div class="row padding-top-30">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" name="cnic" id="passport" placeholder="CNIC">
                                                <!-- placeholder = "CNIC/Passport" -->
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row padding-top-30">
                                            <div class="col-md-12">
                                                <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row padding-top-30">
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" class="btn btn-primary btn-block" />
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:red">
                                        <?= $message ?>
                                    </div>

                                </form>

                            </div>
                        </div>
                        <p class="text-muted text-center">Not a member? <a href="SignUp.php" style="color:white">Sign Up Now</a></p>
                        <p class="text-center"><a href="index.php" style="color:white">Go back to Home</a></p>
                    </div>
                </div>

            </div>

        </section>





        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Theme JavaScript -->

        <script src="js/bootstrapValidator.min.js"></script>

        <script src="js/creative.js"></script>


    </body>

</html>