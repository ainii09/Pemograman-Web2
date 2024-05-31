<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    .message {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    .logout-button {
        display: block;
        width: 100px;
        margin: 0 auto;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .logout-button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Hallo</h2>
    <!-- Notification message -->
    <?php
    if(isset($_GET['pesan'])) {
        if($_GET['pesan'] == "gagal") {
            echo "<div class='message' style='color: red;'>Login failed! Incorrect username or password!</div>";
        } elseif($_GET['pesan'] == "logout") {
            echo "<div class='message' style='color: green;'>You have successfully logged out</div>";
        } elseif($_GET['pesan'] == "belum_login") {
            echo "<div class='message' style='color: red;'>You must login to access the admin page</div>";
        }
    }
    ?>
    <h3>Selamat Datang di halaman Dashboard</h3>
    <!-- Logout button -->
    <a href="logout.php" class="logout-button">Logout</a>
</div>
</body>
</html>