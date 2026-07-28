
<?php
// dashboard.php
include 'includes/cek_session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Warung ABC</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['suraiya_salsabila_azzahra']; ?>!</h1>
    <p>Anda login sebagai: <?php echo $_SESSION['role']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>