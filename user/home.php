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
</head>
<body>
    <header>
        <nav aria-label="Main Navigation">
            <div class="logo">KelanaSby</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#tourguide">Tour Guide</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <div class="auth-buttons">
            <button class="login" onclick="window.location.href='../user/loginRegist.php'">Login</button>
            <button class="signup"onclick="window.location.href='../user/loginRegist.php'">Sign Up</button>
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
                    <button class="get-started"><a href="#aboutus">Mulai</a></button>
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
                <span class="highlight">01 &nbsp;/&nbsp; Pengalaman Tak Terlupakan Menunggu Anda</span></h2>
                <div class="card-container">
                    <div class="card">
                        <img src="../Assets/Tugu Pahlawan.jpg">
                        <div class="card-content">
                            <h4>Tugu Pahlawan</h4>
                            <p>Tugu Pahlawan di Surabaya adalah monumen ikonik yang didirikan untuk memperingati Pertempuran 10 November 1945, salah satu pertempuran paling bersejarah di Indonesia.</p>
                            <a href="../user/tuguPahlawan.php" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="../Assets/House of Sampoerna.jpg">
                        <div class="card-content">
                            <h4>House of Sampoerna</h4>
                            <p>Museum yang terletak di kompleks pabrik rokok Sampoerna. Tempat ini menampilkan sejarah industri rokok di Indonesia serta koleksi pribadi keluarga Sampoerna.</p>
                            <a href="../user/houseOfSampoerna.php" class="btn">Read More</a>
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
            <div class="slideshow-header">
                <h2>And There Are Many More</h2>
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <div class="numbertext">1 / 6</div>
                  <img src="../Assets/Patung Surabaya.png" style="width:100%" a href="" class="btn">
                  <div class="text">Patung Suro dan Boyo</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">2 / 6</div>
                  <img src="../Assets/10 November.jpg" style="width:100%">
                  <div class="text">Museum 10 November</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">3 / 6</div>
                  <img src="../Assets/Pakuwon.jpg" style="width:100%">
                  <div class="text">Food Junction Grand Pakuwon</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">4 / 6</div>
                  <img src="../Assets/Kebun Binatang.png" style="width:100%">
                  <div class="text">Kebun Binatang Surabaya</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">5 / 6</div>
                  <img src="../Assets/Patung Budha 4 Rupa.png" style="width:100%">
                  <div class="text">Patung Budha 4 Rupa</div>
                </div>

                <div class="mySlides fade">
                  <div class="numbertext">6 / 6</div>
                  <img src="../Assets/Bambu.png" style="width:100%">
                  <div class="text">Bambu Keputih</div>
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
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
            </div>
        </section>

        <section id="tourguide">
            <div class="tourguide-header">
                <h2>Tour Guide
                    <span class="highlight">02 &nbsp;/&nbsp; Melangkah di Surabaya, Menyusuri Jejak Sejarah</span>
                </h2>
                <div class="tourguide-surabaya">
                    <div class="card-photo">
                        <img src="../Assets/yuk milla.jpg" alt="Yuk Milla" width="90%">
                    </div>
                    <div class="card-keterangan">
                        <h3>Yuk Milla</h3>
                        <p><strong>Gender:</strong> Perempuan</p>
                        <p><strong>Umur:</strong> 28 tahun</p>
                        <p><strong>Jam Terbang:</strong> 5 tahun pengalaman sebagai tour guide profesional</p>
                        <p><strong>Bahasa:</strong> Bahasa Indonesia, Bahasa Inggris</p>
                        <div class="card-ratings">
                            <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐ (4.8/5)</p>
                            <p><strong>Sewa:</strong> Rp 500.000 / hari</p>
                            <p><strong>Harga:</strong> Rp 300.000 / tur</p>
                        </div>
                        <button class="contact-button">Contact</button>
                    </div>
                </div>
                <div class="tourguide-surabaya">
                    <div class="card-photo">
                        <img src="../Assets/andi suheb.jpg" alt="Yuk Milla" width="90%">
                    </div>
                    <div class="card-keterangan">
                        <h3>Andi Suheb</h3>
                        <p><strong>Gender:</strong> Laki-Laki</p>
                        <p><strong>Umur:</strong> 31 tahun</p>
                        <p><strong>Jam Terbang:</strong> 8 tahun pengalaman sebagai tour guide profesional</p>
                        <p><strong>Bahasa:</strong> Bahasa Indonesia, Bahasa Inggris</p>
                        <div class="card-ratings">
                            <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐ (5/5)</p>
                            <p><strong>Sewa:</strong> Rp 800.000 / hari</p>
                            <p><strong>Harga:</strong> Rp 400.000 / tur</p>
                        </div>
                        <button class="contact-button">Contact</button>
                    </div>
                </div>
                <div class="tourguide-surabaya">
                    <div class="card-photo">
                        <img src="../Assets/yanto.jpg" alt="Yuk Milla" width="90%">
                    </div>
                    <div class="card-keterangan">
                        <h3>Yanto Galon</h3>
                        <p><strong>Gender:</strong> Laki-Laki</p>
                        <p><strong>Umur:</strong> 25 tahun</p>
                        <p><strong>Jam Terbang:</strong> 3 tahun pengalaman sebagai tour guide profesional</p>
                        <p><strong>Bahasa:</strong> Bahasa Indonesia, Bahasa Inggris</p>
                        <div class="card-ratings">
                            <p><strong>Rating:</strong> ⭐⭐⭐⭐☆ (4/5)</p>
                            <p><strong>Sewa:</strong> Rp 300.000 / hari</p>
                            <p><strong>Harga:</strong> Rp 100.000 / tur</p>
                        </div>
                        <button class="contact-button">Contact</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="contact">
                <div class="contact-section">
                    <h3>Contact Us
                    <span class="highlight">03 &nbsp;/&nbsp; Jalan Pintas ke Jawaban, Hubungi Sekarang!</span></h3>
                    <div class="contact-wrapper">
                        <div class="contact-form">
                            <h4>Send us a message</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Yuor Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="name" placeholder="Yuor Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                        <div class="contact-info">
                            <h4>Contact Information</h4>
                            <p><img src="../Assets/call.svg">+622635678233</p>
                            <p><img src="../Assets/mail.svg">punyakelompok11@outlook.com</p>
                            <p><img src="../Assets/location.svg">UPN Veteran Jawa Timur</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
    <section id="foot">
            <div class="footer">
                <p>Pemrograman Web A081 - Kelompok 11</p>
            </div>
        </section>
    </footer>
    <script src="../js/home-script.js"></script>
</body>
</html>
