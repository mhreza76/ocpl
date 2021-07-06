<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
$department = $_POST['department'];
$program = $_POST['program'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fathersName = $_POST['fathersName'];
$mothersName = $_POST['mothersName'];
$email = $_POST['email'];
$contactNumber = $_POST['contactNumber'];
$gender = $_POST['gender'];
$birthDate = $_POST['birthDate'];
$nationality = $_POST['nationality'];
$addressline = $_POST['addressline'];
$district = $_POST['district'];
$state = $_POST['state'];
$postCode = $_POST['postCode'];
$registrationNumber = $_POST['registrationNumber'];
$sscExam = $_POST['sscExam'];
$sscRollNumber = $_POST['sscRollNumber'];
$sscBoard = $_POST['sscBoard'];
$sscGpa = $_POST['sscGpa'];
$sscGroup = $_POST['sscGroup'];
$sscPassingYear = $_POST['sscPassingYear'];
$hscExam = $_POST['hscExam'];
$hscRollNumber = $_POST['hscRollNumber'];
$hscBoard = $_POST['hscBoard'];
$hscGpa = $_POST['hscGpa'];
$hscGroup = $_POST['hscGroup'];
$hscPassingYear = $_POST['hscPassingYear'];


$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "ocpl";

$conn = new mysqli($server_name, $user_name, $password, $database);


if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['draft'])){
    echo "Drafted Successfully";
}
if(isset($_POST['submit'])){
    $sql = "INSERT INTO `admission` (`id`, `department`, `program`, `firstname`, `lastname`, `fathersName`, `mothersName`, `email`,
                         `contactNumber`, `gender`, `birthDate`, `nationality`, `addressline`, `district`, `state`,
                         `postCode`, `registrationNumber`, `sscExam`, `sscRollNumber`, `sscBoard`, `sscGpa`, `sscGroup`,
                         `sscPassingYear`, `hscExam`, `hscRollNumber`, `hscBoard`, `hscGpa`, `hscGroup`,
                         `hscPassingYear`)
VALUES (NULL, '$department', '$program', '$firstname', '$lastname', '$fathersName', '$mothersName', '$email', '$contactNumber', '$gender',
        '$birthDate', '$nationality', '$addressline ', '$district', '$state', '$postCode', '$registrationNumber',
        '$sscExam', '$sscRollNumber', '$sscBoard', '$sscGpa', '$sscGroup', '$sscPassingYear', '$hscExam', '$hscRollNumber', '$hscBoard', '$hscGpa',
        '$hscGroup', '$hscPassingYear')";

    $conn->query($sql);
    if($conn){
        echo "Inserted Successfully";
    }
    else{
        echo "Not inserted, something wrong";
    }
}

