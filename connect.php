<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ImageUpload";
    // Create connect
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    // sql to create table
    $sql = "CREATE TABLE user(
        id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname varchar(50) NOT NULL,
        lastname varchar(50) NOT NULL,
        username varchar(256) NOT NULL,
        password varchar(256) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if($conn->query($sql) === TRUE){
        echo "Table user created successfully";
    }else{
        echo "Error creating table : ". $conn->error;
    }
    $conn ->close();
?>