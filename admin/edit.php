<?php  
	$connect = mysqli_connect("localhost", "root", "", "eclinic");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE tblschedule SET ".$column_name."='".$text."' WHERE psid='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>