<?php 
	
	/**
	 * Connection DB
	 */
	include_once '../../apps/db.php';
	include_once '../../apps/function.php';

	// Get values from student data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cell = $_POST['cell'];


	// get photo name
	$data = fileUpload($_FILES['photo'], '../../media/students/');
	$photo_name = $data['file_name'];

	/**
	 * Query database
	 */
	$sql = "INSERT INTO students(name, email, cell, photo) VALUES('$name','$email','$cell','$photo_name')";
	$connection -> query($sql);

	echo '<p class="alert alert-success">Student added successfull ! <button class="close" data-dismiss="alert">&times;</button></p>';








 ?>