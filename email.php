<?php include_once('header.php') ?>
<html>
    <head>
        <style>
            body{
                background-image: url("pila.png");
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .form-control {
                display: block;
                margin-top : 5px;
            }
            .form{
                width : 300px;
                margin : 100px auto;
                padding: 20px;
                border-radius: 10px;
                background-color: White;
            }
            .kirim{
                margin-top: 10px;
            }
        </style>
    </head>
    <body>

        <form method="POST" class="form">
            <div class="form-group">
                <label>Email</label><br>
                <input class="form-control" type="email" name="email" placeholder="Your Email"/><br>
            </div>
            <div class="form-group">
                <label>Subject</label><br>
                <input class="form-control" type="text" name="subject" placeholder="Subject"/><br>
            </div>
            <div class="form-group">
                <label>Message</label><br>
                <textarea class="form-control" name="message" rows="4" cols="22"/></textarea><br>
            </div>
                <center><button type="submit" name="send"/>Send</button></center>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['send'])){
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $sender  = 'From: '.$email;
        if (mail('downloadanime371@gmail.com', $subject, $message, $sender)){
            echo "<script type='text/javascript>alert('Thank You For Supporting Us');</script>";
        }
    }
?>