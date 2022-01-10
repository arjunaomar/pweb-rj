<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$amount = $_POST['amount'];

		$sql = "INSERT INTO aset (name, amount) VALUES ('$title', '$amount')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Aset added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: aset.php');

?>