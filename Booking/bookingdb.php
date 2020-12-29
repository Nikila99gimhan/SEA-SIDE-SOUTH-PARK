<?php

//connection to server
include "../connection.php";


//getting user inputs intto variables
$fname = $_POST['name1'];
$phonenumber = $_POST['phone'];
$email = $_POST['email'];
$checkin =$_POST['date'];
$checkout =$_POST['todate'];
$adults =$_POST['adults'];
$children =$_POST['children'];

//to prevent my sql injection
$email =stripcslashes($email);
$password =stripcslashes($password);




//query

$qry = "INSERT INTO booking  VALUES ('$fname','$phonenumber','$email','$checkin','$checkout','$adults','$children')";

$result =mysqli_query($con,$qry);
if($result == true)
{
    echo "<br> You will recieve the booking confirmation including your payment details via a email soon. Thank you for booking with us ";

}
else
{
    die("Error inserting data " .mysqli_error($con));
}



?>