<?php

header("Location: http://localhost/Project/Receipt/Reciept3.html", TRUE, 301);


$con = mysqli_connect('localhost', 'root', '','db_connect');

$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];



$sql = "INSERT INTO `tbl_contact` (`ID`, `First Name`, `Last Name`, `Date of Birth`, `Gender`, `Email`, `Phone Number`) VALUES ('0', '$Fname', '$Lname', '$DOB', '$gender', '$email', '$Phone')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Have Been Recorded";
}

?>