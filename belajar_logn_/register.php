<?php
require_once "koneksi.php";

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Ambil nilai dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query SQL untuk menyimpan data registrasi ke dalam tabel pengguna
    $sql = "INSERT INTO users (username, password) VALUES ('$username',  '$password')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); echo "Registrasi berhasil untuk username: $username";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Register">
        <a href="/login.php">kembali</a>
        
    </form>

</body>
</html>