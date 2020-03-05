<!DOCTYPE html>
<html>
<head>
	<title>nacosspay</title>
</head>
<body>
<?php 
$fullname = $_POST['fullname'];
$matric_number = $_POST['matric_number'];
$llevel = $_POST['llevel'];
$status = $_POST['status'];
$email_add = $_POST['email_add'];
$nomber = $_POST['nomber'];

$dbhost = 'localhost';
$dbun= 'root';
$dbpass ='';
$dbname ='nacoss';

$conn = mysqli_connect($dbhost, $dbun, $dbpass, $dbname);
 mysqli_select_db($conn, $dbname);
$query = "SELECT * FROM `payment` WHERE `fullname`='$fullname'";
$search = mysqli_query($conn, $query);
$count = mysqli_num_rows($search);
 /*if($count > 0){
	mysqli_query($conn, "UPDATE `payment` SET `fullname`='$fullname', `matric_number`='$matric_number', `llevel`='$llevel', `status`='$status',`email_add`='$email_add',`nomber`='$nomber' WHERE `fullname` = '$fullname'") or die(mysqli_error());
}else{ 
*/
	mysqli_query($conn, "INSERT INTO `payment`(fullname, matric_number, llevel,status,email_add,nomber) VALUES('$fullname', '$matric_number', '$llevel','$status','$email_add','$nomber')") or die(mysqli_error($conn));
//}


 ?>
 <?php
 echo "<script>location.href='confirmpay.php';</script>";
exit;
?>
</body>
</html>