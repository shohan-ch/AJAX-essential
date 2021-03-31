<?php include'dbs_connection.php';
if(isset($_POST['New_comment'])){

    $New_comment = $_POST['New_comment'];

    $sql = " SELECT * FROM messages limit  $New_comment ";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){

            echo "<p class='colorful'>";

            echo"Author name is :" .$row['author']."<br><br>";


            echo$row['message'];
            echo"</p>";


    }

} else{
        echo"there are no Comments";
    }
}
$conn->close();
   



?>