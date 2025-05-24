<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="icon" type="image/png" href="favicoN.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="stylr.css">
  
</head>
<body>
    <div class="container" id="container">
	<div class="form-container sign-up-container" >
		<form method="post" action="register.php">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fa-brands fa-x-twitter"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="Name" id="name" placeholder="Name" />
			<input type="email" name="email" id="email" placeholder="Email" />
			<input type="password" name="password" id="password" placeholder="Password" />
			<button type="submit" value="Sign Up" name="SignUp">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container" >
		<form method="post" action="register.php">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fa-brands fa-x-twitter"></i></a>
 				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" name="email" id="email" placeholder="Email" />
			<input type="password" name="password" id="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button  type="submit" value="Sign In" name="SignIn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<style>
body {
	background-image: url('background.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	min-height: 100vh;
	margin: 0;
	padding: 0;
}
</style>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});
</script>
<?php
echo "<p>Copyright &copy; " . date('2025') . " Aniket Paul </p>";
?>
</body>
</html>
</html></div>