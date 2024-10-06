<?php

// require_once 'config.php';


// $sql = "SELECT *From user";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
// 	while ($row = $result->fetch_assoc()) {
// 		echo "<tr>";
// 		echo "<td>" . $row["firstname"] . "</td>";
// 		echo "<td>" . $row["lastname"] . "</td>";
// 		echo "<td>" . $row["ID"] . "</td>";
// 		echo "<td>" . $row["gender"] . "</td>";
// 		echo "<td>" . $row["mobile"] . "</td>";
// 		echo "<td>" . $row["email"] . "</td>";
// 		echo "<td>" . $row["DOB"] . "</td>";
// 		echo "<td>" . $row["role"] . "</td>";
// 		echo "<td>" . $row["psw"] . "</td>";
// 		echo "<td>";
// 		echo "<button onClick =\"redirectToUpdate(" . $row['ID'] . ")\">Update</button>";
// 		echo "<a href =\"delete.php?delete_id=\"" . $row["ID"] . "\">Delete</a>";
// 		echo "</td>";
// 		echo "</tr>";
// 	}
// } else {
// 	echo "no data";
// }
// $conn->close();





// Include DB connection
require_once 'config.php';

// Retrieve data from the database
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Start HTML output
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Records</title>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}

		th,
		td {
			border: 1px solid black;
			padding: 10px;
			text-align: left;
		}


		/* Navbar Styles */
		.navbar {
			display: flex;
			justify-content: space-between;
			align-items: center;
			background-color: #333;
			padding: 10px 20px;
		}

		.logo img {
			width: 120px;
		}

		.nav-links {
			display: flex;
			list-style-type: none;
		}

		.nav-links li {
			margin: 0 15px;
		}

		.nav-links a {
			color: white;
			text-decoration: none;
		}

		.auth-buttons {
			display: flex;
			gap: 10px;
		}

		.login-btn,
		.signup-btn {
			padding: 8px 16px;
			color: white;
			background-color: #555;
			border: none;
			cursor: pointer;
		}

		.login-btn:hover,
		.signup-btn:hover {
			background-color: #777;
		}

		.admin-btn {
			background-color: white;
			color: black;
		}

		/* Footer Styles */
		footer {
			background-color: #333;
			color: white;
			padding: 20px 0;
		}

		.footer-content {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 0 20px;
		}

		.footer-text {
			display: flex;
			flex-direction: row;
			padding: 10px 90px;
			margin-right: 8rem;
		}

		.footer-text h4 {
			font-size: 20px;
		}

		.footer-text a {
			color: white;
			text-decoration: none;
		}

		.footer-text-content {
			display: flex;
			flex-direction: column;
			margin: 30px 60px;
			line-height: 40px;
		}

		.footer-text p {
			display: flex;
			margin: 5px 10px;
		}

		.footer-logo img {
			width: 100px;
		}

		.footer-bottom {
			text-align: center;
			margin-top: 10px;
		}
	</style>
	<script>
		function redirectToUpdate(id) {
			window.location.href = 'updateprofile.php?ID=' + id;
		}
	</script>
</head>

<body style="background-image: url(b1.WEBP); background-size: cover;background-position: center;">
	<nav class="navbar">
		<div class="logo">
			<img src="./Logoo.png" alt="Logo" width="75px" height="auto" />
		</div>
		<ul class="nav-links">
			<li><a href="">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="#">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		<div class="auth-buttons">
			<button class="login-btn" onclick="location.href='login.php'">Login</button>
			<button class="signup-btn">Sign Up</button>

		</div>
	</nav>

	<h1>User Records</h1>

	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>ID</th>
			<th>Gender</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>DOB</th>
			<th>Role</th>
			<th>Password</th>
			<th>Actions</th>
		</tr>

		<?php if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . htmlspecialchars($row["firstname"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["lastname"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["ID"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["gender"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["mobile"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["DOB"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["role"]) . "</td>";
				echo "<td>" . htmlspecialchars($row["psw"]) . "</td>";
				echo "<td>";
				echo "<button onClick=\"redirectToUpdate(" . $row['ID'] . ")\">Update</button>";
				echo "<a href=\"delete.php?delete_id=" . $row["ID"] . "\">Delete</a>";
				echo "</td>";
				echo "</tr>";
			}
		} else {
			echo "<tr><td colspan='10'>No data available</td></tr>";
		} ?>
	</table>


	<footer class="footer">
		<div class="footer-content">
			<div class="footer-text">
				<div class="footer-text-content footer-1">
					<h4>About Us</h4>
					<a href="#">Blog</a>
					<a href="#">Our Mission</a>
					<a href="#">Our Vision</a>
					<a href="#">Privacy Policy</a>
					<a href="#">Terms of Use</a>
				</div>
				<div class="footer-text-content footer-2">
					<h4>Contact Us</h4>
					<a href="#">Jobs</a>
					<a href="#">Support</a>
				</div>

				<div class="footer-text-content footer-3 social-media">
					<h4>Social Media</h4>
					<a href="#">Facebook</a>
					<a href="#">Instagram</a>
					<a href="#">LinkedIn</a>
					<a href="#">Twitter</a>
				</div>
			</div>
			<div class="footer-logo">
				<img src="./Logoo.png" alt="Logo" width="75px" height="auto" />
			</div>
		</div>
		<div class="footer-bottom">
			<p>&copy; 2024 BrightSpark Ads. All rights reserved.</p>
		</div>
	</footer>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>