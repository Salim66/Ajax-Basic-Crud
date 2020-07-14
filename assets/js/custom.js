(function($){
	$(document).ready(function(){

		// student add model
		$('a#student_show').click(function(){
			$('#add_new_student_modal').modal('show');

			return false;
		});


		// Show student add model
		$('a#single_student_show').click(function(){
			$('#single_student_modal').modal('show');

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








	});
})(jQuery)