<?php
include './connection.php';


if (isset($_POST['submit'])) {
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("There is some problem in connection"); // making connection



    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fatherfistname = $_POST['fatherfistname'];
    $fatherlastname = $_POST['fatherlastname'];
    $fathercnic = $_POST['fathercnic'];
    $motherfirstname = $_POST['motherfirstname'];
    $motherlastname = $_POST['motherlastname'];
    $stayCountry = $_POST['stayCountry'];
    $residingCountry = $_POST['residingCountry'];
    $mobileNo = $_POST['mobileNo'];
    $pakCurrentAddress = $_POST['pakCurrentAddress'];
    $permanentAddress = $_POST['permanentAddress'];
    $landline = $_POST['landline'];
    $pakmobile = $_POST['pakmobile'];
    $emergencyLandline = $_POST['emergencyLandline'];
    $emergencyMobileNo = $_POST['emergencyMobileNo'];
    $visaNo = $_POST['visaNo'];
    $issuanceDate = $_POST['issuanceDate'];
    $expiryDat = $_POST['expiryDat'];
    $issuanceDate = date('Y-m-d', strtotime($issuanceDate));
    $expiryDat = date('Y-m-d', strtotime($expiryDat));
    $visaNature = "abc";
    $sql = "INSERT INTO userInfo(FirstName,LastName,FatherFirstName,FatherLastName,FatherCNIC,
			MotherFirstName,MotherLastName,Country,ResidingAddress,MobileNumber,PakPresentAddress,PakPermanentAddress,
			PakLandline,PakMobile,EmergencyLandline,EmergencyMobile,VisaNumber,IssueDate,ExpiryDate,VisaNature)
			VALUES ('" . $firstName . "','" . $lastName . "','" . $fatherfistname . "','" . $fatherlastname . "','" . $fathercnic . "',
			'" . $motherfirstname . "','" . $motherlastname . "','" . $stayCountry . "','" . $residingCountry . "',
			'" . $mobileNo . "','" . $pakCurrentAddress . "','" . $permanentAddress . "','" . $landline . "','" . $pakmobile . "',
			'" . $emergencyLandline . "','" . $emergencyMobileNo . "','" . $visaNo . "','" . $issuanceDate . "','" . $expiryDat . "','" . $visaNature . "')";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "<p class='message'>New record created successfully<br>" . "</p>";
    } else {
        $successMessage = "<p >Error: " . $sql . "<br>" . $conn->error . "</p>";
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

        <title>PCI - Personal Information</title>

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
        <link  href="css/bootstrapValidator.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body >



        <section id = "SignUpSectionID">

            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <ul class="personal breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Personal Information</li>
                        </ul>
                        <!--success message alert formation-->
                        <div class="alert alert-success collapse" id="successAlert">
                            <button class="close" type="button" data-dismiss="alert">&times;</button>
                            <h4>Success!</h4>
                            <p>
                                <?= $successMessage ?>
                            </p>
                        </div>
                        <div class="panel panel-default">

                            <div class="panel-heading text-center  ">PERSONAL INFORMATION</div>
                            <div class="panel-body">

                                <form id = "registration-from" method="POST"  action="personalInfo.php">

                                    <div class="form-group">
                                        <label for="firstName" class="control-label " >General Information:</label>
                                        <div class="row ">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "firstName" name="firstName" placeholder = "First Name" data-toggle = "validate">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "lastName" name="lastName" placeholder = "Last Name" data-toggle = "validate">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "fatherfistname" name="fatherfistname" placeholder = "Father First Name" data-toggle = "validate">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "fatherlastname" name="fatherlastname" placeholder = "Father Last Name" data-toggle = "validate">
                                            </div>

                                        </div>

                                        <div class="row padding-top-30">
                                            <div class="col-md-6 ">
                                                <input type="text" class="form-control" id = "fathercnic" name="fathercnic" placeholder="Father CNIC">
                                            </div>
                                            <div class="col-md-3 ">
                                                <input type="text" class="form-control" id = "motherfirstname" name="motherfirstname" placeholder="Mother First Name">
                                            </div>
                                            <div class="col-md-3 ">
                                                <input type="text" class="form-control" id = "motherlastname" name="motherlastname" placeholder="Mother Last Name">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="stayCountry">Present Contact Information:</label>
                                        <div class="row  ">
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id = "stayCountry" name = "stayCountry" placeholder="Present Country of Stay">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id = "residingCountry" name = "residingCountry" placeholder="Present Residing Address">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id = "mobileNo" name = "mobileNo" placeholder="Mobile No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pakCurrentAddrress">Address In Pakistan (as per CNIC/Passport)</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "pakCurrentAddrress" name = "pakCurrentAddress" placeholder="Present Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "permanentAddress" name = "permanentAddress" placeholder="Permanent Address">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "landline" name = "landline" placeholder="Landline No">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "pakmobile" name = "pakmobile" placeholder="Mobile No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="emergencyLandline">Emergency Contact Information</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id = "emergencyLandline" name = "emergencyLandline" placeholder="Landline">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id = "emergencyMobileNo" name = "emergencyMobileNo" placeholder="Mobile No">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="visaNo">Status of Residing in Foreign</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "visaNo" name="visaNo" placeholder="Valid Visa No">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "issuanceDate" name="issuanceDate" placeholder="Visa Issuance Date">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id = "expiryDat" name="expiryDat" placeholder="Visa Expiry Date">
                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control form-horizontal" name="VisaNature" id="VisaNature">
                                                    <option value="0">Nature of Visa</option>
                                                    <option value="1">Education</option>
                                                    <option value="2">Professional</option>
                                                    <option value="3">Buisness</option>
                                                    <option value="4">Labour</option>
                                                    <option value="4">Tour</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row padding-top-30">
                                            <div class="col-md-8 col-md-offset-2">											
                                                <input type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block" />
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

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
        <script src="js/creative.js"></script>

        <!-- Validation JS -->
        <script src="js/bootstrapValidator.min.js"></script>

        <?php
        if (isset($successMessage) && strlen($successMessage) > 1) {
            echo '<script type="text/javascript">$(function() { $("#successAlert").slideDown(); });</script>';
        } else {
            echo '<script type="text/javascript">$(function() { $("#successAlert").hide(); });</script>';
        }
        ?>
    </body>
</html>
