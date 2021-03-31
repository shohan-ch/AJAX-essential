<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script  src="jquery-3.4.1.min.js"></script>

        <script>

            $(document).ready(function(){
                $('input').keyup(function(){
                    var name = $("input").val();
                    $.post('suggest.php',{
                        suggest:name
                    },function(data){
                        $('#text').html(data);
                        

                    })
                });


               
            })
        </script>
    </head>
    <body style="text-align: center;margin-top: 100px">


        <input type="text" name="nbame"><br>
        <p id="text"></p>
        


    
    </body>
</html>