<?php


//connection

use function PHPSTORM_META\elementType;

include '../connection.php';

//get inputs

$email = $_POST['lemail'];
$password =$_POST['lpassword'];


//

$qry = "SELECT * from  users where email = '$email' and password  = '$password'";
$result = mysqli_query($con,$qry);

$row = mysqli_fetch_array($result);

if ($row['Email']==$email && $row['Password']==$password)
{
    header("location : ../Home Page/index.html" );
    exit;
    echo "Welcome !";

}

else
{
    echo "invalid  Email or Password";
}



?>