<?php

include_once('config.php');
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$pw = $_POST['pw'];

	$sql1 = "SELECT * FROM buyer WHERE email='$email'"; 
	$qry1 = mysqli_query($conn,$sql1); 

	if(mysqli_num_rows($qry1)==1){
		$row = mysqli_fetch_assoc($qry1);
		$_SESSION['id'] = $row['ID'];
		header("Location:customer-home.php");
		//echo $_SESSION['id'];
	}

}

?>