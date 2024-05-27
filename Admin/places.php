<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Places</title>
    <link rel="stylesheet" href="../Css/admin-style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>COMPANY</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="places.php">Wisata</a></li>
            <li><a href="tourGuide.php">Tour Guide</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <div class="header-content">
                <div class="header-user">
                    <img src="images/user.png" alt="User Image">
                    <span>admin@example.com</span>
                </div>
                <div class="header-search">
                    <input type="text" placeholder="Search..." id="place-search">
                </div>
            </div>
        </header>
        <main>
            <h2>Wisata di Surabaya</h2>
            <div class="responsive-table">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody id="places-table">
                        <tr>
                            <td>1</td>
                            <td>Tugu Pahlawan</td>
                            <td>Monumen yang menjadi landmark Kota Surabaya.</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kebun Binatang Surabaya</td>
                            <td>Salah satu kebun binatang tertua di Indonesia.</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>House of Sampoerna</td>
                            <td>Museum sejarah yang menampilkan koleksi rokok dan benda antik.</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Jembatan Suramadu</td>
                            <td>Jembatan yang menghubungkan Surabaya dan Madura.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script src="js/place-search.js"></script>
</body>
</html>
