<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "carwebsite";

$fname = $_POST["F_Name"];
$lname = $_POST["L_Name"];
$email = $_POST["Email"];
$mobile = $_POST["P_Number"];
$Password = $_POST["Password"];


$conn = mysqli_connect($server, $username, $password, $database);
// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlquery = "INSERT sigin(First_Name, Last_Name,Email,Phone_Number,Password) VALUES ('$fname', '$lname' , '$email' , '$mobile' , '$Password')";

if ($conn->query($sqlquery) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

?>
