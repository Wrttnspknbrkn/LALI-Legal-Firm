<?php
include 'connection1.php'; 
	
		
		if(isset($_GET['id'])){
			$rid = $_GET['id'];
			$sql = "update case_register set status=1 where id = $rid";
			$result = $conn->query($sql);
			if($result == true){
				/* echo "record updated successfully"; */
				header("location:view_case.php");
			}
			else{
					echo"sql error".$conn->error;
			}
		}
		$conn->close();
?>
