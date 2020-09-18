<?php 
    session_start();
    include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form upload image</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php 
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $sqlImg = "SELECT * FROM profileimg WHERE userid ='$id'";
            $resultImg = mysqli_query($conn, $sqlImg);
            while($rowImg = mysqli_fetch_assoc($resultImg)){
                echo "<div class='user-container'>";
                    if($rowImg['status'] == 0){
                        echo "<img src='uploads/profile".$id.".png?".mt_rand()."' height='100px' width='100px'>";
                    }else{
                        echo "<img src='uploads/profiledefault.jpg' height='100px' width='100px'>";
                    }
                    echo "<p>". $row['username']."</p>";
                echo "</div>";
            }
        }
    }else{
        echo "These are no users yet!";
    }
    if(isset($_SESSION['id'])){
        if(isset($_SESSION['id']) == 1){
           echo "You are logged in as user #1";
        }
        echo '<form action="upload.php" method ="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <button type="submit" name="submit">UPLOAD</button>
              </form>';
    }else{
        echo "You are not logged in!";
        echo "<form action='signup.php' method='POST'> 
                <input type='text' name ='firstname' placeholder='First name'/>
                <input type='text' name ='lastname' placeholder='Last name'/>
                <input type='text' name ='username' placeholder='User name'/>
                <input type='password' name ='password' placeholder='Password'/>
                <button type='submit' name='submitSignUp'>Sign Up</button>
              </form>";
    }
?>

    <p>Login as user!</p>
    <form action="login.php" method="POST">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout as user!</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>
</body>
</html>