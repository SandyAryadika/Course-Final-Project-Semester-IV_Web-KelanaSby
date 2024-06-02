<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugu Pahlawan</title>
    <link rel="stylesheet" href="../css/houseOfSampoerna-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav aria-label="Main Navigation">
        <a href="../user/home.php" class="logo">KelanaSby</a>
            <ul>
                <li><a href="#aboutus">Home</a></li>
                <li><a href="#gallery" a href="gallery">Gallery</a></li>
                <li><a href="fasilitas">Fasilitas</a></li>
                <li><a href="../user/home.php">Contact Us</a></li>
            </ul>
            <div class="auth-buttons">
            <button class="login" onclick="window.location.href='../user/loginRegist.php'">Login</button>
            <button class="signup"onclick="window.location.href='../user/loginRegist.php'">Sign Up</button>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero">
            <!-- <div class="hero-text">
                <h1>Tugu Pahlawan</h1>
                <h2>Warisan Keberanian Nasional.</h2>
                <div class="hero-buttons">
                    <button class="get-started"><a href="#aboutus">Mulai</a></button>
                </div>
            </div> -->
        </section>

        <section id="aboutus">
            <div class="container">
                <div class="container-content">
                    <div class="grid-3">
                        <h4><span>House of Sampoerna</span>&nbsp;&nbsp;&nbsp;&nbsp; Surabaya, Jawa Timur</h4><br> 
                    </div>
                    <p>House of Sampoerna merupakan museum tembakau yang didirikan pada tahun 1913 oleh Liem Seeng Tee, seorang imigran Tiongkok di Surabaya. Museum ini awalnya merupakan pabrik rokok kecil yang kemudian berkembang menjadi salah satu produsen rokok terbesar di Indonesia, Sampoerna. Pada tahun 2003, pabrik rokok ini diubah menjadi museum untuk memperingati sejarah perusahaan dan industri tembakau di Indonesia.</p>

                    <div class="grid-3">
                        <h5>Lokasi</h5>
                        <p>House of Sampoerna terletak di Jalan Taman Sampoerna No. 6, Surabaya, Jawa Timur. Lokasinya strategis dan mudah diakses oleh berbagai moda transportasi.</p>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <article id="gallery">
            <div class="gallery">
                <div class="gallery-content">
                    <div class="grid-3">
                        <h4><span>Gallery</span>&nbsp;&nbsp;&nbsp;&nbsp; Monumen Tugu Pahlawan</h4><br> 
                    </div>
                    <p>Nikmati koleksi foto House of Sampoerna dari berbagai sudut dan momen bersejarah. Lihat keindahan arsitektur dan kekayaan budaya</p>
                </div>
            </div>
            <section id="card">
            <div class="card-header">
                <div class="card-container">
                    <div class="card">
                        <img src="../Assets/Gallery_Tugu Pahlawan.jpg">
                    </div>
                    <div class="card">
                        <img src="../Assets/Gallery_Tugu Pahlawan 2.jpg">
                    </div>
                    <div class="card">
                        <img src="../Assets/Gallery_Tugu Pahlawan 3.jpg">
                    </div>
                </div>
            </div>
        </article>

        <article id>
        <div class="fasilitas">
                <div class="fasilitas-content">
                    <div class="grid-3">
                        <h4><span>Fasilitas</span>&nbsp;&nbsp;&nbsp;&nbsp; Monumen Tugu Pahlawan</h4><br> 
                    </div>
                    <p>Tugu Pahlawan di Surabaya memiliki sejumlah fasilitas yang cukup memadai, mulai dari area parkir yang luas, mushola bagi Anda yang ingin beribadah dan juga kamar mandi. Bagi Anda yang tidak membawa perbekalan sendiri, di sini juga terdapat sejumlah rumah makan yang berada di sekitar Tugu Pahlawan yang dapat Anda kunjungi. Tugu pahlawan juga memiliki taman yang luas, hijau dan asri. Di sini terdapat trotoar berkanopi yang mengelilingi area alun-alun tugu dan juga dilengkapi dengan tempat duduk yang dapat dijadikan tempat beristirahat apabila lelah setelah mengelilingi tugu.</p>

                    <div class="grid-3">
                        <h5>Jam Buka</h5>
                        <p>Tugu Pahlawan buka setiap hari, pada hari senin-jum’at buka mulai pukul 08.00-16.00 WIB sedangkan pada hari sabtu-minggu buka mulai pukul 07.00-15.00 WIB. Untuk hari lahir pancasila jam buka tugu disesuaikan.</p>
                    </div>

                    <div class="grid-3">
                        <h5>Harga Tiket</h5>
                        <p>Untuk harga tiket wisata Tugu Pahlawan sendiri tidak dipungut biaya. Namun, jika Anda ingin memasuki Museum Sepuluh Nopember Anda akan dikenakan biaya Rp 5.000 per orang.</p>
                    </div>
                </div>
            </div>
        </article>
    </main>

    <footer>
    <section id="foot">
            <div class="footer">
                <p>Pemrograman Web A081 - Kelompok 11</p>
            </div>
        </section>
    </footer>
</body>
</html>