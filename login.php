<?php
session_start(); // Mulai session

// Daftar user (di dunia nyata, gunakan database dan hashing)
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3'
];

// Ambil data dari form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validasi login
if (array_key_exists($username, $users) && $users[$username] === $password) {
    // Simpan informasi login ke session
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect ke halaman daftar acara
    header("Location: daftar-acara.php");
    exit();
} else {
    // Redirect kembali ke login dengan error
    header("Location: login.php?error=Username atau Password salah");
    exit();
}
?>
