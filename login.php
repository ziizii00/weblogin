<?php
session_start();
include "koneksi.php";
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $error = "Username dan Password wajib diisi";
    } elseif (isset($users[$username]) && $users[$username] == $password) {
        $_SESSION["username"] = $username;
        $success = "Login berhasil, mengalihkan...";
        header("refresh:3;url=dashboard.php");
    } else {
        $error = "Username atau Password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Login Sistem</h2>

        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>

        <?php if ($success): ?>
            <p class="success"><?= $success ?></p>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="username" placeholder="Username">

            <div class="password-box">
                <input type="password" name="password" id="password" placeholder="Password">
                <span class="eye" onclick="togglePassword()">👁️</span>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>