<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
    session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "hackathon";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $sel1=$_POST['sel1'];

    //to prevent from mysqli injection  
    $name = stripcslashes($name);  
    $pass = stripcslashes($pass); 
    $sel1 = stripcslashes($sel1);  
    $name = mysqli_real_escape_string($con, $name);  
    $pass = mysqli_real_escape_string($con, $pass);  
    $sel1 = mysqli_real_escape_string($con, $sel1);
  
    $sql = "select *from register where Name = '$name' and Password = '$pass' and Type= '$sel1' ";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);
    if($count == 1){  
        $_SESSION['type']=$_POST['sel1'];
        // Display the alert box  
        $_SESSION['status']="Login successful ";
        $_SESSION['status_code']="success";
        #header('Location: index.html');
      #  swal('Congratulations!', 'Your message has been succesfully sent', 'success');
    }  
    else{  
        $_SESSION['status']="Login Failed";
        $_SESSION['status_code']="warning";
       # echo "<h1> Login failed. Invalid username or pass.</h1>";  
    }
    if( $_SESSION['status_code']=="success"){
        if($_SESSION['TYPE'] = 'SG'){
            header('Location:sg.php');
        }
       
    }
    else{
        include ('defaultreg.html');
        }    
?>