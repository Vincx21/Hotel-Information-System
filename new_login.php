<?php 
 
include 'connect.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users1 WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
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
    <link rel="stylesheet" href="login.css">

</head>
   
    
<body>    
    <div class="box">
        <div class="loginform">LOGINFORM
            <h1>Hotel</h1>
            <h2>LOGIN</h2>

            <form method="POST">
                <label for="email">Email</label><br>
                <!-- <input type="email" id="logemail" name="email" placeholder="email" required><br> -->
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
                <label for="pswd">Password</label><br>
                <!-- <input type="password" id="logpassword" name="pswd" placeholder="password" required><br> -->
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
                <br>
                <button name="submit" onclick="login()" class="btn btn-success">LOG IN</button>

            </form>
            <p>register here <a href="new_register.php">Register</a></p><br><br>
            <p>Admin here <a href="admin.php">Admin</a></p>
        </div>

        <div id="banner" class="banner">
            Banner
        </div>
    </div>
</body>
</html>

