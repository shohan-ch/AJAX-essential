<?php include'dbh_msg.php';?>
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
</head>
<body>


            
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                    <a class="navbar-brand" href="#">Doctorola Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link  " href="index.php">Reservation</a>
                        <a class="nav-item nav-link active " href="msg_Form_doctorla_db.php">Messages</a>
                        
                        </div>
                    </div>
                    </nav>



                <div class="container bg-info mt-5 text-white p-5">

                  <div id="content">


                  <?php
                  
            /* prepare statement --------------------
              $stmt= $conn->prepare("SELECT * FROM message Limit 2");
                  $stmt->execute();
                  $result = $stmt->get_result();

                  */

                  $sql = "SELECT * FROM message LIMIT 2";
                  $result = $conn->query($sql);


                  while($row = $result->fetch_assoc()){

                
                  ?>

                  <ul class="list-unstyled border p-3">

                  <li>ID : <?php echo$row['id']?></li>
                  <li>Name : <?php echo$row['Name']?></li>
                  <li>Email : <?php echo$row['Email']?></li>
                  <li >Message: <br><?php echo$row['Message']?></li>

                  </ul>

                  <?php }?>


                  </div>


                  <button class="btn btn-danger btn-sm float-right">Next messages</button>


                  





                </div>







<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!----------------------------ajax Code---------------------------------------->



            <script>

                $(document).ready(function(){
                    var comment = 2;
                    $("button").click(function(){
                         comment +=2;
                        $("#content").load("comment.php",{
                            NewComment : comment

                        },function(data){
                            $(this).html(data)

                        });

                    });


                })


            </script>

<!--------------------------------------------------->

<script>

    $(a).click(function(){

        $(this).addClass('active').siblings().removeClass('active');


    })



</script>





</body>
</html>