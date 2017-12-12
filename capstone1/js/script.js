
var toggleIcon = document.querySelector('#toggleIcon');
toggleIcon.addEventListener('click', function() {

	console.log('Working'); /* for debugging */

	var nav1 = document.querySelector('#headerInner');
	nav1.setAttribute('hidden', 'hidden');

	var header = document.querySelector('#outerCont');
	header.removeAttribute('hidden');

});

var close = document.querySelector('#close');
close.addEventListener('click', function() {

	console.log('Working'); /* for debugging */

	var nav1 = document.querySelector('#outerCont');
	nav1.setAttribute('hidden', 'hidden');

	var header = document.querySelector('#headerInner');
	header.removeAttribute('hidden');

});

$('section.awSlider .carousel').carousel({
	pause: "hover",
  interval: 2000
});

var startImage = $('section.awSlider .item.active > img').attr('src');
$('section.awSlider').append('<img src="' + startImage + '">');

$('section.awSlider .carousel').on('slid.bs.carousel', function () {
 var bscn = $(this).find('.item.active > img').attr('src');
	$('section.awSlider > img').attr('src',bscn);
});


/* 
Philips ambilight tv
Üzerine gleince duruyor slide
*/

$('body').on('click','#iconFooter',function(){
	console.log('Working'); /* for debugging */
    if($('#footer').hasClass("visible"))
    {
        $('#iconFooter').animate({
            bottom: '-5%'
        },250);
        $('#footer').animate({
            bottom: '-29%'
        },250).toggleClass("visible");
    }else
    { 
        $('#iconFooter').animate({
            bottom: '24%'
        },250);
        $('#footer').animate({
            bottom: '0px'
        },250).toggleClass("visible");
    }
    
});

$(document).on('change', '.islandSelect', function() {
  var target = $(this).data('target');
  var show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function(){
	$('.islandSelect').trigger('change');
});