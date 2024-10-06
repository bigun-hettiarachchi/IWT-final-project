<?php
//insert DB connection_aborted
require_once 'config.php';

//retrieve data from the database
$sql = "SELECT *From user";
$result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
	echo "<tr>";
	echo "<td>" . $row["firstname"] . "</td>";
	echo "<td>" . $row["lastname"] . "</td>";
	echo "<td>" . $row["ID"] . "</td>";
	echo "<td>" . $row["gender"] . "</td>";
	echo "<td>" . $row["mobile"] . "</td>";
	echo "<td>" . $row["email"] . "</td>";
	echo "<td>" . $row["DOB"] . "</td>";
	echo "<td>" . $row["role"] . "</td>";
	echo "<td>" . $row["psw"] . "</td>";
    echo "<td>";
	echo "<button onClick =\"redirectToUpdate(".$row['ID'] . ")\">Update</button>";
	echo "<a href =\delete.php?delete_id=" . $row["ID"] . "\">Delete</a>";
	echo "</td>";
	echo "</tr>";

	
}}else{
	echo "no data";
}
$conn->close();
?>