<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Users</title>
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
            <li><a href="messages.php">Messages</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <div class="header-content">
                <div class="header-user">
                    <img src="../images/user.png" alt="User Image">
                    <span>admin@example.com</span>
                </div>
                <div class="header-search">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </header>
        <main>
            <h2>Users</h2>
            <div class="users-list">
                <div class="user">
                    <h3>John Doe</h3>
                    <p>Email: john.doe@example.com</p>
                </div>
                <div class="user">
                    <h3>Jane Smith</h3>
                    <p>Email: jane.smith@example.com</p>
                </div>
                <div class="user">
                    <h3>Michael Brown</h3>
                    <p>Email: michael.brown@example.com</p>
                </div>
                <div class="user">
                    <h3>Linda Johnson</h3>
                    <p>Email: linda.johnson@example.com</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
