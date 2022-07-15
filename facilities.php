<?php include_once("header.php") ?>
<html>
    <head>
            <title>Document</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            font-family: "Helvetica", sans-serif;
        }

        #filters{
            margin-left: 10%;
            margin-top: 2%;
            margin-bottom: 2%;
        }
    </style>
    </head>
<body>
    <div id="filters">
        <span>Fetch results by &nbsp;</span>
        <select name="fetchval" id="fetchval">
            <option value="" disabled="" selected="">Select Filter</option>
            <option value="Standard">Standard</option>
            <option value="Superior">Superior</option>
            <option value="Junior Suite">Junior Suite</option>
            <option value="Suite">Suite</option>
            <option value="Presidential Suite">Presidential Suite</option>
        </select>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Class</th>
                    <th>Type</th>
                    <th>Availability</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM roomtype";
            $r = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($r)) {
            ?>
            <tr>
                <td><?php echo $row['Id']?></td>
                <td><?php echo $row['RoomName']?></td>
                <td><?php echo $row['Type']?></td>
                <td><?php echo $row['Availability']?></td>
                <td><?php echo $row['Price']?></td>
                <td><img src="uploads/<?php echo $row['Images']?>" class="img-responsive img-thumbnail" width="150"></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#fetchval").on('change', function(){
            var value = $(this).val(); 
            // alert(value);

            $.ajax({
                url:"fetch.php",
                type:"POST",
                data:'request='+value,
                beforeSend:function(){
                    $(".container").html("<span>Working...</span>");
                },
                success:function(data){
                    $(".container").html(data);
                }
            });
        });
    });
</script>

</body>
</html>
