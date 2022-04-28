<?php

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "_db_con.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$years = mysqli_real_escape_string($conn,$_POST['years	']);
	$fuel = mysqli_real_escape_string($conn,$_POST['fuel']);
	$kms = mysqli_real_escape_string($conn,$_POST['kms']);
	$no_of_owners = mysqli_real_escape_string($conn,$_POST['no_of_owners']);
	$price = mysqli_real_escape_string($conn,$_POST['price']);

    if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: carinfo.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				$sql = "INSERT INTO images(image_url,name,years,fuel,kms,no_of_owners,price)
				        VALUES('$new_img_name','$name','$years','$fuel','$kms','$no_of_owners','$price')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
	        }else {
				$em = "You can't upload files of this type";
		        header("Location: carinfo.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: carinfo.php?error=$em");
	}

}else {
	header("Location: carinfo.php");
}