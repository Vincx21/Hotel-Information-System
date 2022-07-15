<?php include_once("header.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Information System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./formStyle.css">
</head>
<body>
    <br>
      <h1 class="label-title">Transaction Confirmation</h1>
      <form name="transconf" method="post" class="room-form" action="transConf.php">
                  <label for="">Customer Name: </label>
                  <input type="text" name="cname" value=""><br><br>
                  <label for="">Reservation ID: </label>
                  <input type="text" name="rid" value=""><br><br>
                  <label for="">Check In Date:</label>
                  <input type="date" name="cin" value=""><br><br>
                  <label for="">Check Out Date:</label>
                  <input type="date" name="cout" value=""><br><br>
                  <input type="submit" name="submitIn" value="Check In">
                  <input type="submit" name="submitOut" value="Check Out">
                  <input type="reset" value="Reset Data">
      </form>
</body>
</html>