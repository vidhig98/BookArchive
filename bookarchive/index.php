<?php 
		session_start();
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
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	  <script src="./mainScript.js"></script>

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!--This is the wrapper which purposly used for controlling the whole body content-->
<div class="loadingif" id="loading"><h1>BookArchive</h1></div>
<div class="wrapper" id="wrapper">
	<header>
		<div>
			<!--This is the navigation bar which contains logo tabs and login option-->
			<nav>
				<div class="header_logo">
					<a href="http://example.com/image.jpeg">BookArchive</a>
				</div>
				<div class="main_nav">
				  <ul>
					<li class="tabs">
						<a href="./">Home</a>
						<a href="./request.php">Request</a>
						<a href="./about.php">About</a>
					</li>
					<li class="loginbtn myprofile" id="myprofile" style="display:none;">
						<a href="./profile.php"><button>My Profile</button></a>
						
					</li>
					<li class="loginbtn" id="loginbtn">
						<button onclick="startLogin()">LOGIN</button>
						
					</li>
					<li>
					<div class="login" id="login">
								<div class="signin-wrapper">
										<div class="small-dialog-headline">
											<h4 class="text-center">Sign in</h4>
											<span class="closebtn" onclick="finishLogin()" title="Close form">&#x2716</span>
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
														<input type="text" name="email" id="user_register" class="input" value="" size="20">
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

    <!--This is the Main Slider Section which contains sliding images in background with full screen and search option-->
	<div class="FullScreenSlider">
		
		<!--This is our main search  bar-->
		<div class="search">
			<div class="search_form_group">
					<form class="search_form" action=" " onsubmit="return false">
							<input type="text"  id="myquery" placeholder="Enter Books or Author Name" class="searchbar">
							<button id="book" type="submit" onclick="mSearchArchive(document.getElementById('myquery').value)" class="search_control"><i class="material-icons">
									search
									</i></button>
					</form>
			</div>	
		</div>

	</div>

	<!--This is our main area for showcasing default books and displays search results here-->
	<div class="loadingerror" id="loaderror"></div>
	<div class="canvas" id="results">
		 <div class="most_popular">
			 <header><span>Most Popular</span></header>
			 <iframe src="./slider/index.php?id=most_popular"></iframe>

		</div>
		<div class="Comics">
				<header><span>Comics</span></header>
				<iframe src="./slider/index.php?id=comicbooks"></iframe>

		</div>
		<div class="Academics">
				<header><span>Academics</span></header>
				<iframe src="./slider/index.php?id=academics"></iframe>

		</div>

	</div>
<style>
	.canvas{
		color:#584fb5;
		font-family:monospace;
		font-size:32px;
	}
	.canvas header{
		padding:0.5rem;
		background: #ffffff;
	}
 .canvas .most_popular, .canvas .Indian, .canvas .Academics{
	 position: relative;
	 display: block;
	 padding-top:2rem;
	 height: 40rem;
	 width: 100%;
 }

 iframe{
	 position:relative;
	 height: 28rem;
	 width: 100%;
	 padding:0;
	 left:0;
	 right:0;
	 style:none;
	 border: none;
 }
</style>
	<!--This is our analytics area for showcasing Total reads views and downloads numbers-->
	<div class="analytics">

	</div>

	<!--This is our foooter area for showcasing copyrights and information about us-->
	<footer>
		<div>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<p>Copyright &copy; BookArchive </p>
		</div>
	</footer>

	<!--This is floating button to Scroll Top-->
	<div class="backToTop">
	<button  class="Scrolltop" id="Scrolltop" onclick="topFunction()">&#x21E7</button>
	</div>
</div>
<?php
	if(isset($_SESSION['ukey'])){
		echo "<login id='session' style='visibility:hidden' value='true'>true</login>";
	}
	else{
		echo "<login id='session' style='visibility:hidden' value='false'>false</login>";

	}
?>
</body>
<script>

//This is the main Script for our main page Vidhi right function for SCroll To Top 
// All code should be inside function then we will call it
function loginCheck(){
	if(document.getElementById('session').innerHTML=="true"){
		document.getElementById('myprofile').style.display="inline";
		document.getElementById('loginbtn').style.display="none";
	}else{
		document.getElementById("loginbtn").style.display="inline";
	}
}
function startLogin(){
		document.getElementById("login").style.display="block";
}
function finishLogin(){
	document.getElementById("login").style.display="none";
}
function startSignUp(){
	if(document.getElementsByTagName('login').value=="true"){
		alert('already logged in');
	}else{
		document.getElementById("signup").style.display="block";
	}
}
function finishSignUp(){
	document.getElementById("signup").style.display="none";

}

function mSearchArchive(mSearchQuery){
	if(mSearchQuery!=''){
		var error = '';
        loaderror(error);
		loadgif(true);
		var key="isbn";
		var value="M";
		if(window.innerWidth>640){
			value = "L";
		}

		document.getElementById('results').innerHTML="";
	$.ajax({ url: "http://openlibrary.org/search.json?q="+mSearchQuery,
			type:"GET",
				success:function(mSearchQueryData){
					var mJSON = JSON.parse(mSearchQueryData);                    
					for(i=0;i<25;i++){
						try{
						if(mJSON.docs[i].hasOwnProperty('isbn'))
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].isbn[0]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul ol_readapi_book'  isbn="+mJSON.docs[i].isbn[0]+"> <img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].isbn[0]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
						else
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[2]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[2]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";

					}catch{
						document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[3]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[3]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
					}}

					for(i=25;i<50;i++){
						try{
						if(mJSON.docs[i].hasOwnProperty('isbn'))
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].isbn[0]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].isbn[0]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
						else
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[2]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[2]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";

					}catch{
						document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[3]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[3]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
					}}

					for(i=50;i<100;i++){
						try{
						if(mJSON.docs[i].hasOwnProperty('isbn'))
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].isbn[0]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].isbn[0]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
						else
							document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[2]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[2]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";

					}catch{
						document.getElementById('results').innerHTML+="<a href='./getbook/index.html?isbn="+mJSON.docs[i].text[3]+"&title="+mJSON.docs[i].title+"&author="+mJSON.docs[i].author_name+"'><div class='ul'><img src='http://covers.openlibrary.org/b/"+key+"/"+mJSON.docs[i].text[3]+"-"+value+".jpg'   ><div class='li'>Title:"+mJSON.docs[i].title+"<br>Author:"+mJSON.docs[i].author_name+"</div></div></a>";
					}}
						document.getElementById('results').innerHTML+="<h5> Total Results found:"+mJSON.numFound+"</h5>";

					},
					complete: function(){

						loadgif(false);
						
					},
					error: function (error) {
						 loaderror(error);
						}
		
			})
		}
		
}
document.getElementById("results").style.transitionDelay="2s";
document.getElementById("results").style.width="100%";

document.onload = function(){
var tag = document.createElement("script");
tag.src = "./readapi_automator.js";
document.getElementsByTagName("head")[0].appendChild(tag);
};
loginCheck();

</script>

</html>