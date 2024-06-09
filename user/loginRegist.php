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

<header>
    <nav aria-label="Main Navigation">
        <div class="logo">
            <a href="../user/home.php">KelanaSby</a>
        </div>
    </nav>
</header>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="registerUser.php">
                <h1>Create Account</h1>
                <span>Gunakan email Kamu untuk daftar</span>
                <input type="text" id="username" name="username" required placeholder="Username" />
                <input type="text" id="name" name="name" required placeholder="Name" />
                <input type="email" id="email" name="email" required placeholder="Email" />
                <input type="password" id="password" name="password" required placeholder="Password" />
                <input type="text" id="phone" name="phone" required placeholder="Phone" />
                <button type="submit">Sign Up</button>
            </form>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('loginForm').addEventListener('submit', function(event) {
                event.preventDefault();
                // Simulate login process
                localStorage.setItem('isLoggedIn', 'true');
                window.location.href = '../user/home.php';
            });
        });
    </script>
        </div>

        <div class="form-container sign-in-container">
            <form method="POST" action="../Admin/login.php">
                <h1>Sign in</h1>
                <span>Masukkan Akun Kamu Disini</span>
                <input type="username" name="username" required placeholder="Username" />
                <input type="password" name="password" required placeholder="Password" />
                <a href="#">Lupa Password?</a>
                <button type="submit">Sign In</button>
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
