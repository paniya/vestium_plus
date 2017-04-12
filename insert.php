<?php
	include_once('config.php');

	//$id = $_SESSION['id'];
	$id = 1;
	if (isset($_POST['firstname'])){
		$fName = $_POST['firstname'];
		$lName = $_POST['lastname'];
		$tele = $_POST['tele'];
		$adrs = $_POST['adrs'];
		$city = $_POST['city'];
		$pType = $_POST['pType'];
	}

	//echo $fName." ".$lName." ".$tele." ".$adrs." ".$city." ".$pType;

	$sql1 = "UPDATE buyer SET fName='$fName', lName='$lName', tele='$tele', city='$city', adrs='$adrs', pType='$pType' WHERE ID='$id'";
	$qry1 = mysqli_query($conn,$sql1);

	if($qry1){
		header("Location:customer-home.php");
	}
?>