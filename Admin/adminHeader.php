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
                <a href="tourGuide.php" class="dropdown-toggle">Tour Guides</a>
            </li>
            <li><a href="pesan_masuk.php">Messages</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </aside>
    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
        </header>
        <main>