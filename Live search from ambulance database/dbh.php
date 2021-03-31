<?php

$conn =  new mysqli("localhost","root","","ambulance");
if($conn->connect_error){
    die("connection fails".$conn->connect_error);
}
    




?>