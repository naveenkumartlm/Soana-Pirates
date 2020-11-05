<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seed Processing Plant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
<link rel="icon" id="ico" href="images/icon.jpg">
<link href='https://fonts.googleapis.com/css?family=Grenze Gotisch' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script src="js\alert.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link href='https://fonts.googleapis.com/css?family=Federo' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #img{
            position:absolute;
            margin-top:100px;
            margin-left:-250px;
            width:40%;
        }
     .signup{
        align:center;
        position: absolute;
        top:0px;
        left:300px;
        
     }
     #sel1{
         width: 50%;
     }
     #drpdwn{
         position: absolute;
         left:300px;
         top:97px;
     }
    </style>
</head>
<body>
    

    <div class="main">
        
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Seed Processing Agency :</h2>
                        <form method="POST" class="register-form" id="register-form" action="database.php">
                            <div class="form-group">
                               <label for="sel1">Select Seed Grower</label><br><br>
                                <select class="form-control" id="sel1" name="sel1">
                                  <option>SPP</option>
                                  <option>SPA</option>
                                  <option>SG</option>
                                </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="button" name="signup" id="signup" class="form-submit" class="btn btn-secondary" value="Assign Field Inspector " data-toggle="modal" data-target="#studentaddmodal"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="button" name="signup" id="signup" class="form-submit" class="btn btn-secondary" value="Select SPP" data-toggle="modal" data-target="#studentaddmodal1"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img id="img" src="images\pngwave1.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

       
    </div>
    
<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Field Inspector </h5>
      </div>

        <form action="ciedata1.php" method="POST">

            <div class="modal-body">
            	

 				 <div class="form-group">
                  
                    <input type="text"  class="form-control" placeholder="Seed Grower" name="sg" id="sg" autocomplete="off">
                </div>

                <div class="form-group">
               
                    <input type="text"  class="form-control" placeholder="Inspector" name="i" id="i" autocomplete="off">
                </div>
                 <div class="form-group">
               
                    <input type="text"  class="form-control" placeholder="Inspection Status" name="is" id="is" autocomplete="off">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="studentaddmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Seed Processing Plant </h5>
      </div>

        <form action="ciedata1.php" method="POST">

            <div class="modal-body">
            	

 				

                <div class="form-group">
               
                <label for="sel1">Select Seed Process Plant </label><br><br>
                                <select class="form-control" id="sel1" name="sel1">
                                  <option>SPP</option>
                                  <option>SPA</option>
                                  <option>SG</option>
                                </select>
                </div>
                <div class="form-group">
                  
                  <input type="text"  class="form-control" placeholder="Seed Grower" name="sg" id="sg" autocomplete="off">
              </div>
                 


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
  </div>
</div>




    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>
     $(document).ready(function(){

$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };
});

});
</script>