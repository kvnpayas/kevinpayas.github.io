
$(document).ready(function() {
$('.luffy').hide()
$('.opening').show()
$('.zoro').hide()
$('.sanji').hide()
$('.nami').hide()
$('.brook').hide()
$('.franky').hide()
$('.chopper').hide()
$('.robin').hide()
$('.usopp').hide()

 var boxWidth = $(".img").width();
        $(".img").mouseenter(function(){
            $(this).animate({
                width: "200"
            });
        }).mouseleave(function(){
            $(this).animate({
                width: "128"
            });
        });

$('#luffy').click(function(){
			$('.opening').hide()
			$('.luffy').toggle("slide");
			// $('.luffy').show()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		});
$('#zoro').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').toggle("slide");
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		})
$('#sanji').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').toggle("slide");
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		})
$('#nami').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').toggle("slide");
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		})
$('#franky').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').toggle("slide");
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		})
$('#brook').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').toggle("slide");
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').hide()
		})

$('#chopper').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').toggle("slide");
			$('.robin').hide()
			$('.usopp').hide()
		})
$('#robin').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').toggle("slide");
			$('.usopp').hide()
		})
$('#usopp').click(function(){
			$('.luffy').hide()
			$('.opening').hide()
			$('.zoro').hide()
			$('.sanji').hide()
			$('.nami').hide()
			$('.brook').hide()
			$('.franky').hide()
			$('.chopper').hide()
			$('.robin').hide()
			$('.usopp').toggle("slide");
		})


});