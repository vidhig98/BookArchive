<?php
session_start();

function logout(){
    session_unset(); 
    // destroy the session 
    session_destroy(); 
    header('Location: ./login.php');
    exit();
}
if(isset($_SESSION['ukey'])){
    header('Location: ./profile.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BookArchive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="./contentstyle.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <script src="./mainScript.js"></script>

	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="loadingif" id="loading"><h1>BookArchive</h1></div>

	<!--This is the wrapper which purposly used for controlling the whole body content-->
<div class="wrapper" id="wrapper">
	<header>
		<div>
			<!--This is the navigation bar which contains logo tabs and login option-->
			<nav>
				<div class="header_logo" style="position:relative;z-index:1000;">
					<a href="./" >Back to BookArchive</a>
				</div>
				<div class="main_nav">
				  <ul>
					<li>
					<div class="login" id="login">
								<div class="signin-wrapper">
										<div class="small-dialog-headline">
											<h4 class="text-center">Sign in</h4>
										</div>
									
										<div class="small-dialog-content">
									
											<!-- Start of Login form -->
											
											<form name="loginform" id="loginform" action="./access.php" method="post">
												
												<p class="login-username">
													<label for="userid">Username or Email Address</label>
													<input type="text" name="userid" id="user_login" class="input" value="" size="20">
												</p>
												<p class="login-password">
													<label for="user_pass">Password</label>
													<input type="password" name="pass" id="user_pass" class="input" value="" size="20">
												</p>
												
												<p class="login-submit">
													<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
												</p>
												
											</form>		<!-- End of Login form -->
									
											<div class="bottom-links">
												<span>
													Not a member?<button class="signUpClick" onclick="finishLogin(),startSignUp()">Sign up</button>
												</span>
											</div>
										</div>
									
									</div>
						</div>
					</li>
					<li>
							<div class="signup" id="signup">
									<div class="signin-wrapper">
											<div class="small-dialog-headline">
												<h4 class="text-center">Sign Up</h4>
												<span class="closebtn" onclick="finishSignUp()" title="Close form">&#x2716</span>
											</div>
										
											<div class="small-dialog-content">
										
												<!-- Start of Login form -->
												
												<form name="loginform" id="registerform" action="./reg.php" method="post">
													
													<p class="login-username">
															<label for="user_login">Username </label>
															<input type="text" name="userid" id="userid_register" class="input" value="" size="20">
														</p>
													<p class="login-username">
														<label for="user_login">Email Address</label>
														<input type="email" name="email" id="user_register" class="input" value="" size="20">
													</p>
													<p class="login-password">
														<label for="user_pass">Password</label>
														<input type="password" name="pass" id="user_pass_reg" class="input" value="" size="20">
													</p>
													<p class="login-password">
															<label for="user_pass">Confirm Password</label>
															<input type="password" name="cnfpass" id="cnfuser_pass_reg" class="input" value="" size="20">
														</p>
													<p class="login-submit">
														<input type="submit" name="register-submit" id="register-submit" class="button button-primary" value="Sign Up">
													</p>
													
												</form>		<!-- End of Login form -->
										
												<div class="bottom-links">
													<span>
														 Already a Member?<button class="LogInClick" onclick="finishSignUp(),startLogin()">Log In</button>
													</span>
												</div>
											</div>
										
										</div>
							</div>
					</li>	
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<div class="backgroundSlider">

		<div  class="slider" style="position:absolute;text-align:center">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<span class="dot"></span> 
		  </div>
			<div class="slider_window">
				<div class="mySlides fade">
					<img src="slider/8.jpg" style="width:100%">
					<div class="text">Read</div>
				</div>
				
				<div class="mySlides fade">
					<img src="slider/4.jpg" style="width:100%">
					<div class="text">Buy</div>
				</div>
				
				<div class="mySlides fade">
					<img src="slider/1.jpg" style="width:100%">
					<div class="text">Borrow</div>
				</div>
				<style>
					* {box-sizing: border-box;}
					body {font-family: Verdana, sans-serif;}
					.mySlides {display: none;}
					img {width: 100%; height: 100vh;}
					
					/* Slideshow container */
					.slideshow-container {
					max-width: 1000px;
					position: relative;
					margin: auto;
					}
					
					/* Caption text */
					.text {
					color: #f2f2f2;
					font-size: 15px;
					padding: 8px 12px;
					position: absolute;
					bottom: 8px;
					width: 100%;
					text-align: center;
					}
					
					/* Number text (1/3 etc) */
					
					
					/* The dots/bullets/indicators */
					.dot {
					height: 15px;
					width: 15px;
					margin: 0 2px;
					background-color: #bbb;
					border-radius: 50%;
					display: inline-block;
					transition: background-color 0.6s ease;
					}
					
					.active {
					background-color: #ffffff;
					}
					
					/* Fading animation */
					.fade {
					-webkit-animation-name: fade;
					-webkit-animation-duration: 1.5s;
					animation-name: fade;
					animation-duration: 1.5s;
					}
					
					@-webkit-keyframes fade {
					from {opacity: .4} 
					to {opacity: 1}
					}
					
					@keyframes fade {
					from {opacity: .4} 
					to {opacity: 1}
					}
					
					/* On smaller screens, decrease text size */
					@media only screen and (max-width: 300px) {
					.text {font-size: 11px}
					}
					</style>
				<script>
					var slideIndex = 0;
					showSlides();
					
					function showSlides() {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("dot");
						for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
						}
						slideIndex++;
						if (slideIndex > slides.length) {slideIndex = 1}    
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex-1].style.display = "block";  
						dots[slideIndex-1].className += " active";
						setTimeout(showSlides, 5000); // Change image every 5 seconds
					}
					</script>
			</div>
	</div>

	<div class="overlay"></div>



	<!--This is floating button to Scroll Top-->
	<div class="backToTop">

	</div>
</div>
</body>
<script>

//This is the main Script for our main page Vidhi right function for SCroll To Top 
// All code should be inside function then we will call it
var url =new URL(window.location.href);
var signup = url.searchParams.get("signup");
if (signup=="true"){
    finishLogin();
    startSignUp();
}else{
    finishSignUp()
}
function startLogin(){
	document.getElementById("login").style.display="block";
}
function finishLogin(){
	document.getElementById("login").style.display="none";
}
function startSignUp(){
	document.getElementById("signup").style.display="block";
}
function finishSignUp(){

	document.getElementById("signup").style.display="none";
    startLogin();

}


</script>

</html>