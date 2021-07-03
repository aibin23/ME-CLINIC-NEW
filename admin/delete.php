<?php  
	$connect = mysqli_connect("localhost", "root", "", "eclinic");
	$sql = "DELETE FROM tblschedule WHERE psid = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>