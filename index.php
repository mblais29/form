<!DOCTYPE html>
<!-- Based on HTML5 Bones | http://html5bones.com -->

<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Forms</title>
	
	<meta name="description" content="">
	
  <!-- Mobile-friendly viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Style sheet link -->
	<link href="css/main.css" rel="stylesheet" media="all">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
   
   <!-- jquery sheet link -->
   	<script type="text/javascript" src="components/jquery-2.1.4.min.js"></script>
   	<script type="text/javascript" src="js/main.js"></script>
	
</head>
<body>
	<div id="wrapper">
		<header role="banner">
			<h1>Sign Up Here</h1>
			<img src="img/arrow.png" title="arrow" id="arrow" />
			<p id="firstParagraph">Welcome <b><span id="nameFirst"></span> <span id="nameLast"></span></b>!</p>
			<p id="secondParagraph">Your email address is <b><span id="emailAddress"></span></b></p>
			<p id="thirdParagraph">Your desired username is <b><span id="user"></span></b>	
		</header>
		<div id="sentence"></div>
		<!--<main role="main">-->
			<form action="save.php" method="post">
			<!--<h1>User Information</h1>-->
				<label class="first" for="firstName" id="firstLabel">First Name</label>
	    			<input class="first" type = "text" name = "firstName" id = "firstName" /><br/><br/>
	    		<label class="second" for="lastName">Last Name</br/></label>
	    			<input class="second" type = "text" name = "lastName" id = "lastName" /><br/><br/>
	    		<label class="third" for="email">Email</br/></label>
	    			<input class="third" type = "text" name = "email" id = "email" /><br/><br/>
	    		<label class="fourth" for="userName">Username</br/></label>
	    			<input class="fourth" type = "text" name = "userName" id = "userName" /><br/><br/>
	    		<label class="fifth" for="myPwd">Password</br/></label>
	    			<input class="fifth" type = "password" name = "myPwd" id = "myPwd" /><br/><br/>
	    			<input type = "submit" id = "submit" value = "Submit" /><br/>
			</form>
		<!--</main>-->
		<!--<footer role="contentinfo">
	
			<div>Page footer content</div>
	
			<small>Copyright &copy; <time datetime="2015">2015</time></small>
			
		</footer>-->
	</div>
</body>
</html>

