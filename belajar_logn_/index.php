<?php
session_start();
if (!isset($_SESSION['auth_id'])) {
    header("Location: http://{$_SERVER['HTTP_HOST']}/login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Selamat Datang User dengan ID <?= $_SESSION['auth_id'] ?></h1>
    <br>
    <a href="/logout.php">Log Out</a>
</body>

</html>