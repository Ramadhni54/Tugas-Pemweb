<?php 
$pageTitle = "Home";
include 'header.php'; 
?>

<!-- Hero Section -->
<div class="jumbotron jumbotron-fluid text-center bg-dark text-white hero-section">
    <div class="container">
        <h1 class="display-4 font-weight-bold">Selamat Datang di <span class="text-warning">Visionary Event</span></h1>
        <p class="lead">Platform terbaik untuk mendapatkan sertifikasi acara, seminar, webinar, dan workshop berkualitas.</p>
        <a class="btn btn-warning btn-lg mt-4" href="tentang-kami.php" role="button">Pelajari Lebih Lanjut</a>
        <a class="btn btn-outline-light btn-lg mt-4" href="signup.php" role="button">Daftar Sekarang</a>
    </div>
</div>

<!-- Features Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Kenapa Memilih <span class="text-warning">Visionary Event</span>?</h2>
        <div class="row">
            <div class="col-md-4 text-center feature-item">
                <img src="assets/images/easy_access.svg" alt="Easy Access" class="feature-icon">
                <h4 class="mt-3">Akses Mudah</h4>
                <p>Kami menyediakan platform yang mudah digunakan untuk mendapatkan sertifikasi acara secara cepat.</p>
            </div>
            <div class="col-md-4 text-center feature-item">
                <img src="assets/images/expert_team.svg" alt="Expert Team" class="feature-icon">
                <h4 class="mt-3">Tim Profesional</h4>
                <p>Dapatkan pengalaman belajar dari para ahli di bidangnya yang siap membantu Anda.</p>
            </div>
            <div class="col-md-4 text-center feature-item">
                <img src="assets/images/trusted_partner.svg" alt="Trusted Partner" class="feature-icon">
                <h4 class="mt-3">Partner Terpercaya</h4>
                <p>Bekerja sama dengan berbagai organisasi terpercaya untuk memberikan layanan terbaik.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
