<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pci";

$conn = mysqli_connect($servername,$username,$password,$dbname) or die("There is some problem in connection");
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$fatherfistname=$_POST['fatherfistname'];
$fatherlastname=$_POST['fatherlastname'];
$fathercnic=$_POST['fathercnic'];
$motherfirstname=$_POST['motherfirstname'];
$motherlastname=$_POST['motherlastname'];
$stayCountry=$_POST['stayCountry'];
$residingCountry=$_POST['residingCountry'];
$mobileNo=$_POST['mobileNo'];
$pakCurrentAddress=$_POST['pakCurrentAddress'];
$permanentAddress=$_POST['permanentAddress'];
$landline=$_POST['landline'];
$pakmobile=$_POST['pakmobile'];
$emergencyLandline=$_POST['emergencyLandline'];
$emergencyMobileNo=$_POST['emergencyMobileNo'];
$visaNo=$_POST['visaNo'];
$issuanceDate=$_POST['issuanceDate'];
$expiryDat=$_POST['expiryDat'];
$issuanceDate=date('Y-m-d',strtotime($issuanceDate));  
$expiryDat=date('Y-m-d',strtotime($expiryDat));  
$visaNature="abc";
            $sql = "INSERT INTO userInfo(FirstName,LastName,FatherFirstName,FatherLastName,FatherCNIC,
			MotherFirstName,MotherLastName,Country,ResidingAddress,MobileNumber,PakPresentAddress,PakPermanentAddress,
			PakLandline,PakMobile,EmergencyLandline,EmergencyMobile,VisaNumber,IssueDate,ExpiryDate,VisaNature)
			VALUES ('" . $firstName . "','" . $lastName . "','".$fatherfistname."','".$fatherlastname."','".$fathercnic."',
			'" . $motherfirstname . "','" . $motherlastname . "','".$stayCountry."','".$residingCountry."',
			'" . $mobileNo . "','" . $pakCurrentAddress . "','".$permanentAddress."','".$landline."','".$pakmobile."',
			'" . $emergencyLandline . "','" . $emergencyMobileNo . "','".$visaNo."','".$issuanceDate."','".$expiryDat."','".$visaNature."')";
            if ($conn->query($sql) === TRUE) {
                include ('PersonalInfo.html');
                echo "<p class='message'>New record created successfully<br>" . "</p>";
            } else {
                include ('PersonalInfo.html');
                echo "<p >Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        
?>