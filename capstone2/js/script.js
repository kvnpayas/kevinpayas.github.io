$(document).ready(function(){

	$('.parallax').parallax();
	$('.slider').slider({height: 600});
	// $('.button-collapse').sideNav();
	$('.collapsible').collapsible();
	$('.collapsibleUser').collapsible();
	$('select').material_select();
	$('.materialize-textarea').trigger('autoresize');
	$('.modal').modal();
	$('#checkoutLogin').modal();
	$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
    });

	$('.carousel.carouselImage').carousel({
		dist: 0,
		indicators: true,
		padding: 550
	});

	$('div#carouselProd2').carousel({
		indicators: true,
		dist: 0,
		padding: 200,
		noWrap: false
	});

	$('div#carouselWears').carousel({
		indicators: true,
		dist: -100,
		padding: 400,
		noWrap: true
	});

	autoplay();

	function autoplay() {
    $('.carousel.carouselImage').carousel('next');
    setTimeout(autoplay, 4500);
	}
	$('ul.tabs').tabs({
		// swipeable: true
	});
	$('ul.tabs .tabsWear').tabs({
		swipeable: true
	});

	var options = [
	{selector: '#stagered-test', offset: 300, callback: function(el) {
		Materialize.showStaggeredList($(el));
	} },
	{selector: '#stagered-test', offset: 300, callback: function(el) {
		Materialize.fadeInImage($(el));
	} },
	{selector: '#stagered-test2', offset: 300, callback: function(el) {
		Materialize.showStaggeredList($(el));
	} },
	{selector: '#stagered-test2', offset: 300, callback: function(el) {
		Materialize.fadeInImage($(el));
	} }
	];

	Materialize.scrollFire(options);

	$('#modal1').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .8, // Opacity of modal background
      inDuration: 500, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
       // Callback for Modal close
   });

	$('#checkout').modal();

	$('.dropdown-button').dropdown({
		inDuration: 500,
		outDuration: 225,
      constrainWidth: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
  });
	$('.dropdown-profile').dropdown({
		inDuration: 500,
		outDuration: 225,
      constrainWidth: true, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
  });

	$('#submitBtn').addClass('disabled');

	$('#first_name, #last_name, #username, #reg_email, #reg_password, #confirm_password').on('keyup', function() {
		if(allFilled() && $('#reg_password').val() == $('#confirm_password').val()){ 
			

					$('#submitBtn').removeClass('disabled');
					$('#error').addClass('green-text');
					$('#error').removeClass('red-text');
					$('#error').removeClass('hide');
					$('#error').html('Password Match');
					$('#confirm_password').addClass('valid').removeClass('invalid');
					$('#reg_password').addClass('valid').removeClass('invalid');

					
		}else{
			$('#submitBtn').addClass('disabled');
			$('#error').addClass('red-text');
			if($('#reg_password').val() == '' && $('#confirm_password').val() == ''){
				$('#error').html("");
			}else{
					$('#error').removeClass('green-text');
					$('#error').html("Password confirmation doesn't match");
					$('#error').removeClass('hide');
					$('#confirm_password').addClass('invalid').removeClass('valid');
					$('#reg_password').addClass('invalid').removeClass('valid');
					}
		}
	});
	$('#updatePass').addClass('disabled');
	$('#edit__confirm_password, #edit_password').on('keyup', function() {
		if(allFilled1() && $('#edit__confirm_password').val() == $('#edit_password').val()){ 
			

					$('#updatePass').removeClass('disabled');
					$('#edit__confirm_password').addClass('valid').removeClass('invalid');
					$('#edit_password').addClass('valid').removeClass('invalid');

					
		}else{
			$('#updatePass').addClass('disabled');
			if($('#edit_password').val() == '' && $('#edit__confirm_password').val() == ''){
			}else{
					$('#edit__confirm_password').addClass('invalid').removeClass('valid');
					$('#edit_password').addClass('invalid').removeClass('valid');
					}
		}
	});
	function getAll(){

		$.ajax
		({
			url: 'admin_edit_product_view.php',
			data: 'category=select',
			cache: false,
			success: function(data)
			{
				$("#product-body").html(data);
			}
		});   
	}

	getAll();

	$("#categories").change(function()
	{    
		var id = $(this).find(":selected").val();

		var dataString = 'category='+ id;

		$.ajax
		({
			url: 'admin_edit_product_view.php',
			data: dataString,
			cache: false,
			success: function(data)
			{
				$("#product-body").html(data);
			} 
		});
	});

	function getAllorder(){

		$.ajax
		({
			url: 'admin_orders_view.php',
			data: 'category=all',
			cache: false,
			success: function(data)
			{
				$("#body_order").html(data);
			}
		});   
	}
	 getAllorder();
	$("#categoriesorder").change(function(){    
		var id = $(this).find(":selected").val();

		var dataString = 'category='+ id;

		$.ajax
		({
			url: 'admin_orders_view.php',
			data: dataString,
			cache: false,
			success: function(data)
			{
				$("#body_order").html(data);
			} 
		});
	});

	function getAllorderDelete(){
		$.ajax
		({
			url: 'admin_delete_product_view.php',
			data: 'category=all',
			cache: false,
			success: function(data)
			{
				$("#product-body-delete").html(data);
			}
		});   
	}

	getAllorderDelete();

	$("#categoriesDelete").change(function()
	{    
		var id = $(this).find(":selected").val();

		var dataString = 'category='+ id;

		$.ajax
		({
			url: 'admin_delete_product_view.php',
			data: dataString,
			cache: false,
			success: function(data)
			{
				$("#product-body-delete").html(data);
			} 
		});
	});

	$(".getAdd").click(function(){
		var users = $(this).attr('id');
		console.log(users);
		$.ajax({
			method: "post",
			url: 'addGet.php',
			data: {
				users : users
			},
			success: function(data){
				// alert(data);
				$("#delivery_add").val(data);
			}
		});
	});


	$('#autocomplete-input').keyup(function(){
		var name =$('#autocomplete-input').val();

		$.post('name_suggestions.php', 
			{'suggestion': name},
			function(data, status){
				$('#nameAppear').html(data);
			});
		});

	$('#viewCustomer').keyup(function(){
		var name =$('#viewCustomer').val();

		$.post('name_suggestion_view.php', 
			{'suggestions': name},
			function(data, status){
				$('#viewCustAppear').html(data);
			});
		});

	$(".confirmed").click(function(){
		var index = $(this).data('index');
		// var cat = $(this).data('cat')
		console.log(index);
		$.ajax({
			method: 'post',
			url: 'confirmation.php',
			data: {
				index : index
				// cat : cat
			},
			success: function(data){
				$("#modal_con_body").html(data);
			}
		})
	});
	
	// $(".delete_modal").click(function(){
	// 	var index = $(this).data('index');
	// 	console.log(index);
	// 	$.post('delete_modal_endpoint.php',{
	// 		index : index
	// 	},function(data){
	// 		$('#delete-body').html(data);
	// 	});
	// });

});

function allFilled() {
	var filled = true;
	$('#reg-form input').each(function() {
		if($(this).val() == '') filled = false;
	});
	return filled;


}
function allFilled1() {
	var filled = true;
	$('#passEdit input').each(function() {
		if($(this).val() == '') filled = false;
	});
	return filled;


}


