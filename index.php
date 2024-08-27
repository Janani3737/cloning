<?php
global$conn;
$conn=mysqli_connect('localhost','root', '','resume');
if(mysqli_connect_errno())
{
    echo"Failed to connect to MYSQL:".mysqli_connect_error();
}
?>