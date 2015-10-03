$(document).ready(function() {
      $(".second").hide();
      $(".third").hide();
      $(".fourth").hide();
      $(".fifth").hide();
      $("#submit").hide();
      $("#firstParagraph").hide();
      $("#secondParagraph").hide();
      $("#thirdParagraph").hide();

      
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
     $("#myPwd").keypress( function(){   	
		$("#submit").fadeIn('slow');
     	});

     $('#firstName').keyup(function () {
	    $('#nameFirst').text($(this).val());
	    $('#firstParagraph').show();
	 });
	 
	 $('#lastName').keyup(function () {
	    $('#nameLast').text($(this).val());
	   
	 });
	 
	 $('#email').keyup(function () {
	    $('#emailAddress').text($(this).val());
	    $("#secondParagraph").show();
	 });
	 
	 $('#userName').keyup(function () {
	    $('#user').text($(this).val());
	    $("#thirdParagraph").show();
	 });
	 

});


	
     