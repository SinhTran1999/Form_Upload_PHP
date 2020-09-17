<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create connect
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    //Create database
    $sql = "CREATE DATABASE ImageUpload"; 
    if($conn->query($sql) === TRUE){
        echo "Database created success fully";
    }else{
        echo "Error creating database: ". $conn->error;
    }
    $conn ->close();
?>