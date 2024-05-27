<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <script defer src="../js/admin-script.js"></script>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>COMPANY</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#">Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Users</a>
                <ul class="dropdown-menu">
                    <li><a href="#">View Users</a></li>
                    <li><a href="#">Add/Edit User</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Tour Guides</a>
                <ul class="dropdown-menu">
                    <li><a href="#">View Tour Guides</a></li>
                    <li><a href="#">Add/Edit Tour Guide</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Tourist Attractions</a>
                <ul class="dropdown-menu">
                    <li><a href="#">View Attractions</a></li>
                    <li><a href="#">Add/Edit Attraction</a></li>
                </ul>
            </li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Subscribers</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Account</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
            <li><a href="#">Log Out</a></li>
        </ul>
    </aside>
    <div class="main-content">
        <header>
            <button id="sidebarToggle">Toggle Sidebar</button>
            <h1>Dashboard</h1>
            <input type="search" placeholder="Search...">
        </header>
        <main>
            <div class="info-cards">
                <div class="card">
                    <h3>Users</h3>
                    <p>Total: 100</p>
                    <p>New: 5</p>
                </div>
                <div class="card">
                    <h3>Tour Guides</h3>
                    <p>Total: 20</p>
                    <p>New: 2</p>
                </div>
                <div class="card">
                    <h3>Tourist Attractions</h3>
                    <p>Total: 50</p>
                    <p>New: 3</p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>New: 10</p>
                </div>
                <div class="card">
                    <h3>Subscribers</h3>
                    <p>Total: 300</p>
                </div>
            </div>
        </main>
        <footer>
            <p>&copy; 2023 COMPANY Admin</p>
        </footer>
    </div>
</body>
</html>
