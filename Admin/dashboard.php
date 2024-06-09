<?php 
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: ../user/loginRegist.php");
    exit();
}
?>

<?php include("connectDB.php")?>
<?php include("adminHeader.php")?>
            <div class="info-cards">
                <?php include("countUser.php")?>
                <?php include("countTG.php")?>
                <?php include("countMSG.php")?>
                <div class="card">
                    <h3>Users</h3>
                    <p>Total: <?= $total_users ?></p>
                </div>
                <div class="card">
                    <h3>Tour Guides</h3>
                    <p>Total: <?= $total_TG?></p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>Total: <?= $total_MSG?></p>
                </div>
            </div>
        <?php include("adminFooter.php") ?>
    </div>
</body>
</html>
