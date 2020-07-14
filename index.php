<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<!-- STUDENT ADD MODAL -->
	<div id="add_new_student_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Add new student</h2>
					<div class="mess"></div>
					<hr>
					<form id="add_student_form" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Name</label>
							<input class="form-control" name="name" type="text">
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input class="form-control" name="email" type="text">
						</div>
						<div class="form-group">
							<label for="">Cell</label>
							<input class="form-control" name="cell" type="text">
						</div>
						<div class="form-group">
							<label for="">Photo</label>
							<input class="form-control" name="photo" type="file">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" name="add" type="submit" value="Add Student">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- SINGLE STUDENT SHOW MODAL -->
	<div id="single_student_modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h2>Single Student Data</h2>
					<hr>
					
					<img class="shadow" style="width: 200px;height: 200px;display: block;margin: auto;border-radius: 50%;border: 10px solid #fff;" src="assets/media/img/photo-1470129360498-ab39dc4e05d6.webp" alt="">
					<h2 class="text-center">Salim Hasan Riad</h2>

					<table class="table table-striped table-hover">
						<tr>
							<td>Name :</td>
							<td>Salim Hasan</td>
						</tr>
						<tr>
							<td>Name :</td>
							<td>Salim Hasan</td>
						</tr>
						<tr>
							<td>Name :</td>
							<td>Salim Hasan</td>
						</tr>
						<tr>
							<td>Name :</td>
							<td>Salim Hasan</td>
						</tr>
						<tr>
							<td>Name :</td>
							<td>Salim Hasan</td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
	

	<div class="wrap-table">
		<a id="student_show" class="btn btn-primary btn-sm" href="#">Add new student</a>
		<div class="card shadow">
			<div class="card-body">
				<div class="mess_all"></div>
				<h2>All Students</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="show_all_student">

						
						
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>