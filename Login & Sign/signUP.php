<?php

include '../connection.php';

//getting user inputs  into variables

$name = $_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];

$qury ="INSERT INTO users VALUES ('$name','$email',$password')";
$result = mysqli_query($con,$qury);

if($result == true)
{
    echo "Data inserted Successfully !";
}

else
{
    die("Error inserting data".mysqli_error($con));
}


?>