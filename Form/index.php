<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>AJax form</title>
</head>
<body>

  <div class="container">

   <h3 class="text-center">Ajax form submit</h3>

   <form method="post">

     <label for="name">Name</label>
     <input type="text" placeholder="name" id="name" class="form-control w-50">
     <label for="email">Email</label>
     <input type="text" placeholder="email" id="email" class="form-control mb-2 w-50">

     <button class="btn btn-warning">Submit</button>

     


     <p id="text" style="font-size:23px"></p>

   </form>
      



  </div>




<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


   <script>

       $(document).ready(function(){
        $('button').click(function(){
           var nameVal = $('#name').val();
           var emailVal = $('#email').val();

           $.ajax({
             url:'submit.php',
             method:'POST',
             data:{name:nameVal,email:emailVal},
             success:function(data){
               $("#text").html(data).fadeOut(5000);

             }




           });

           return false;

         

       });





       })

     
   
   
   
   
   
   </script>








</body>
</html>