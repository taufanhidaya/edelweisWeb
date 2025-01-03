<div class="container p-4 mt-3 mb-3 text-center rounded shadow-lg"
  style="font-family: 'Varela Round', serif; font-size:1.3rem; background-color: rgba(0, 0, 0, 0.4);">
  <!-- Table Anggota -->
  <h1 style="color: #FFD700;">DAFTAR ANGGOTA</h1>
  <?php
  include "proses/connect.php";

  // Query untuk mengambil semua data anggota
  $result = mysqli_query($conn, "SELECT * FROM anggota ORDER BY no_registrasi");

  // Mengelompokkan data berdasarkan "Edelweis Pendiri" dan Angkatan lainnya
  $edelweisPendiri = [];
  $angkatan = [];

  while ($row = mysqli_fetch_assoc($result)) {
    // Jika No. Registrasi adalah "Edelweis Pendiri"
    if (strtolower($row['no_registrasi']) == "edelweis pendiri") {
      $edelweisPendiri[] = $row;
    } else {
      // Ambil angka Romawi dari no_registrasi untuk Angkatan lainnya
      if (preg_match('/\/([IVXLCDM]+)\/PNL/', $row['no_registrasi'], $match)) {
        $group = $match[1]; // Ambil angka Romawi
        $angkatan[$group][] = $row; // Tambahkan data ke array berdasarkan grup
      }
    }
  }

  // Urutkan Angkatan berdasarkan nilai desimal angka Romawi
  uksort($angkatan, function ($a, $b) {
    return roman_to_int($a) - roman_to_int($b);
  });

  // Fungsi untuk mengubah angka Romawi menjadi integer
  function roman_to_int($roman)
  {
    $romans = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000];
    $result = 0;
    $prev = 0;
    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
      $current = $romans[$roman[$i]];
      $result += ($current < $prev) ? -$current : $current;
      $prev = $current;
    }
    return $result;
  }

  // Tampilkan "Edelweis Pendiri" terlebih dahulu
  if (!empty($edelweisPendiri)) {
    echo "<h3 class='mt-4 text-uppercase text-light' style='background-color: #000000; color: #000; padding: 10px; border-radius: 5px;'>EDELWEIS PENDIRI</h3>";
    echo "<div class='table-responsive'>
            <table class='table table-hover align-middle' style='border: 1px solid #FFD700;'>
              <thead style='background-color: #FFD700; color: #000;'>
                <tr class='text-nowrap'>
                  <th scope='col'>No</th>
                  <th scope='col'>Foto</th>
                  <th scope='col'>Nama Anggota</th>
                  <th scope='col'>No. Registrasi</th>
                  <th scope='col'>Jenis Kelamin</th>
                  <th scope='col'>Jurusan</th>
                  <th scope='col'>Tahun Masuk</th>
                  <th scope='col'>Tahun Keluar</th>
                  <th scope='col'>Alamat</th>
                </tr>
              </thead>
              <tbody>";
    $no = 1; // Nomor urut
    foreach ($edelweisPendiri as $row) {
      echo "<tr>
              <td>" . $no++ . "</td>
              <td>";
      if (!empty($row['foto'])) {
        echo "<img src='../media/anggota/{$row['foto']}' alt='Foto'
                  style='width: 50px; height: 50px; object-fit: cover; border: 2px solid #FFD700;'>";
      } else {
        echo "<img src='../media/anggota/king.jpg' alt='Foto Default'
                  style='width: 50px; height: 50px; object-fit: cover; border: 2px solid #FFD700;'>";
      }
      echo "</td>
              <td class='text-start'>" . htmlentities($row['nm_anggota']) . "</td>
              <td>" . htmlentities($row['no_registrasi']) . "</td>
              <td>" . htmlentities($row['j_kelamin']) . "</td>
              <td>" . htmlentities($row['jurusan']) . "</td>
              <td>" . htmlentities($row['th_masuk']) . "</td>
              <td>" . htmlentities($row['th_keluar']) . "</td>
              <td class='text-start'>" . htmlentities($row['alamat']) . "</td>
            </tr>";
    }
    echo "</tbody></table></div>";
  }

  // Tampilkan Angkatan lainnya berdasarkan urutan
  foreach ($angkatan as $group => $data) {
    echo "<h3 class='mt-4 text-uppercase text-light' style='background-color: #000000; color: #000; padding: 10px; border-radius: 5px;'>ANGKATAN " . htmlentities($group) . "</h3>";
    echo "<div class='table-responsive'>
            <table class='table table-hover align-middle' style='border: 1px solid #FFD700;'>
              <thead style='background-color: #FFD700; color: #000;'>
                <tr class='text-nowrap'>
                  <th scope='col'>No</th>
                  <th scope='col'>Foto</th>
                  <th scope='col'>Nama Anggota</th>
                  <th scope='col'>No. Registrasi</th>
                  <th scope='col'>Jenis Kelamin</th>
                  <th scope='col'>Jurusan</th>
                  <th scope='col'>Tahun Masuk</th>
                  <th scope='col'>Tahun Keluar</th>
                  <th scope='col'>Alamat</th>
                </tr>
              </thead>
              <tbody>";
    $no = 1; // Nomor urut
    foreach ($data as $row) {
      echo "<tr>
              <td>" . $no++ . "</td>
              <td>";
      if (!empty($row['foto'])) {
        // Jika ada foto, tampilkan foto
        echo "<img src='../media/anggota/" . htmlentities($row['foto'] ?? '', ENT_QUOTES, 'UTF-8') . "' alt='Foto'
                          style='width: 50px; height: 50px; object-fit: cover; border: 2px solid #FFD700;'>";
      } else {
        // Jika tidak ada foto, gunakan foto default berdasarkan jenis kelamin
        if (strtolower($row['j_kelamin']) == "laki-laki") {
          echo "<img src='../media/anggota/King.jpg' alt='Default King'
                          style='width: 50px; height: 50px; object-fit: cover; border: 2px solid #FFD700;'>";
        } elseif (strtolower($row['j_kelamin']) == "perempuan") {
          echo "<img src='../media/anggota/Qween.jpg' alt='Default Queen'
                          style='width: 50px; height: 50px; object-fit: cover; border: 2px solid #FFD700;'>";
        }
      }
      echo "</td>
              <td class='text-start'>" . htmlentities($row['nm_anggota'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlentities($row['no_registrasi'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlentities($row['j_kelamin'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlentities($row['jurusan'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlentities($row['th_masuk'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td>" . htmlentities($row['th_keluar'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
              <td class='text-start'>" . htmlentities($row['alamat'] ?? '', ENT_QUOTES, 'UTF-8') . "</td>
            </tr>";
    }
    echo "</tbody></table></div>";
  }
  ?>
</div>
