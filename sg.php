<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seed Grower</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            margin-top:30px;
            margin-left:-250px;
            width:50%;
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
                        <h2 class="form-title">Seed Grower :</h2>
                        <form method="POST" class="register-form" id="register-form" action="database.php">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="stn" id="stn" placeholder="Source Tag No"/>
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="text" name="c" id="c" placeholder="Crop"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="v" id="v" placeholder="Variety"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="lrk" id="lrk" placeholder="Land Record Khat No"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"></label>
                                <input type="text" name="lrp" id="lrp" placeholder="Land Record Plot No"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"></label>
                                <input type="text" name="lra" id="lra" placeholder="Land Record Area"/>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Select Seed Process Agency</label><br><br>
                                <select class="form-control" id="sel1" name="sel1">
                                  <option></option>
                                  <option>SPA</option>
                                  <option>SG</option>
                                </select>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img id="img" src="images\pngwave.png" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

       
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>