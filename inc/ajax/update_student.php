<?php 


	/**
	 * Connection DB
	 */
	include_once '../../apps/db.php';
	include_once '../../apps/function.php';

	// get value 
	$id = $_POST['student_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];

	if ( isset($_FILES['new_photo']['name']) ) {
		$data = fileUpload($_FILES['new_photo'], '../../media/students/');
		$photo_name = $data['file_name'];

		unlink('../../media/students/' . $_POST['old_photo']);
	} else {
		$photo_name = $_POST['old_photo'];
	}
	


	// // query database
	$sql = "UPDATE students SET name='$name', email='$email', cell='$cell', photo='$photo_name' WHERE id='$id'";
	$data = $connection -> query($sql);



