
$( document ).ready(function(){
	$(".button-collapse").sideNav();
	$('.parallax').parallax();
	$('select').material_select();
	$(".dropdown-button").dropdown();
	$('select').material_select();
	$('.modal').modal();
	$('#modal1').modal('open');
	$('#modal1').modal('close');

	$('#submitBtn').addClass('disabled');

	$('#fullName, #username1, #password, #confirm_password').on('keyup', function() {
		if(allFilled()){ 
			$('#password, #confirm_password').on('keyup', function () {
				if ($('#password').val() == $('#confirm_password').val()) {

					$('#submitBtn').removeClass('disabled');
					$('#error').addClass('green-text');
					$('#error').removeClass('red-text');
					$('#error').removeClass('hide');
					$('#error').html('Password Match');
					$('#confirm_password').addClass('valid').removeClass('invalid');
					$('#password').addClass('valid').removeClass('invalid');
					if($('#password').val() == '' && $('#confirm_password').val() == ''){
						$('#submitBtn').addClass('disabled');
						$('#error').html('');
						$('#confirm_password').removeClass('valid');
						$('#password').removeClass('valid');
					}

				} else {
					$('#submitBtn').addClass('disabled');
					$('#error').addClass('red-text');
					$('#error').removeClass('green-text');
					$('#error').html("Password confirmation doesn't match");
					$('#error').removeClass('hide');
					$('#confirm_password').addClass('invalid').removeClass('valid');
					$('#password').addClass('invalid').removeClass('valid');
				}
			});

			$('#submitBtn').removeClass('disabled');
		}else{
			$('#submitBtn').addClass('disabled');
		}
	});

	$(".render_modal").click(function(){
		var index = $(this).data('index');
		$.post('render_modal_body_endpoint.php',{
			index : index
		},function(data){
			$('#modal-body').html(data);
		});
	});
	$(".delete_modal").click(function(){
		var index = $(this).data('index');
		$.post('delete_modal.php',{
			index : index
		},function(data){
			$('#modal-body').html(data);
		});
	});

});

function allFilled() {
	var filled = true;
	$('#reg-form input').each(function() {
		if($(this).val() == '') filled = false;
	});
	return filled;


}





