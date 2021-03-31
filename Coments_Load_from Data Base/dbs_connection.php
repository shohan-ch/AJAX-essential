<?php

$conn = new mysqli("localhost","root","","comments");
if($conn->connect_error){
    die("connect error".$conn->connect_error);
}


