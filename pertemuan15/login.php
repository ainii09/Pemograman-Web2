<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .login-container {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang</h2>
        <!-- cek pesan notifikasi -->
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<p style='color: red;'>Login gagal! Username dan password salah!</p>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<p style='color: green;'>Anda telah berhasil logout</p>";
            } else if ($_GET['pesan'] == "belum_login") {
                echo "<p style='color: red;'>Anda harus login untuk mengakses halaman admin</p>";
            } else {
                echo "<p style='color: green;'>Anda berhasil logout, silahkan login kembali</p>";
            }
        }
        ?>
        <form method="post" action="cek_login.php">
            <input type="text" name="username" placeholder="Masukkan username"><br>
            <input type="password" name="password" placeholder="Masukkan password"><br>
            <input type="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>