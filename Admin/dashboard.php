<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Wisata Surabaya</title>
    <link rel="stylesheet" href="../Css/admin-style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>KelanaSby</h2>
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
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <h3>Company Blog Posts</h3>
                        <p>2</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3>Blog Comments</h3>
                        <p>3</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3>Contact Messages</h3>
                        <p>4</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h3>Company Subscribers</h3>
                        <p>3</p>
                    </div>
                </div>
            </div>
            <div class="recent-comments">
                <h3>Recent Comments</h3>
                <div class="comment">
                    <p><strong>Jaden</strong> Blog Title: Ushauri Lending a hand<br>Awesome post guys!!</p>
                </div>
                <div class="comment">
                    <p><strong>Cliff</strong> Blog Title: MENTAL HEALTH IS REAL<br>I really relate to this</p>
                </div>
                <a href="comments.php" class="view-all">View All Comments</a>
            </div>
            <div class="company-2018">
                <h3>Company 2018</h3>
                <div class="post">
                    <p><strong>MENTAL HEALTH IS REAL</strong> 2018-07-27 15:28:31</p>
                </div>
                <div class="post">
                    <p><strong>Ushauri Lending a hand</strong> 2018-07-27 15:50:04</p>
                </div>
                <a href="posts.php" class="view-all">View All Posts</a>
            </div>
        </main>
    </div>
</body>
</html>
