<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$category = $_POST['category'];
		$container = $_POST['container_name'];
		$weight = $_POST['container_weight'];
		$name = $_POST['namep'];
		$opening = $_POST['opening'];
		$add = $_POST['add_product'];
		$closing = $_POST['closing'];
		$warning = $_POST['warning'];
		if($closing <= $warning){
			$status = 1;
		}
		if($closing > $warning){
			$status = 0;
		}		

		$sql = "UPDATE products SET category_id = '$category', name_product = '$name' , container_name = '$container', container_weight = '$weight', opening_product = '$opening', add_product = '$add' , closing_product = '$closing' , warning_product = '$warning', status_product = '$status' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Product updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: product.php');

?>