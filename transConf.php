<?php

include_once('connect.php');

if(isset($_POST['submitIn']))
{
    if(!empty($_POST['cname']) && ($_POST['rid']) && ($_POST['cin']) && ($_POST['cout']))
    {
        $customername = $_POST['cname'];
        $reservationid = $_POST['rid'];
        $checkindate = $_POST['cin'];
        $checkoutdate = $_POST['cout'];
        
        if(mysqli_query($conn,"INSERT INTO transactions (Customer_Name, Reservation_ID, Check_In_Date, Check_Out_Date) values('$customername', '$reservationid', '$checkindate', '$checkoutdate')"))
        {
            echo "Successfully Check In";
            header("refresh:2,url=confirmTransaction.php");
        }
    }
    else
    {
        echo "Please Fill All The Required Data";
    }
}
if(isset($_POST['submitOut']))
{
    if(!empty($_POST['cname']) && ($_POST['rid']) && ($_POST['cin']) && ($_POST['cout']))
    {
        $customername = $_POST['cname'];
        $reservationid = $_POST['rid'];
        $checkindate = $_POST['cin'];
        $checkoutdate = $_POST['cout'];
        
        if(mysqli_query($conn,"DELETE FROM rooms WHERE Reservation_ID = '$reservationid' "))
        {
            echo "Successfully Checked Out";
            header("refresh:2,url=confirmTransaction.php");
        }
    }
    else
    {
        echo "Please Fill All The Required Data";
    }
}
?>