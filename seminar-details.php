<?php
$pageTitle = "Detail Seminar";
include 'header.php'; 

// Periksa apakah parameter 'id' ada di URL
if(isset($_GET['id'])) {
    $seminarId = $_GET['id'];
} else {
    // Jika tidak ada 'id', redirect kembali ke halaman daftar seminar
    header("Location: seminar-list.php");
    exit();
}

// Data seminar (contoh, sebaiknya ambil dari database)
$seminars = [
    1 => ["title" => "Seminar Teknologi AI", "date" => "20 Desember 2024", "location" => "Jakarta", "purpose" => "Memahami tren terbaru dalam AI dan implementasinya dalam industri.", "image" => "assets/images/ai_seminar.jpg"],
    2 => ["title" => "Workshop Pengembangan Web", "date" => "15 Januari 2025", "location" => "Surabaya", "purpose" => "Belajar mengembangkan aplikasi web menggunakan framework modern.", "image" => "assets/images/web_workshop.jpg"],
    3 => ["title" => "Webinar Keamanan Siber", "date" => "10 Februari 2025", "location" => "Online", "purpose" => "Meningkatkan pemahaman tentang pentingnya keamanan siber dalam kehidupan sehari-hari.", "image" => "assets/images/cyber_webinar.jpg"],
];

// Ambil data seminar yang sesuai dengan ID
if (isset($seminars[$seminarId])) {
    $seminar = $seminars[$seminarId];
} else {
    // Jika seminar tidak ditemukan, tampilkan pesan error
    echo "Seminar tidak ditemukan!";
    exit();
}
?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary"><?php echo $seminar['title']; ?></h1>
        <p class="lead"><?php echo $seminar['purpose']; ?></p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo $seminar['image']; ?>" class="img-fluid" alt="<?php echo $seminar['title']; ?>">
        </div>
        <div class="col-md-6">
            <p><strong>Tanggal:</strong> <?php echo $seminar['date']; ?></p>
            <p><strong>Lokasi:</strong> <?php echo $seminar['location']; ?></p>

            <!-- Formulir pendaftaran seminar dan pembayaran -->
            <h4 class="mt-4">Daftar dan Lakukan Pembayaran Seminar</h4>
            <form action="process_registration.php" method="POST" id="registrationForm">

                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>

                <!-- Informasi Pembayaran -->
                <h5 class="mt-4">Informasi Pembayaran</h5>
                <p><strong>Biaya Seminar:</strong> Rp 500.000,-</p>
                <p>Silakan pilih metode pembayaran:</p>
                <div class="form-group">
                    <label for="payment_method">Metode Pembayaran</label>
                    <select class="form-control" id="payment_method" name="payment_method" required>
                        <option value="">Pilih Pembayaran</option>
                        <option value="dana">Dana</option>
                        <option value="mandiri">Bank Mandiri</option>
                    </select>
                </div>

                <!-- Nomor Rekening Berdasarkan Pembayaran -->
                <div id="bankDetails" style="display: none;">
                    <div class="form-group">
                        <label for="bank_account">Nomor Rekening Bank Mandiri</label>
                        <input type="text" class="form-control" id="bank_account" name="bank_account" value="123-456-7890" readonly>
                    </div>
                </div>

                <div id="danaDetails" style="display: none;">
                    <div class="form-group">
                        <label for="dana_account">Nomor Rekening Dana</label>
                        <input type="text" class="form-control" id="dana_account" name="dana_account" value="0812-3456-7890" readonly>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Daftar dan Bayar</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script>
    // Menampilkan informasi rekening berdasarkan pilihan pembayaran
    document.getElementById('payment_method').addEventListener('change', function () {
        var paymentMethod = this.value;
        
        // Menyembunyikan semua detail rekening sebelumnya
        document.getElementById('bankDetails').style.display = 'none';
        document.getElementById('danaDetails').style.display = 'none';

        // Menampilkan detail rekening sesuai pilihan
        if (paymentMethod === 'mandiri') {
            document.getElementById('bankDetails').style.display = 'block';
        } else if (paymentMethod === 'dana') {
            document.getElementById('danaDetails').style.display = 'block';
        }
    });
</script>
