<?php

include_once('connect.php');

if(isset($_POST['submit']))
{
    if(!empty($_POST['cname']) && ($_POST['size']) && ($_POST['rnumber']) && ($_POST['rid']))
    {
        $customername = $_POST['cname'];
        $reservationid = $_POST['rid'];
        $roomsize = $_POST['size'];
        $roomnumber = $_POST['rnumber'];
        
        if(mysqli_query($conn,"INSERT INTO rooms (Customer_Name, Reservation_ID, Room_Size, Room_Number) values('$customername','$reservationid', '$roomsize', '$roomnumber')"))
        {
            echo "Room Booked successfully";
            header("refresh:2,url=bookRoom.php");
        }
    }
    else
    {
        echo "Please Fill All The Required Data";
    }
}
?>