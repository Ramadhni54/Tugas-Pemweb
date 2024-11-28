<?php
$pageTitle = "Pembayaran Gagal";
include 'header.php';
?>

<div class="container my-5 text-center">
    <h1 class="display-4 text-danger">Pembayaran Gagal!</h1>
    <p class="lead">Pembayaran Anda tidak dapat diproses. Silakan coba lagi atau hubungi kami jika Anda mengalami kesulitan.</p>
    <a href="seminar-details.php?id=<?php echo $_GET['id']; ?>" class="btn btn-warning">Coba Lagi</a>
</div>

<?php include 'footer.php'; ?>
