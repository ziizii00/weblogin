<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #1f1f2e, #2a2a40);
        height: 100vh;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .card {
        background: #ffffff;
        padding: 30px;
        width: 380px;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .card h2 {
        margin-bottom: 15px;
        color: #2a2a40;
    }

    .card p {
        margin: 10px 0;
        color: #444;
    }

    .welcome {
        font-size: 16px;
    }

    hr {
        margin: 15px 0;
        border: none;
        height: 1px;
        background: #ddd;
    }

    .info-box {
        background: #f3f3f3;
        padding: 12px;
        border-radius: 8px;
        margin: 15px 0;
    }

    .active {
        color: green;
        font-weight: bold;
    }

    button {
        width: 100%;
        padding: 10px;
        background: #2a2a40;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background: #1f1f2e;
    }
    </style>

</head>
<body>

<div class="container">
    <div class="card">

        <h2>Dashboard</h2>

        <p class="welcome">
            Selamat datang, <b><?php echo $_SESSION["username"]; ?></b>
        </p>

        <hr>

        <p>Sistem Login Sederhana</p>

        <div class="info-box">
            <p>Status: <span class="active">Aktif</span></p>
            <p>Role: User</p>
        </div>

        <a href="logout.php">
            <button>Logout</button>
        </a>

    </div>
</div>

</body>
</html>