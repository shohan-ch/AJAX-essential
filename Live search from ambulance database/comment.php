<?php
include'dbh_msg.php';
 if(isset($_POST['NewComment'])){

    $comment =  $_POST['NewComment'];

        $sql = "SELECT * FROM message LIMIT $comment";
        $result = $conn->query($sql);
     
    while($row = $result->fetch_assoc()){

        echo"<ul class='list-unstyled border p-3'";
        echo"<li> ID : " .$row['id']. "</li>";
        echo"<li> Name : " .$row['Name']. "</li>";
        echo"<li> Email : " .$row['Email']. "</li>";
        echo"<li> Message : <br>" .$row['Message']. "</li>";

        echo"</ul>";
      
    }

 }



?>