<?php include'dbs_connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.4.1.min.js"></script>
</head>


<style>

    p{
        width:800px; 
        display: flex;
        margin: 0px auto;
        background-color: wheat;
        padding: 20px;
    }
  
  h3{
      color: red;
      
      margin: 50px 700px;
  }

  button{
        display: flex;
        margin:50px 0px 0px 600px;

    }

    .colorful{
        background-color: #B89E7B;
        
    }
</style>
<body>


   <h3>Comments Come From data base Using Ajax(jquery) and Php</h3>

    


    <div id="comments">



          <?php

            $sql = " SELECT * FROM messages limit 2";

            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){ 
                
                
              ?>


            <p>
                    <?php 
                    echo$row['author']; 
                    
                    ?>
                    <?php echo "<br>";?>

                    <?php 
                    echo$row['message']; 
                    ?>
                    
                    

                    
                        </p>

            <?php }?>

 


      </div>

 
      <button name="button">Next</button>



   <script>

       $(document).ready(function(){
           var comment_count = 2;
           $("button").click(function(){
               comment_count +=2;

            $("#comments").load("process.php",{
                New_comment :comment_count
            },function(data){
                $(this).html(data);
            });


           });


       });
   
   
   
   </script>
   <?php

?>
 
    
</body>
</html>