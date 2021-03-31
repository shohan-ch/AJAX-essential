<?php

include 'dbh.php';

$output = '';

if(isset($_POST['search'])){

    $name = $_POST['search'];

    $stmt = $conn->prepare("SELECT * FROM reservation WHERE Name LIKE concat('%',?,'%')");

    $stmt->bind_param('s',$name);


    $stmt->execute();

    $result = $stmt->get_result();


    if($result->num_rows>0){

        $output= "<thead>
                <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Location</th>
                <th>Destination</th>
                <th>Ambulance Type</th>
                <th>Age</th>
                <th>Gender</th>
                </tr>
                </thead>
                <tbody>";

                while($row = $result->fetch_assoc()){

                    $output .="<tr>

                    <td>".$row['Id']."</td>
                    <td>".$row['Name']."</td>
                    <td>".$row['Mobile']."</td>
                    <td>".$row['Location']."</td>
                    <td>".$row['Destination']."</td>
                    <td>".$row['Ambulance Type']."</td>
                    <td>".$row['Age']."</td>
                    <td>".$row['Gender']."</td>
                    
                    
                         </tr>";

                }

                $output .="</tbody>";

                echo $output;

    }
    else{

        echo"<h4 class='text-danger text-center'>No record</h4>";

    }
}
    
   


















?>