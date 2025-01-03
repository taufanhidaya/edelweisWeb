
<div class="container mt-3 mb-3">
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/edelweis flow.jpg" style="height: 600px; object-fit: cover;" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/daisy flow.jpg" style="height: 300px; object-fit: cover;" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/sun flow.jpg" style="height: 300px; object-fit: cover;" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Kegiatan Section -->
    <?php
    // Validasi file koneksi
    if (!file_exists('proses/connect.php')) {
        die("File koneksi tidak ditemukan. Pastikan file connect.php ada di folder proses.");
    }
    include 'proses/connect.php';

    // Validasi koneksi
    if (!$conn) {
        die("Koneksi database gagal.");
    }

    // Query untuk halaman kegiatan
    $query = "SELECT id_kegiatan, media, nm_kegiatan, tgl_kegiatan, lokasi, deskripsi 
              FROM kegiatan 
              WHERE Divisi IS NULL OR Divisi = ''";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        echo '<div class="d-flex flex-wrap justify-content-start align-items-start mt-2" style="gap: 20px;">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
        <div class="card" style="width: 18rem; border: 1px solid #ddd; border-radius: 5px; overflow: hidden;">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal' . htmlspecialchars($row['id_kegiatan']) . '">
                <img src="media/kegiatan/' . htmlspecialchars($row['media']) . '" alt="Media Kegiatan"
                     style="width: 100%; height: 10rem; object-fit: cover; object-position: center;">
            </a>
            <div class="card-body" style="padding: 10px;">
                <h5 class="card-title text-center" style="font-size: 1rem; font-weight: bold; margin-bottom: 5px;">' . htmlspecialchars($row['nm_kegiatan']) . '</h5>
                <p class="card-text" style="font-size: 0.85rem; color: #555; margin-bottom: 5px;">
                    <i class="bi bi-calendar-event"></i> ' . htmlspecialchars($row['tgl_kegiatan']) . '
                </p>
                <p class="card-text" style="font-size: 0.85rem; color: #555;">
                    <i class="bi bi-geo-alt"></i> ' . htmlspecialchars($row['lokasi']) . '
                </p>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal' . htmlspecialchars($row['id_kegiatan']) . '" tabindex="-1" aria-labelledby="modalLabel' . htmlspecialchars($row['id_kegiatan']) . '" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="modalLabel' . htmlspecialchars($row['id_kegiatan']) . '">' . htmlspecialchars($row['nm_kegiatan']) . '</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <div class="image-container" style="flex: 1; max-width: 40%; padding-right: 20px;">
                            <img src="media/kegiatan/' . htmlspecialchars($row['media']) . '" alt="Media Kegiatan"
                                 style="width: 100%; height: auto; object-fit: cover; object-position: center;">
                        </div>
                        <div class="details" style="flex: 2;">
                            <p class="text-dark"><strong>Deskripsi:</strong> ' . htmlspecialchars($row['deskripsi']) . '</p>
                            <p class="text-dark"><strong>Tanggal:</strong> ' . htmlspecialchars($row['tgl_kegiatan']) . '</p>
                            <p class="text-dark"><strong>Lokasi:</strong> ' . htmlspecialchars($row['lokasi']) . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        echo '</div>';
    } else {
        echo '<p>Tidak ada data yang sesuai.</p>';
    }
    ?>
</div>
