<?php
//DB connection
require_once 'config.php';

if (isset($_GET['ID'])) {
	$id = $_GET['ID'];

	//retrieve record with given ID
	$sql = "SELECT * FROM user WHERE ID = '$id'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$fname = $row["firstname"];
		$lname = $row["lastname"];
		// $id = $row["ID"];
		$gender = $row["gender"];
		$mobile = $row["mobile"];
		$email = $row["email"];
		$dob = $row["DOB"];
		$role = $row["role"];
		$psw = $row["psw"];

		echo "<form action= './updateprofile2.php' method='POST'>";

		echo "<input type='hidden' name='ID' value='$id'>";

		echo "First Name:<br/>";
		echo "<input type='text' name='firstname' placeholder='First Name' value = '" . $fname . "' required><br/><br/>";

		echo "Last Name:<br/>";
		echo "<input type='text' name='lastname' placeholder='Last Name' value = '" . $lname . "'required><br/><br/>";

		echo "Gender:<br/>";
		echo "<input type='radio' value='Male' name='gender'  value = '" . $gender . "'>Male";
		echo "<input type='radio' value='Female' name='gender' checked  value = '" . $gender . "'>Female<br/><br/>";

		echo "Mobile Number:<br/>";
		echo "<input type='phone' name='mobile' placeholder='0777777777' pattern='[0-9]{10}' value = '" . $mobile . "' required><br/><br/>";

		echo "e-mail:<br/>";
		echo "<input type='email' name='email' placeholder='abc@gmail.com' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}' value = '" . $email . "' required><br/><br/>";

		echo "Birthday:<br/>";
		echo "<input type='date' name='DOB' value = '" . $dob . "' required><br/><br/>";

		echo "Role:<br/>";
		echo "<input type='radio' value='Advertiser' name='role'  value = '" . $role . "'>Advertiser";
		echo "<input type='radio' value='Publisher' name='role'  value = '" . $role . "' checked>Publisher<br/><br/>";

		echo "Password:<br/>";
		echo "<input type='text' id='psw' name='psw' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'  value = '" . $psw . "' required> <br/><br/>";

		echo "<br>";
		echo "<button type='submit'>Update<button>";
		echo "</form>";
	} else {
		echo "no record available";
	}
} else {
	echo "ID parameter missing";
}
