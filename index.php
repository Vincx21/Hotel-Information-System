<?php
require('connect.php');
session_start();
 
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: new_login.php');
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to our Hotel Wwebsite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/jpg" href="uploads/hotel-icon.png"/>
    <!--<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico"/>-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            font-family: "Helvetica", sans-serif;
            color: white;
            background: #395B64;
        }

        #filters{
            margin-left: 10%;
            margin-top: 2%;
            margin-bottom: 2%;
        }
        p { color: white; font-family: 'Open Sans', sans-serif; font-size: 16px; line-height: 28px; margin: 0 0 48px;
        
            margin-left: 15px;
        }


        /*a { color: #990000; text-decoration: none; }*/


        /*a:hover { text-decoration: underline }*/


        .date { color: #111; display: block; font-family: 'Open Sans', sans-serif; font-size: 16px; position: relative; text-align: center; z-index: 1; }


        .date:before { border-top: 1px solid #111; content: ""; position: absolute; top: 12px; left: 0; width: 100%; z-index: -1; }


        .author { color: #111; display: block; font-family: 'Open Sans', sans-serif; font-size: 16px; padding-bottom: 38px; position: relative; text-align: center; z-index: 1; }


        .author:before { border-top: 1px solid #111; content: ""; position: absolute; top: 12px; left: 0; width: 100%; z-index: -1; }


        .date span,

        .author span { background: #fdfdfd; padding: 0 10px; text-transform: uppercase; }


        .line { border-top: 1px solid #111; display: block; margin-top: 60px; padding-top: 50px; position: relative; }


        .button { -moz-border-radius: 50%; -moz-transition: all 0.2s ease-in-out; -webkit-border-radius: 50%; -webkit-transition: all 0.2s ease-in-out; background: #111; border-radius: 50%; border: 10px solid #fdfdfd; color: #fff; display: block; font-family: 'Open Sans', sans-serif; font-size: 14px; height: 120px; line-height: 80px; margin: -40px 0 0 -40px; position: absolute; bottom: 0px; left: 50%; text-align: center; text-transform: uppercase; width: 120px; }


        .read-more:hover { background: #990000; text-decoration: none; }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hotel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="facilities.php">View Room</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="bookRoom.php">Pricing</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="map.php">Our Branch</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="email.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
                </li>
        </ul>
        </div>
    </div>
    </nav>
    <center><h1>Our Facilities</h1></center>
    <br>
    <marquee behavior="scroll" direction="left">
    <img src="https://cdn0-production-images-kly.akamaized.net/83eNIr6NoNALbf0ukgz4tBEz1ko=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3386715/original/094552600_1614241094-Double_Tree_Jakarta.jpg" alt="Hotel 1" style="width:450px;height:250px;">
    <img src="https://q-xx.bstatic.com/xdata/images/hotel/840x460/305174123.jpg?k=bfd91517209ce527ddba30b74151a27a6fa8e3b336ece97bad807a7ebc721b02&o=" alt="Hotel 2"  style="450px;height:250px;">
    <img src="https://www.ahstatic.com/photos/a5g1_rosba_00_p_1024x768.jpg" alt="Hotel 3"  style="width:450px;height:250px;">
    <img src="https://ik.imagekit.io/tvlk/blog/2020/01/Hotel-Instagramable-di-Jakarta-9-Traveloka.jpg" alt="Hotel 4"  style="width:450px;height:250px;">
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiB30LAYoJua0GlZOBDlRSsbTVJxAue4_a9KNCT515n3wQXDdjkPgQFRoBPEcPBPwKj7muocRG-QYNcDo6Xzum__AI-iwBUq8q0_H1hvyzUOruLFqtGDznDuRqgLyN29zbxeDpeZ-eXA6Ba4qsjAnTUffwr4HL0MHAIp56Bead2lpR198Frhvn_PQ" alt="Hotel 5"  style="width:450px;height:250px;">
    <img src="https://hotelsmoldova.org/wp-content/uploads/2018/01/hotel-bintang-3-jakarta.jpg" alt="Hotel 6"  style="width:450px;height:250px;">
    </marquee>
    <br>
    <p>
    Galaxy Hotel offers an accommodation with classy concept that is convenient for your family. Enjoy beautiful evenings with your family or lover along with us at Hotel Galaxy! We also provide various kinds of facilities that will spoil you.
    Feel:
    <ul>
    – Refresh your mind by swimming in our large indoor pool is.<br>
    – Spoil your tongue in our first-class restaurant with accomplish chefs.<br>
    – Shape your body in our complete Gym for free.<br>
    – Have spacious and comfortable conference hall, and<br>
    – Enjoy music performances from famous artists.<br>
    </ul>
    
    <p>Book rooms in our hotel immediately!!
    <ul>
    Room Type     Cost for one night<br>
    – Standard            Rp. 197.750 <br>
    – Superior             Rp. 249.100<br>
    – Cottage              Rp. 285.450<br>
    – Executive           Rp. 495.375<br>
    – Extra Bed           Rp. 350.000<br>
    </ul>
    <p>
    Galaxy Hotel always provides the best because customers’ satisfaction is our satisfaction as well.
    </p></p></p>
    <br>
    <form action="facilities.php">
        <button class= "button">Book Now</button>
    </form>

</body>
</html>

