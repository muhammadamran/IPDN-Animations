<?php include "include/head.php" ?>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<a href="http://127.0.0.1/login-animation/15/loading-page2.php" class="form-scdb" target="_blank">
				<img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png" class="lingkaran">
				<button>Go Dashboard</button>
			</a>
			</a>
		</div>
		<div class="form-container sign-in-container">
			<form action="#">
				<h1 id="demo"></h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To stay connected with us, please log in with your personal info. Click "Sign In" to enter the Superadmin & Administrator page</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Click "SCBD Dashboard" to view the SCBD Graph</p>
					<button class="ghost" id="signUp">SCDB Dashboard</button>
				</div>
			</div>
		</div>
	</div>
<?php include "include/footer.php" ?>