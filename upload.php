<?php
include 'DB_Ops.php';

// Check if file was uploaded
if(isset($_FILES["image"])) {
	// Get file details
	$file_name = $_FILES["image"]["name"];
	$file_temp = $_FILES["image"]["tmp_name"];
	$file_size = $_FILES["image"]["size"];
	$file_error = $_FILES["image"]["error"];

	// Check if file is an image
	$file_ex = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
	$allowed = array("jpeg", "jpg", "png");
	if(in_array($file_ex, $allowed)) {
		// Check if file size is less than 2 MB
		if($file_size < 2097152) {
			// Generate a unique file name
			$file_new_name = uniqid('', true) . "." . $file_ex;

			// Upload file to the server
			$file_des = "Images/" . $file_new_name;
			if(move_uploaded_file($file_temp, $file_des)) {
				// Insert image name into the database
				if(insertImage($file_new_name)) {
					echo "File uploaded successfully.";
				} else {
					echo "Error inserting image name into database.";
				}
			} else {
				echo "Error uploading file.";
			}
		} else {
			echo "File size is too big. Max size is 2 MB.";
		}
	} else {
		echo "File type not allowed. Allowed types: jpg, jpeg, png, gif.";
	}
} else {
	echo "No file selected.";
}
?>