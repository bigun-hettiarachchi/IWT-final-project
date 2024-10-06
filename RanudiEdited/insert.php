<?php
//Include connection PHP file
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$mobile = $_POST["mobile"];
	$email = $_POST["email"];
	$dob = $_POST["DOB"];
	$role = $_POST["role"];
	$psw = $_POST["psw"];

	//check gmail

	$checkQuery = "SELECT * FROM user WHERE email = '$email'";
	$result = $conn->query($checkQuery);

	if ($result->num_rows > 0) {
		//Gmail already exists
		echo "<script>alert('Gmail already exists. Please use a different one')</script>";
		echo "<script>window.location.href = 'register.php'</script>";
	} else {

		//Insert into database
		$sql = "INSERT into user (firstname, lastname, gender, mobile, email, DOB, role, psw) VALUES ('$fname', '$lname', '$gender', '$mobile', '$email', '$dob', '$role', '$psw')";

		//check if  the insert was successful
		if ($conn->query($sql) == TRUE) {
			echo "<script>alert('Data added successfully ')</script>";
			echo "<script>window.location.href = 'profile.php'</script>";
		} else {
			echo "Error : " . $sql . "<br>" . $conn->error;
		}
	}
}
//close connection
$conn->close();
