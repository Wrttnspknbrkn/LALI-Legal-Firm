<?php
include 'connection1.php'; 	
		if(isset($_GET['id'])){
			$uid = $_GET['id'];
			$sql = "update clients set status=0 where id = $uid";
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