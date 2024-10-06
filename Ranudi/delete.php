<?php
require_once './config.php';
//check the delete_id parameter exists in the URL

if(isset($_GET['delete_id'])){
	$deleteID = $_GET['delete_id'];
	
$sql = "DELETE FEOM user WHERE id = '$deleteID'";
if($conn->query($sql) === TRUE)
	{
     echo "<script>alert('Account deleted')</script>";	
	 echo "<script>window.location.href = 'insert.php'</script>";
}else{
	echo "Account delete failed";
}
}else{
	echo "delete id parameter not found";
}
$conn->close();
?>