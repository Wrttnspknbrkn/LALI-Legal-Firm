<?php
include 'connection1.php'; 
	/* $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lali_legalfirm";

	$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} */	
		if(isset($_GET['id'])){
			$uid = $_GET['id'];
			$sql = "update clients set status=1 where id = $uid";
			$result = $conn->query($sql);
			if($result == true){
				/* echo "record updated successfully"; */
				header("location:client_data.php");
			}
			else{
					echo"sql error".$conn->error;
			}
		}
		$conn->close();
?>