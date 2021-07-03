<?php  
$connect = mysqli_connect("localhost", "root", "", "eclinic");

$sql = "INSERT INTO tblschedule(pname, pemail, pclinic, pdate, ptime, pnum, pmsg, pstatus) VALUES('".$_POST["pname"]."', '".$_POST["pemail"]."', '".$_POST["pclinic"]."', '".$_POST["pdate"]."', '".$_POST["ptime"]."', '".$_POST["pnum"]."', '".$_POST["pmsg"]."', 'pending')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>