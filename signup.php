<?php
include("connection.php");

if (isset($_POST['username'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("There is some problem in connection"); // making connection

    $username = $_POST['username'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $passport = $_POST['passport'];
    $password = $_POST['password'];

    $checkCNICsql = "SELECT CNIC FROM users WHERE CNIC='$cnic'"; // check if CNIC is already available in DB
    $rsCNIC = mysqli_query($conn, $checkCNICsql); // running Query

    $checkUserNamesql = "SELECT UserName FROM users WHERE UserName = '$username'"; // check if Usernameis already exists in DB
    $rsUN = mysqli_query($conn, $checkUserNamesql);

    $checkEmailsq = "SELECT Email FROM users WHERE Email = '$email'";
    $rsEmail = mysqli_query($conn, $checkEmailsq);

    $checkPassportsq = "SELECT Passport FROM users WHERE Passport = '$passport'";
    $rsPassport = mysqli_query($conn, $checkPassportsq);

    // check if SINGLE row is retreived or not for duplication purpose
    if ($row = mysqli_fetch_assoc($rsCNIC)) {
        $errorMessage = "CNIC alreay exists";
    } else if ($row = mysqli_fetch_assoc($rsUN)) {
        $errorMessage = "This user name alreay exists, try another one";
    } else if ($row = mysqli_fetch_assoc($rsEmail)) {
        $errorMessage = "Email ID alreay exists";
    } else if ($row = mysqli_fetch_assoc($rsPassport)) {
        $errorMessage = "This passport number alreay exists";
    } else {
        $sql = "INSERT INTO  users(UserName,Email,CNIC,Passport,Password)
	VALUES ('" . $username . "','" . $email . "','" . $cnic . "','" . $passport . "','" . $password . "')";
        if ($conn->query($sql) === TRUE) {  
            $successMessage = "New record created successfully.";
        } else {
            $successMessage = "<span>Error: " . $sql . "<br />" . $conn->error . "</span>";
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
        <link rel="stylesheet" href="css/bootstrapValidator.min.css">

    </head>

    <body>



        <section id="SignUpSectionID">

            <div class="container">



                <div class="col-md-4 col-md-offset-4">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Registration</li>
                    </ul>
                    <!--success message alert formation-->
                    <div class="alert alert-success collapse" id="successAlert">
                        <button class="close" type="button" data-dismiss="alert">&times;</button>
                        <h4>Success!</h4>
                        <p>
                            <?= $successMessage ?>
                        </p>
                    </div>
                    <!--error message alert formation-->
                    <div class="alert alert-danger collapse" id="errorAlert">
                        <button class="close" type="button" data-dismiss="alert">&times;</button>
                        <h4>Success!</h4>
                        <p>
                            <?= $errorMessage ?>
                        </p>
                    </div>

                    <div class="panel panel-default">

                        <div class="panel-heading text-center padding-top-30">SIGN UP</div>
                        <div class="panel-body">
                            <form id="registration-form" method="POST" action="SignUp.php" novalidate="novalidate" class="bv-form">

                                <div class="form-group" id="usernameID">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="username" name="username" placeholder="User Name" type="text">
                                            <span id="usernamespan"</span>
                                        </div>
                                        

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row padding-top-30">
                                        <div class="col-md-12">
                                            <input class="form-control" id="cnic" name="cnic" placeholder="CNIC" type="text">
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
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <p class="text-muted text-center">Already a member? <a href="LogIn.php" style="color:white">Log In Now</a></p>
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




        <?php
        if (isset($successMessage) && strlen($successMessage) > 1) {
            echo '<script type="text/javascript">$(function() { $("#successAlert").slideDown(); });</script>';
        } else {
            echo '<script type="text/javascript">$(function() { $("#successAlert").hide(); });</script>';
        }
        
        if (isset($errorMessage) && strlen($errorMessage) > 1) {
            echo '<script type="text/javascript">$(function() { $("#errorAlert").slideDown(); });</script>';
        } else {
            echo '<script type="text/javascript">$(function() { $("#errorAlert").hide(); });</script>';
        }
        ?>



    </body>
</html>