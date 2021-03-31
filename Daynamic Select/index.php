<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Dynamic Select Options</title>
</head>
<body>

     <div class="container mt-5">

     <h3 class="text-primary text-center mb-4">Dynamic select and options using ajax in php</h3>


     <div class="form-group">


    <label for="sel1">Select Divisons :</label>

    <select class="form-control" id="sel1">
        <option>Select Divisons</option>
        <option value="dhaka">Dhaka</option>
        <option value="sylhet">Sylhet</option>
        <option value="kulna">Khulna</option>
        <option value="chittagong">Chittagong</option>
    </select>


    </div>



    <div class="form-group">
        <label for="">Select District :</label>

        <select class="form-control" id="put_option">
        <option>Select District</option>

        </select>

    </div>

      

     </div>





<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-----------------------------------Jquery Ajax Code Sart----------------------->
                <script>



                    $(document).ready(function(){

                        $("#sel1").change(function(){

                            var chang_value = $(this).val();
                           
                           

                            $.ajax({

                                url:"action.php",
                                method:"post",
                                data  : {value: chang_value},
                                success:function(data){

                                    $("#put_option").html(data);
                                }

                            });


                        });

                 

                    });












                </script>


        




</body>
</html>