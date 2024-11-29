<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_cookie'])) {
    setcookie("username", $_SESSION['username'], time() + (86400 * 30), "/");
    echo "<p>Cookies salvos por 30 dias!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <form method="POST">
        <button name="save_cookie" type="submit">Salvar Cookie</button>
    </form>
    <form method="GET" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</body>
</html>