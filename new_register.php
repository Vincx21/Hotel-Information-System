<?php 
 
include 'connect.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users1 WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users1 (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="register.css">

</head>
   
    
<body>    
    <div class="box">
        <div class="loginform">LOGINFORM
            <h1>Hotel</h1>
            <h2>LOGIN</h2>

            <form method="POST">
                <label for="username">Username</label><br>
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required><br>
                
                <label for="email">Email</label><br>
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
                
                <label for="pswd">Password</label><br>
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
                
                <label for="cpswd">Password</label><br>
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required><br>
                
                <br>
                <button name="submit" onclick="login()" class="btn btn-success">REGISTER</button>
            </form>
            <p>login here <a href="new_login.php">Login</a></p>


        </div>

        <div id="banner" class="banner">
            Banner
        </div>
    </div>
</body>
</html>

