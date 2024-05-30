<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tripshare</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <header>
        <nav aria-label="Main Navigation">
            <div class="logo">KelanaSby</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#tourguide">Tour Guide</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <button class="login">Login</button>
                <button class="signup">Sign Up</button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-text">
                <h1>Liburan lebih baik</h1>
                <h2>Ayo Jelajahi Surabaya.</h2>
                <p>Temukan tempat yang menyenangkan dan lebih baik untuk mulai menjelajah Surabaya selain sekarang.</p>
                <p>Liburan lebih mudah.</p>
                <div class="hero-buttons">
                    <button class="get-started">Mulai</button>
                    <button class="learn-more">Pelajari Lebih Lanjut</button>
                </div>
            </div>
        </section>

        <section id="aboutus">
            <div class="container">
                <div class="container-content">
                    <div class="grid-2">
                        <h4><span>Surabaya</span>&nbsp;&nbsp;&nbsp;&nbsp; Jawa Timur, Indonesia</h4><br> 
                    </div>
                    <p>Surabaya seperti permata tersembunyi yang menunggu untuk diungkap. Dengan setiap eksplorasi, kota ini mengungkapkan pesonanya yang unik dan semangat yang bersemangat. 
                    Berkelana melalui Kawasan Arab historisnya, labirin jalan sempit yang memikat yang dipenuhi dengan kehidupan dan budaya. Surabaya juga membanggakan salah satu Chinatown terbesar dan paling ramai di Indonesia, di mana tradisi dan modernitas menyatu dengan mulus. 
                    Di antara harta karunnya adalah bangunan kolonial Belanda yang menua, namun memikat, yang bisikkan kisah-kisah masa lalu. Berikan waktu Anda kepada Surabaya, dan ia akan memberi Anda perjalanan yang tak terlupakan melalui lanskapnya yang eklektik dan memikat.</p>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="card-header">
            <h2>Most Popular Attractions 
                <span class="highlight">Pengalaman Tak Terlupakan Menunggu Anda</span></h2>
                <div class="card-container">
                    <div class="card">
                        <img src="../Assets/Tugu Pahlawan.jpg">
                        <div class="card-content">
                            <h4>Tugu Pahlawan</h4>
                            <p>Tugu Pahlawan di Surabaya adalah monumen ikonik yang didirikan untuk memperingati Pertempuran 10 November 1945, salah satu pertempuran paling bersejarah di Indonesia.</p>
                            <a href="" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Assets/House of Sampoerna.jpg">
                        <div class="card-content">
                            <h4>House of Sampoerna</h4>
                            <p>Museum yang terletak di kompleks pabrik rokok Sampoerna. Tempat ini menampilkan sejarah industri rokok di Indonesia serta koleksi pribadi keluarga Sampoerna.</p>
                            <a href="" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Assets/Kapal Selam.jpg">
                        <div class="card-content">
                            <h4>Kapal Selam</h4>
                            <p>Sebuah kapal selam yang telah dipensiunkan dan dijadikan museum. Kapal selam ini, KRI Pasopati 410, adalah bagian dari armada Angkatan Laut Indonesia.</p>
                            <a href="" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery-carousel">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="../Assets/PatungSuraBaya.webp" style="width:100%">
                  <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="../Assets/Tugu Pahlawan.jpg" style="width:100%">
                  <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="../Assets/Tugu Pahlawan.jpg" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
    </main>
    <script src="../javascript/script.js"></script>
</body>
</html>
