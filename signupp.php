<?php
include("connection.php");

if (isset($_POST['username'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("There is some problem in connection");

    $username = $_POST['username'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $passport = $_POST['passport'];
    $password = $_POST['password'];

    $checkCNICsql = "SELECT CNIC FROM users WHERE CNIC='$cnic'";
    $rs = mysqli_query($conn, $checkCNICsql);
    if ($row = mysqli_fetch_assoc($rs)) {
        $message = "CNIC alreay exists";
    } else {
        $sql = "INSERT INTO  users(UserName,Email,CNIC,Passport,Password)
				VALUES ('" . $username . "','" . $email . "','" . $cnic . "','" . $passport . "','" . $password . "')";
        if ($conn->query($sql) === TRUE) {
            $message = "New record created successfully.";
        } else {
            $message = "<span>Error: " . $sql . "<br />" . $conn->error . "</span>";
        }
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

        <title>PCI - Sign Up</title>

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

        <!-- Validation CSS -->
        <!--		<link  href="css/bootstrapValidator.min.css">-->
        <link rel="stylesheet" href="css/bootstrapValidator.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>



        <section id="SignUpSectionID">

            <div class="container">



                <div class="col-md-4 col-md-offset-4">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Registration</li>
                    </ul>

                    <div class="alert alert-success alert-block fade in collapse" id="successAlert">
                        <button class="close" type="button" data-dismiss="alert">&times;</button>
                        <h4>Success!</h4>
                        <p>
                            <?= $message ?>
                        </p>
                    </div>

                    <div class="panel panel-default">

                        <div class="panel-heading text-center padding-top-30">SIGN UP</div>
                        <div class="panel-body">

                            <!--									<label for="firstName" class="control-label " >Name:</label>-->
                            <form id="registration-form" method="POST" action="SignUp.php" novalidate="novalidate" class="bv-form">
                                <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="username" name="username" placeholder="User Name" data-toggle="validate" data-bv-field="username" type="text">
                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="NOT_VALIDATED">Please provide a username</small><small style="display: none;" class="help-block" data-bv-validator="stringLength" data-bv-for="username" data-bv-result="NOT_VALIDATED">Username must be between 4 and 10 characters long</small></div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="email" name="email" placeholder="Email" data-bv-field="email" type="email">
                                            <small style="display: none;" class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED">Please provide an email address</small><small style="display: none;" class="help-block" data-bv-validator="stringLength" data-bv-for="email" data-bv-result="NOT_VALIDATED">Email must be between 6 to 35 characters long</small><small style="display: none;" class="help-block" data-bv-validator="different" data-bv-for="email" data-bv-result="NOT_VALIDATED">Email and Password must be different</small><small style="display: none;" class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED">Email Address is invalid</small></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="cnic" name="cnic" placeholder="CNIC" type="text"
                                                    onBlur="checkAvailability()">
                                            <span id="user-availability-status"></span>
                                            <img src="LoaderIcon.gif" id="loaderIcon" style="display:none" />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="passport" name="passport" placeholder="Passport" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-8 col-md-offset-2">
                                            <input type="submit" value="Submit" class="btn btn-primary btn-block" />
                                            <!--
<div style="color:red">
                                            <?= $message ?>
</div>
                                            -->
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <p class="text-muted text-center">Already a member? <a href="LogIn.html" style="color:white">Log In Now</a></p>
                    <p class="text-center"><a href="index.html" style="color:white">Go back to Home</a></p>

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


        <!-- Validation JS -->
        <script src="js/bootstrapValidator.min.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/creative.js"></script>

        <script type="text/javascript">
            function checkAvailability() {
                $("#loaderIcon").show();
                jQuery.ajax({
                    url: "check_availability.php",
                    data: 'cnic=' + $("#cnic").val(),
                    type: "POST",
                    success: function (data) {
                        $("#user-availability-status").html(data);
                        $("#loaderIcon").hide();
                    },
                    error: function () {}
                });
            }
        </script>


        <?php
        if (isset($message) && strlen($message) > 1) {
            echo '<script type="text/javascript">$(function() { $("#successAlert").slideDown(); });</script>';
        } else {
            echo '<script type="text/javascript">$(function() { $("#successAlert").hide(); });</script>';
        }
        ?>
    </body>
    <!-- <script type="text/javascript">

$(document).ready(function(){


});

</script> -->

</html>