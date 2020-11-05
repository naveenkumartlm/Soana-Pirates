<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
    session_start();
    $sel1 = $_POST['sel1'];
	$name = $_POST['name'];
	$id = $_POST['id'];
	$dist = $_POST['dist'];
	$state = $_POST['state'];
	$pass = $_POST['pass'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','hackathon');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into register(Type, Name, Id, District, State, Password)";
		$sql.=" values('". $sel1 ."','". $name ."','". $id ."','". $dist ."', '". $state ."', '". $pass ."')";
		if(mysqli_query($conn,$sql)){
			header("Location:defaultreg.html");
		}

	}
?>

