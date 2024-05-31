<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="../js/admin-script.js"></script>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2>KelanaSby</h2>
            <p>Admin</p>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="dropdown">
                <a href="users.php">Users</a>
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