<?php
// Logika Login - Start
session_start();
require 'koneksi.php';

// Jika sudah login, langsung tendang ke index
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cek username dan password di database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Jika data ditemukan (login benar)
    if (mysqli_num_rows($result) === 1) {
        // Set session
        $_SESSION["login"] = true;
        
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}
// Logika Login - End
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Pribadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4 text-primary">Login</h3>
            
            <?php if (isset($error)) : ?>
                <div class="alert alert-danger" role="alert">
                    Username atau password salah!
                </div>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <p>Belum punya akun? <a href="register.php" class="text-decoration-none">Daftar di sini</a></p>
            </div>
        </div>
    </div>
    </body>
</html>