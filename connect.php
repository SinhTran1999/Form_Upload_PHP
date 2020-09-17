<?php 
    // Cách 1 để tạo kết nối với MySQL
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "ImageUpload";
    // // Create connect
    // $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    // if($conn->connect_error){
    //     die("Connection failed: ".$conn->connect_error);
    // }
    // Cách 2: ngắn gọn hơn
    $conn = mysqli_connect("localhost", "root","","ImageUpload");
?>