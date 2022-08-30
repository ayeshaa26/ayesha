<?php


$servername="localhost";
$password="";
$username="root";
$database="placement";

$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){
echo "Connected";
}
else
{
echo "Not Connected";
}
?>