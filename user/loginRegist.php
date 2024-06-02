<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginRegist-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <title>Form Login/Register</title>
</head>
<body>
    <div class="container" id="container">
    	<div class="form-container sign-up-container">
    		<form action="#">
    			<h1>Create Account</h1>
    			<span>Gunakan email Kamu untuk daftar</span>
				<input type="username" placeholder="Username" />
    			<input type="text" placeholder="Name" />
    			<input type="email" placeholder="Email" />
    			<input type="password" placeholder="Password" />
				<input type="phone" placeholder="Phone" />
    			<button>Sign Up</button>
    		</form>
    	</div>
    	<div class="form-container sign-in-container">
    		<form action="#">
    			<h1>Sign in</h1>
    			<span>Masukkan Akun Kamu Disini</span>
    			<input type="email" placeholder="Email" />
    			<input type="password" placeholder="Password" />
    			<a href="#">Lupa Password?</a>
    			<button>Sign In</button>
    		</form>
    	</div>
    	<div class="overlay-container">
    		<div class="overlay">
    			<div class="overlay-panel overlay-left">
    				<h1>Balek Lagi!</h1>
    				<p>Untuk tetap terhubung dengan kami, silakan login dengan informasi pribadi Kamu</p>
    				<button class="ghost" id="signIn">Sign In</button>
    			</div>
    			<div class="overlay-panel overlay-right">
    				<h1>Hello, Rek!</h1>
    				    <p>Masukkan data pribadi kamu dan mulailah perjalanan bersama kita!</p>
    				<button class="ghost" id="signUp">Sign Up</button>
    			</div>
    		</div>
    	</div>
    </div>
    <script src="../js/loginRegist-script.js"></script>
</body>
</html>