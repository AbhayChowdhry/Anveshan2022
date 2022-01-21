<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="icon" href="bee.png">
  <link rel="stylesheet" href="login.css">
  
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
</head>

<body>
  <!-- <main id="main-holder">
    <!-- <h1 id="login-header">Login to Buddy United</h1> -->
    
    <!-- <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid Email </p>
    </div> --> -->
    
    <!-- <form id="login-form">
      <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Name">
      <input type="text" name="Email" id="Email-id-field" class="login-form-field" placeholder="Email-id">
      <input type="text" name="Year" id="Year-field" class="login-form-field" placeholder="Year">
      <input type="submit" value="Login" id="login-form-submit">
    </form>
  
  </main> -->
  
  <div class="login-reg-panel">
      
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Buddy United</h2>
			<p>Make new friends based on what sport you like.</p>
			<!--<label id="label-login" for="log-login-show">Register</label>-->
			<!--<input type="radio" name="active-log-panel" id="log-login-show">-->
		</div>
							
		<div class="white-panel">
            <h1>LOGIN</h1>
            <form id="login-form" method="get" action="./dashboard.php">
                <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Name">
                <input type="text" name="Email" id="Email-id-field" class="login-form-field" placeholder="Email-id">
                <input type="text" name="Year" id="Year-field" class="login-form-field" placeholder="Year">
                <input type="submit" value="Login" id="login-form-submit">
            </form>
			<!-- <div class="login-show">
				<h2>LOGIN</h2>
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="button" value="Login">
				<a href="">Forgot password?</a>
			</div> -->
			<!-- <div class="register-show">
				<h2>REGISTER</h2>
				<input type="text" placeholder="Email">
				<input type="password" placeholder="Password">
				<input type="password" placeholder="Confirm Password">
				<input type="button" value="Register">
			</div> -->
		</div>
	</div>
    <!-- <div id="login-error-msg-holder">
      <p id="login-error-msg">Invalid Email </p>
    </div> --> -->
    <!-- </main> -->
</body>

</html>

