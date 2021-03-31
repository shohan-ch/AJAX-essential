<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <script>

        $(document).ready(function(){
            $('button').click(function(){

               
              $("#demo").load("new.txt",function(data){
               
               $("#demo").html(data);

         
         

                });
            
            });
        });
    </script>


 <button  name="submit">File Come with Ajax Request</button>
 <p id="demo" ></p>
    
</body>
</html>