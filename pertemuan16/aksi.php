<?php
// Static variabel
$user = 'admin';
$pass = md5('admin'); // Perlu diperhatikan bahwa md5 tidak lagi dianggap aman untuk hashing password

// Memulai session
session_start();

// Tampung data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek login
if ($username == $user && md5($password) == $pass) {
    // Set session
    $_SESSION['login'] = TRUE;

    // Cek remember me
    if (isset($_POST['remember'])) {
        // Set waktu saat ini
        $time = time();
        // Set cookie
        setcookie('login', $user, $time + 3600);
    }

    // Redirect ke halaman utama
    header('Location: ./home.php');
    exit();
} else {
    header('Location: ./login.php');
}
?>