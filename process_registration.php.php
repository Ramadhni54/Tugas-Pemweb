<?php
// Mengambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$payment_method = $_POST['payment_method'];
$bank_account = isset($_POST['bank_account']) ? $_POST['bank_account'] : null;
$dana_account = isset($_POST['dana_account']) ? $_POST['dana_account'] : null;

// Validasi dan pengecekan pembayaran
$isPaymentValid = false;

if ($payment_method === 'mandiri' && $bank_account === '123-456-7890') {
    $isPaymentValid = true; // Pembayaran Bank Mandiri valid
} elseif ($payment_method === 'dana' && $dana_account === '0812-3456-7890') {
    $isPaymentValid = true; // Pembayaran menggunakan Dana valid
}

// Simulasi penyimpanan data pendaftaran (misalnya di database)
// Di sini Anda bisa memasukkan data pengguna ke dalam database atau CSV
if ($isPaymentValid) {
    // Jika pembayaran berhasil, arahkan ke halaman sukses
    header("Location: payment_success.php");
    exit();
} else {
    // Jika pembayaran gagal, arahkan ke halaman gagal
    header("Location: payment_failed.php");
    exit();
}
?>
