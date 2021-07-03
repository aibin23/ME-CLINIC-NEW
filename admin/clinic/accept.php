<?php  
	$connect = mysqli_connect("localhost", "root", "", "eclinic");
	$id = $_POST["id"];    
	$sql = "UPDATE tblschedule SET pstatus='approved' WHERE psid='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>