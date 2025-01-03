<div class="container">
    <?php
    // Koneksi ke database
    include __DIR__ . '/../../proses/connect.php'; // Pastikan path benar

    // Cek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    } else {
        echo "Koneksi berhasil! <br>";
    }

    // Query SQL
    $divisi = 'gunung_hutan';  // Divisi yang ingin ditampilkan
    $query = "SELECT id_kegiatan, media, nm_kegiatan, tgl_kegiatan, lokasi, deskripsi, youtube_url, instagram_url, tiktok_url, facebook_url 
              FROM kegiatan 
              WHERE divisi = '$divisi'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Debugging query
    if (!$result) {
        die("Query error: " . mysqli_error($conn));  // Jika query error, tampilkan pesan
    } else {
        echo "Query berhasil! <br>";
    }

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        echo '<div class="d-flex flex-wrap justify-content-start align-items-start mt-2" style="gap: 20px;">';

        // Loop untuk menampilkan data dalam bentuk card
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<pre>';
            print_r($row);  // Debugging: Tampilkan semua data row
            echo '</pre>';

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
        echo '<p>Tidak ada data untuk divisi ini.</p>';  // Jika tidak ada data
    }
    ?>
</div>
