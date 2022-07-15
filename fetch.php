<?php

sleep(1);
    include("connect.php");
    if(isset($_POST['request'])){
        $request = $_POST['request'];

        $query = "SELECT * FROM roomtype WHERE RoomName = '$request'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
?>

<table class="table">
    <?php

    if($count){
    
    ?>
    <thead>
        <tr>
            <th>No</th>
            <th>Class</th>
            <th>Type</th>
            <th>Availability</th>
            <th>Price</th>
            <th>Image</th>
        </tr>

        <?php
        }else{
            echo "Sorry! no record found";
        }
        ?>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){

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
<?php 
    }
?>