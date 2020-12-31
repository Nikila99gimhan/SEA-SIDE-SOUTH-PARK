<?php

//connect to he sever
include '../connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$massage =$_POST['Tbox'];
$country =$_POST['country'];


//query

$qry = "INSERT INTO contact VALUES  ('$fname','$lname','$country','$$massage')";
$result =mysqli_query($con,$qry);

if ($result ==true)
{
    echo "Data inserted Successfully!";
}

else
{
    die("Error inserting data " .mysqli_error($con));

}

$to = "seasidesouthpark@fgmail.com";
$headers ="from :$email \r\n";





?>