<?php

include_once('connect.php');

if(isset($_POST['submit']))
{
    if(!empty($_POST['fname']) && ($_POST['resid']) && ($_POST['pnum']) && ($_POST['rid']) && ($_POST['gender']))
    {
        $fullname = $_POST['fname'];
        $residentialid = $_POST['resid'];
        $phonenumber = $_POST['pnum'];
        $reservationid = $_POST['rid'];
        $gender = $_POST['gender'];
        
        if(mysqli_query($conn,"INSERT INTO customer (Full_Name, Residential_ID, Phone_Number, Reservation_ID, Gender) values('$fullname','$residentialid','$phonenumber','$reservationid', '$gender')"))
        {
            echo "Registered successfully";
            header("refresh:2,url=registerCustomer.php");
        }
    }
    else
    {
        echo "Please Fill All The Required Data";
    }
}
?>