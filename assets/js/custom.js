(function($){
	$(document).ready(function(){

		// student add modal
		$('a#student_show').click(function(){
			$('#add_new_student_modal').modal('show');

			return false;
		});


		// Show student add modal
		// $('a#single_student_show').click(function(){
		// 	$('#single_student_modal').modal('show');

		// 	return false;
		// });

		// document of Show student add modal
		$(document).on('click','a#single_student_show', function(){
			$('#single_student_modal').modal('show');

			let student_id = $(this).attr('student_id');

			$.ajax({
				url : 'inc/ajax/single_student_show.php',
				data : { id : student_id },
				method : 'POST',
				success : function(data){
					
					// jeson to object convert
					let single_student = JSON.parse(data);

					$('img#single_student_img').attr('src', 'media/students/' + single_student.photo);
					$('h2#student_name').text(single_student.name);
					$('td#student_name').text(single_student.name);
					$('td#student_email').text(single_student.email);
					$('td#student_cell').text(single_student.cell);

				}
			});

			return false;
		});


		// Add new student
		$('form#add_student_form').submit(function(e){
			e.preventDefault();

			// get some input field value
			let name = $('input[name="name"]').val();
			let email = $('input[name="email"]').val();
			let cell = $('input[name="cell"]').val();

			
			// validation student add form data
			if ( name == '' || email == '' || cell == '' ) {
				$('.mess').html('<p class="alert alert-danger">All fields are required ! <button class="close" data-dismiss="alert">&times;</button></p>');
			} else {

				$.ajax({
					url : 'inc/ajax/student_add.php',
					data : new FormData(this),
					method : 'POST',
					contentType : false,
					processData : false,
					success : function(data){

						$('form#add_student_form')[0].reset();
						$('#add_new_student_modal').modal('hide');
						$('.mess_all').html(data);
						allStudentData();
						// $('.mess').html(data);
					}
				});


			}

		});


		// show all student data
		function allStudentData(){
			$.ajax({

				url : 'inc/ajax/show_all.php',
				success : function(data){
					$("tbody#show_all_student").html(data);
				} 

			});
		}

		allStudentData();



		// Delete student
		$(document).on('click','a#delete_student', function(){

			let delete_id = $(this).attr('student_id');

			let conf = confirm('Are you sure?');

			if ( conf == true ) {

				$.ajax({

					url : 'inc/ajax/delete_student.php',
					data : { id : delete_id },
					method : "POST",
					success : function(data){
						$('.mess_all').html('<p class="alert alert-success">Student data deleted successfull ! <button class="close" data-dismiss="alert">&times;</button></p>');
						allStudentData();
					}


				});
				
			} else {

				return false;

			}


			return false;

		});





	});
})(jQuery)