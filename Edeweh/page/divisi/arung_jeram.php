<div class="container">
    <?php
    include 'proses/connect.php'; // Pastikan path benar
    
    $divisi = 'arung_jeram'; // Nama divisi sesuai halaman
    $query = "SELECT id_kegiatan, media, nm_kegiatan, tgl_kegiatan, lokasi, deskripsi, youtube_url, instagram_url, tiktok_url, facebook_url 
          FROM kegiatan 
          WHERE divisi = '$divisi'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<div class="d-flex flex-wrap justify-content-start align-items-start mt-2" style="gap: 20px;">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
        <div class="card" style="width: 18rem; border: 1px solid #ddd; border-radius: 5px; overflow: hidden;">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal' . $row['id_kegiatan'] . '">
                <img src="../../media/kegiatan/' . htmlspecialchars($row['media']) . '" alt="Media Kegiatan"
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
        </div>';
        }
        echo '</div>';
    } else {
        echo '<p>Tidak ada data untuk divisi ini.</p>';
    }
    ?>
</div>