<?php 
$pageTitle = "Seminar Mendatang";
include 'header.php'; 
?>

<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary">Seminar Mendatang</h1>
        <p class="lead">Jelajahi daftar seminar mendatang dan daftar untuk ikut serta!</p>
    </div>

    <!-- Daftar Seminar -->
    <div class="row">
        <?php
        // Data seminar (bisa diambil dari database atau array)
        $seminars = [
            ["title" => "Seminar Teknologi AI", "date" => "20 Desember 2024", "location" => "Jakarta", "image" => "assets/images/ai_seminar.jpg", "id" => 1],
            ["title" => "Workshop Pengembangan Web", "date" => "15 Januari 2025", "location" => "Surabaya", "image" => "assets/images/web_workshop.jpg", "id" => 2],
            ["title" => "Webinar Keamanan Siber", "date" => "10 Februari 2025", "location" => "Online", "image" => "assets/images/cyber_webinar.jpg", "id" => 3],
        ];

        // Loop untuk menampilkan seminar
        foreach ($seminars as $seminar) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="' . $seminar["image"] . '" class="card-img-top" alt="' . $seminar["title"] . '">
                    <div class="card-body">
                        <h5 class="card-title text-primary">' . $seminar["title"] . '</h5>
                        <p class="card-text"><strong>Tanggal:</strong> ' . $seminar["date"] . '</p>
                        <p class="card-text"><strong>Lokasi:</strong> ' . $seminar["location"] . '</p>
                        <a href="seminar-details.php?id=' . $seminar["id"] . '" class="btn btn-primary btn-block">Detail</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
