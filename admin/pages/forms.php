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
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include 'admin_menu.php' ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                        <ul class="personal breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Personal Information</li>
                        </ul>
                        <div class="alert alert-success collapse" id="successAlert">
                            <button class="close" type="button" data-dismiss="alert">&times;</button>
                            <h4>Success!</h4>
                            <p>
                                <!--<?= $successMessage ?>-->
                            </p>
                        </div>
                        <!--error message alert formation-->
                        <div class="alert alert-danger collapse" id="errorAlert">
                            <button class="close" type="button" data-dismiss="alert">&times;</button>

                            <h4>Error!</h4>
                            <p>
                                <!--<?= $errorMessage ?>-->
                            </p>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

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

                                        <div class="row padding-top-10">
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
                                        <h4><span class="glyphicon glyphicon-map-marker"></span> Set Location</h4>

                                        <section>
                                            <div id='map_canvas'></div>
                                            <div id="current">Nothing yet...</div>
                                        </section>
                                        <style>
                                            #map_canvas {
                                                width: 980px;
                                                height: 500px;
                                            }
                                            #current {
                                                padding-top: 25px;
                                            }
                                        </style>

                                    </div><!-- end tab-pane -->
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
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>


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

        <script>
            var map, myMarker;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map_canvas'), {
                    zoom: 9,
                    center: new google.maps.LatLng(32.100690, 13.464602),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                myMarker = new google.maps.Marker({
                    position: new google.maps.LatLng(32.100690, 13.464602),
                    draggable: true
                });

                google.maps.event.addListener(myMarker, 'dragend', function (evt) {
                    document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
                });

                google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
                    document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
                });

                map.setCenter(myMarker.position);
                myMarker.setMap(map);
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7FRZmWJD6hEcOhI6lHUue8d7gTcbANZ0&callback=initMap"></script>
    </body>
</html>












