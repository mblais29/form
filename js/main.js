$(document).ready(function() {
      $(".second").hide();
      $(".third").hide();
      $(".fourth").hide();
      $(".fifth").hide();

      $("#firstName").keypress( function(){
	 	$(".second").fadeIn('slow');
      });
      $("#lastName").keypress( function(){
		$(".third").fadeIn('slow');
      });
      $("#email").keypress( function(){
	  	$(".fourth").fadeIn('slow');
      	});
	  $("#userName").keypress( function(){   	
		$(".fifth").fadeIn('slow');
     });
});