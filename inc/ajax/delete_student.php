<?php 

	/**
	 * Connection DB
	 */
	include_once '../../apps/db.php';
	include_once '../../apps/function.php';

	// get value 
	$id = $_POST['id'];

	/**
	 * query database
	 */
	$sql = "DELETE FROM students WHERE id='$id'";
	$connection -> query($sql);




 ?>