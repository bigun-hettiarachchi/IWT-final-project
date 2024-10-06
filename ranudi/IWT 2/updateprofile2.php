<?php
//Include db connection
 require_once 'config.php';
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$id = $_GET["ID"];
	$gender = $_POST["gender"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
    $dob = $_POST["DOB"];
	$role = $_POST["role"];
	$psw = $_POST["psw"];
	
	//Update data in db
	
	$sql = "UPDATE user SET firstname = '$fname', lastname = '$lname', ID = '$id', gender = '$gender', mobile = '$mobile', email = '$email', DOB = '$dob', role = '$role', psw = '$psw'
	WHERE ID = '$id'";
	
	//checking if update was successfull
	
	if($conn->query($sql) === TRUE){
		echo"<script>alert('User details successfully updated')'</script>";
		echo "<script>window.location.href = 'display.php'</script>";
		exit();
	}else{
		echo "Update failed :" .$conn->error;
	}
 }
	//close connection
	$conn->close();
?>