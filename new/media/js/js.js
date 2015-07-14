$(document).ready(function(){
 $('.div_search_sity  li').hover(
 function(){ //over
  $(this).prevAll('li.bukva').slice(0,1).addClass('bg');
     },
    function(){ //out
   $(this).prevAll('.bukva').removeClass('bg');
     }
);
  $('.selectedTxt').click(function(){
	  $('.selectedTxt').css('z-index','10');
	  $('.newList').css('z-index','6');
	  $(this).css('z-index','100');
	  $(this).next().css('z-index','80');
  });
$(".ul_pay li:nth-child(2n+1)").css("background", "#f5f5f5");
$(".ul_black_table li:nth-child(2n+1)").css("background", "#f9f9f9");
  $(".ul_pay li input:checked").closest('span').addClass('span_color_3');
  $(".ul_pay li span ").click(function(){
	$(".ul_pay li span").removeClass('span_color_3'); 
$(".ul_pay li input:checked").closest('span').addClass('span_color_3');
});
});
/*-------------------------modal---------------------*/	
$(document).ready(function() {
	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('href');
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		$('#mask').fadeIn(1000);
		$('#mask').fadeTo("slow",0.8);
		var winH = $(window).height();
		var winW = $(window).width();
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		$(id).fadeIn(2000);
	});
	$('.window .close').click(function (e) {
		e.preventDefault();
		$('#mask, .window').hide();
	});
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});
		});
						