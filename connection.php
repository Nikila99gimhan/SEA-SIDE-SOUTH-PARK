<?php
$sever ="localhost";
$username ="root";
$password ="";
$database ="HotelDB";


//connection to the sever and select database
$con = mysqli_connect($sever,$username,$password,$database);

//check connection

if(!$con)
{
    die("Connection Erro!".mysqli_connect_error());
}

?>
