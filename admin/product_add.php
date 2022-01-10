<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$date = $_POST['date_product'];
		$firstname = $_POST['name_product'];
		$opening = $_POST['opening'];
		$add = $_POST['add_product'];
		$closing = $_POST['closing'];
		$warning = $_POST['warning'];
		$position = $_POST['category'];
		$status = 0;
		if($closing != 0){
			if($closing <= $warning){
				$status = 1;
			}
		}
		
		$sql = "INSERT INTO products (name_product, category_id, add_product, date_product, opening_product, closing_product, warning_product, status_product ) VALUES ('$firstname',  '$position', '$add' , '$date', '$opening' , '$closing' , '$warning', $status)";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: product.php');
?>