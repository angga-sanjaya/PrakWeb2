<?php
// Logika Register - Start
require 'koneksi.php';

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Sengaja tidak di-hash agar sederhana untuk tugas

    // Menyimpan data ke database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}
// Logika Register - End
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Web Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4 text-primary">Daftar Akun</h3>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">Daftar</button>
            </form>

            <div class="text-center mt-3">
                <p>Sudah punya akun? <a href="login.php" class="text-decoration-none">Login di sini</a></p>
            </div>
        </div>
    </div>
</body>

</html>