<?php
	
	$PName =$_POST['PName'];
	$PEmail =$_POST['PEmail'];
	$PClinic =$_POST['PClinic'];
	$PDate =$_POST['PDate'];
	$PTime =$_POST['PTime'];
	$PNum =$_POST['PNum'];
	$PMessage =$_POST['PMessage'];
	$PStatus =$_POST['PStatus'];

	$con = new mysqli('localhost','root','','eclinic');
	if($con->connect_error){
		echo 'database connection error';
	}

	$stmt = $con->prepare("INSERT INTO tblschedule (pname, pemail, pclinic, pdate, ptime, pnum, pmsg, pstatus) VALUES (?,?,?,?,?,?,?,?)");
//	$stmt = $con->prepare("INSERT INTO tblschedule (pname, pemail, pclinic, pdate, ptime, pnum, pmsg) VALUES (1,2,3,4,5,6,7)");

	$stmt->bind_param("ssssssss",$PName,$PEmail,$PClinic,$PDate,$PTime,$PNum,$PMessage,$PStatus);

	if($stmt->execute()){
		echo 'success';
	}
	else{
		echo 'failed';
	}