<?php 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="fontawesome-pro-5.1.0/css/svg-with-js.css" >
    <link rel="stylesheet" href="css/sweetalert2.css" class="rel">
    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script src="fontawesome-pro-5.1.0/js/all.js" ></script>
    <script src="fontawesome-pro-5.1.0/js/intiFunction.js"></script>
    <!-- https://sweetalert2.github.io/ -->
    <script src="js/sweetalert2.all.js"></script>
  </head>
  <body>

    <!-- <a href="#" class=" no-underline"><i class="far fa-alarm-clock fa-5x"></i> saya wisnu</a> -->
    <!-- <a href="#" class=" no-underline"><i class="fas fa-address-card no-underline fa-5x"></i>wisnu</a> -->
    
    
    <form action="" method="POST" role="form" id="formcoba">
      <legend>Form title</legend>
    
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
        <input type="text" class="form-control" id="aw[]" placeholder="Input field">
    
      
    
      <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
    
    
    

  </body>
</html>

<script>
     $(document).ready(function(){
        $("#formcoba :input").prop("readonly", true);
    });

      tampil('sayawisnu');

</script>



