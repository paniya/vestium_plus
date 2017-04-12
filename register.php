<?php

include_once('config.php');

if (isset($_POST['email'],$_POST['pw'])){
	$email = $_POST['email'];
	$pw = $_POST['pw'];
}

// echo $name;
// echo $email;
// echo $pw;

$sql1 = "INSERT INTO buyer (pw,email) VALUES ('$pw','$email')";
$qry1 = mysqli_query($conn,$sql1);

if($qry1){
	$sql2 = "SELECT * FROM buyer WHERE email='$email'"; 
	$qry2 = mysqli_query($conn,$sql2); 
	$result = mysqli_fetch_assoc($qry);
	$_SESSION['id'] = $result['id'];
	header("Location:customer-account.html");
}


?>