<?php include_once("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Information System</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./formStyle.css">
    <link rel="icon" type="image/jpg/png" href="uploads/hotel-icon.png"/>
</head>
<body>
      <br>
      <h1 class="label-title">Booking Form</h1>
      <form name="roomform" method="post" class="room-form" action="roomForm.php">
                  <label for="">Customer Name: </label>
                  <input type="text" name="cname" value=""><br><br>
                  <label for="">Reservation ID: </label>
                  <input type="text" name="rid" value=""><br><br>
                  <label for="">Room Size: </label>
                  <input type="radio" name="size" value="Business">
                  <label for="">Business</label>
                  <input type="radio" name="size" value="Economic">
                  <label for="">Economic</label>
                  <input type="radio" name="size" value="Premium">
                  <label for="">Premium</label>
                  <input type="radio" name="size" value="Deluxe">
                  <label for="">Deluxe</label><br><br>
                  <label for="">Room Number: </label>
                  <input type="number" name="rnumber" value=""><br><br>
                  <input type="submit" name="submit" value="Submit Data">
                  <input type="reset" value="Reset Data">
      </form>
</body>
</html>