<?php

include 'connect.php';
if(isset($_POST['submit']) ){
    $name = $_POST['cname'];
    $roomsize = $_POST['rsize'];
    $roomnumber = $_POST['rnumber'];
    
    mysqli_query($conn,"INSERT INTO room VALUES('','$name','$roomsize','$roomnumber')");
}
?>
<html>
    <head>
        
    </head>
    <body>
    <div class="container">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="rsize">Room Size :</label>
                            <input type="text" name="rsize" class="form-control" id="rsize" required>
                        </div>
                        <div class="form-group">
                            <label for="rnumber">Room Number :</label>
                            <input class="form-control" name="rnumber" type="number">
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
