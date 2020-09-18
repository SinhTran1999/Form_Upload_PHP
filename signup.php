<?php 
    include_once 'connect.php';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(firstname, lastname, username, password)
    VALUES('$firstname','$lastname','$username', '$password')";
     mysqli_query($conn, $sql);

     $sql = "SELECT * FROM user WHERE username ='$username' AND firstname ='$firstname'";
     $result = mysqli_query($conn, $sql);
     if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $userid = $row['id'];
            $sql = "INSERT INTO profileimg(userid, status)
            VALUES('$userid', 1)";
            mysqli_query($conn, $sql);
            header("Location: index.php");
        }  
     }else{
         echo "You have an error!";
     }
?>