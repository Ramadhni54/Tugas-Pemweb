<?php
session_start();

$users_file = 'users.json';
$users = [];

if (file_exists($users_file)) {
    $users = json_decode(file_get_contents($users_file), true);
}

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($name) || empty($email) || empty($password)) {
    header("Location: signup.php?error=Semua field wajib diisi");
    exit();
}

if (isset($users[$email])) {
    header("Location: signup.php?error=Email sudah terdaftar");
    exit();
}

$users[$email] = [
    'name' => $name,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

file_put_contents($users_file, json_encode($users));
header("Location: signup.php?success=Akun berhasil dibuat, silakan login.");
exit();
?>
