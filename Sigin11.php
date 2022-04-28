<?php
    $SERVER ="localhost";
    $username = "root";
    $password = "";
    $mysql_database = "carwebsite";
    $con = mysqli_connect($SERVER , $username , $password , $mysql_database);

    if(!$con){
        die("Connection failed");
    }
    // echo "Successful";

    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $Email = $_POST['Email'];
    $P_number = $_POST['P_Number'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO 'carwebsite' ('F_Name', 'L_Name' , 'Email', 'P_Number','Password') VALUES ('$F_Name' ,  '$L_Name' , '$Email', '$P_number' , '$Password');";
    echo $sql;
?>