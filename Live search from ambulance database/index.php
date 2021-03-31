<?php include'dbh.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>

<style>

    #name{
        margin: 0px auto;
    }

    .container-fluid{
        padding: 0px 100px 0px  100px;
    }



</style>


</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
          <a class="navbar-brand" href="#">Doctorola Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active  " href="index.php">Reservation</a>
              <a class="nav-item nav-link " href="msg_Form_doctorla_db.php">Messages</a>
             
            </div>
          </div>
        </nav>


                    

      


















            <?php

            $stmt = $conn->prepare("SELECT * FROM reservation");
            $stmt->execute();
            $result = $stmt->get_result();


            ?>



  <div class="container mt-5 text-center">

    <h4 class="text-primary">Live search From Ambulane Database in Doctorola Website</h4>
    <p class="text-muted lead">This Page lika a admin page</p>
    <input type="text" class="form-control w-50 mb-5" placeholder="Search By name" id="name" name="name">
    




  </div>

  <div class="container-fluid">

  <table class="table table-hover table-info table-striped" id="table_data">
         <thead>
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
            <tbody>

             <?php  while($row = $result->fetch_assoc())   {

              ?>

              <tr>

              <td><?php echo$row['Id'];?></td>
              <td><?php echo$row['Name'];?></td>
              <td><?php echo$row['Mobile'];?></td>
              <td><?php echo$row['Location'];?></td>
              <td><?php echo$row['Destination'];?></td>
              <td><?php echo$row['Ambulance Type'];?></td>
              <td><?php echo$row['Age'];?></td>
              <td><?php echo$row['Gender'];?></td>



              </tr>
       


               

             <?php }?>
                  


                

            </tbody>


            </table>



  </div>


  

  <script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>





            <!------------------------------------Ajax Code start----------------->

            <script>

              $(document).ready(function(){

                $("#name").keyup(function(){
                  var input_name = $(this).val();
                  $.ajax({

                    url:"data.php",
                    method:"POST",
                    data  :{search:input_name},
                    success: function(data){
                       $("#table_data").html(data)

                    }

                  });




                });




              })



            
            
            
            
            
            
            </script>








</body>
</html>