(function($){
	$(document).ready(function(){

		$('a#student_show').click(function(){
			$('#add_new_student_modal').modal('show');

			return false;
		});



		$('a#single_student_show').click(function(){
			$('#single_student_modal').modal('show');

			return false;
		});











	});
})(jQuery)