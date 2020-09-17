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
</head>
<body>
<?php 
    if(isset($_SESSION['id'])){
        if(isset($_SESSION['id']) == 1){
           echo "You are logged in as user #1";
        }
        echo '<form action="upload.php" method ="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit" name="submit">UPLOAD</button>
              </form>';
    }else{
        echo "You are not logged in!";
        echo "<form action='login.php' method='POST'> 
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