<?php

$list = array("daniels","devi","dako","camu");
if(isset($_POST['suggest'])){

    $name = $_POST['suggest'];
    foreach($list as $sugst){
        if(strpos($sugst,$name)!==false){
            echo$sugst;
            echo"<br>";
        }
     
    }


}



?>