<?php 

	/**
	 * Connection DB
	 */
	include_once '../../apps/db.php';
	include_once '../../apps/function.php';


	// query database
	$sql = "SELECT * FROM students ORDER BY id DESC";
	$data = $connection -> query($sql);


	$i = 1;
	while($studnet_data = $data -> fetch_assoc()):
 ?>

 <tr>
 	<td><?php echo $i; $i++; ?></td>
 	<td><?php echo $studnet_data['name']; ?></td>
 	<td><?php echo $studnet_data['email']; ?></td>
 	<td><?php echo $studnet_data['cell']; ?></td>
 	<td><img src="media/students/<?php echo $studnet_data['photo']; ?>" alt=""></td>
 	<td>
 		<a id="single_student_show" student_id="<?php echo $studnet_data['id']; ?>" class="btn btn-sm btn-info" href="#">View</a>
 		<a id="edit_student" student_id="<?php echo $studnet_data['id']; ?>" class="btn btn-sm btn-warning" href="#">Edit</a>
 		<a id="delete_student" student_id="<?php echo $studnet_data['id']; ?>" class="btn btn-sm btn-danger" href="#">Delete</a>
 	</td>
 </tr>

 <?php endwhile; ?>