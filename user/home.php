<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>COMPANY</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#">Dashboard</a></li>
            <li>
                <a href="#">Users</a>
                <ul>
                    <li><a href="#">View Users</a></li>
                    <li><a href="#">Add/Edit User</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Tour Guides</a>
                <ul>
                    <li><a href="#">View Tour Guides</a></li>
                    <li><a href="#">Add/Edit Tour Guide</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Tourist Attractions</a>
                <ul>
                    <li><a href="#">View Attractions</a></li>
                    <li><a href="#">Add/Edit Attraction</a></li>
                </ul>
            </li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Subscribers</a></li>
            <li>
                <a href="#">Account</a>
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
            <li><a href="#">Log Out</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
            <input type="search" placeholder="Search...">
        </header>
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
    </div>
</body>
</html>
