<?php 


	/**
	 * Connection DB
	 */
	include_once '../../apps/db.php';
	include_once '../../apps/function.php';

	// get value 
	$id = $_POST['id'];


	// query database
	$sql = "SELECT * FROM students WHERE id='$id'";
	$data = $connection -> query($sql);

	$single_student_data = $data -> fetch_assoc();


	// json convert
	echo $single_student = json_encode($single_student_data);