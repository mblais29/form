$(document).ready(function() {
     //Hides the textbox's on load
      $(".second").hide();
      $(".third").hide();
      $(".fourth").hide();
      $(".fifth").hide();
      $("#submit").hide();
      
     //Hides the three paragraphs
      $("#firstParagraph").hide();
      $("#secondParagraph").hide();
      $("#thirdParagraph").hide();

     //the paragraphs fadeIn when key is pressed in textbox
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
     	$("h1").hide();
     	$("img").hide();
	    $('#nameFirst').text($(this).val());
	    $('#firstParagraph').slideDown();
	 });
	 
	//Enters the user input into the paragraph when user begins typing
	 $('#lastName').keyup(function () {
	    $('#nameLast').text($(this).val());
	 });
	 
	 $('#email').keyup(function () {
	    $('#emailAddress').text($(this).val());
	    $("#secondParagraph").slideDown();
	 });
	 
	 $('#userName').keyup(function () {
	    $('#user').text($(this).val());
	    $("#thirdParagraph").slideDown();
	 });
	 

});


	
     