<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['input_anggota_validate']) && $_POST['input_anggota_validate'] === "12345") {
    // Ambil data dari form
    $no_registrasi = isset($_POST['no_registrasi']) ? htmlentities($_POST['no_registrasi']) : "";
    $nm_anggota = isset($_POST['nm_anggota']) ? htmlentities($_POST['nm_anggota']) : "";
    $th_masuk = isset($_POST['th_masuk']) && !empty($_POST['th_masuk']) ? htmlentities($_POST['th_masuk']) : NULL;
    $th_keluar = isset($_POST['th_keluar']) && !empty($_POST['th_keluar']) ? htmlentities($_POST['th_keluar']) : NULL;
    $jurusan = isset($_POST['jurusan']) ? htmlentities($_POST['jurusan']) : "";
    $j_kelamin = isset($_POST['j_kelamin']) ? htmlentities($_POST['j_kelamin']) : "";
    $alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : "";

    // Inisialisasi variabel foto
    $foto = NULL;
    $statusUpload = 1; // Status upload awal
    $message = ""; // Pesan error atau informasi

    // Jika foto diupload
    if (!empty($_FILES['foto']['name'])) {
        // Proses upload foto
        $kode_rand = rand(10000, 99999) . "-";
        $target_dir = "../media/anggota/";
        $target_file = $target_dir . $kode_rand . basename($_FILES["foto"]["name"]);
        $imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validasi file
        $cek = getimagesize($_FILES['foto']['tmp_name']);
        if ($cek === false) {
            $message = "Ini bukan file gambar.";
            $statusUpload = 0;
        } elseif (file_exists($target_file)) {
            $message = "Maaf, file yang dimasukkan sudah ada.";
            $statusUpload = 0;
        } elseif ($_FILES['foto']['size'] > 5000000) {  // Batas ukuran 5MB
            $message = 'File foto yang diupload terlalu besar.';
            $statusUpload = 0;
        } elseif (!in_array($imageType, array("jpg", "jpeg", "png", "gif"))) {
            $message = "Hanya format JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
            $statusUpload = 0;
        }

        if ($statusUpload == 0) {
            echo '<script>alert("' . $message . ' Gambar tidak dapat diupload."); window.location="../anggota";</script>';
        } else {
            // Jika file valid, upload foto
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $foto = $kode_rand . $_FILES["foto"]["name"];
            } else {
                echo '<script>alert("Maaf, terjadi kesalahan. File tidak dapat diupload."); window.location="../anggota";</script>';
            }
        }
    }

    // Cek apakah nomor registrasi sudah ada, kecuali untuk "Edelweis Pendiri"
    if (strtolower($no_registrasi) !== "edelweis pendiri") {
        $select_reg = mysqli_prepare($conn, "SELECT * FROM anggota WHERE no_registrasi = ?");
        mysqli_stmt_bind_param($select_reg, "s", $no_registrasi);
        mysqli_stmt_execute($select_reg);
        mysqli_stmt_store_result($select_reg);

        if (mysqli_stmt_num_rows($select_reg) > 0) {
            echo '<script>alert("Nomor registrasi yang dimasukkan sudah ada."); window.location="../anggota";</script>';
            mysqli_stmt_close($select_reg);
            exit;
        }
        mysqli_stmt_close($select_reg);
    }

    // Cek apakah nama anggota sudah ada
    $select = mysqli_prepare($conn, "SELECT * FROM anggota WHERE nm_anggota = ?");
    mysqli_stmt_bind_param($select, "s", $nm_anggota);
    mysqli_stmt_execute($select);
    mysqli_stmt_store_result($select);

    if (mysqli_stmt_num_rows($select) > 0) {
        echo '<script>alert("Nama anggota yang dimasukkan sudah ada."); window.location="../anggota";</script>';
    } else {
        // Masukkan data ke database
        $query = mysqli_prepare($conn, "INSERT INTO anggota (no_registrasi, foto, nm_anggota, th_masuk, jurusan, th_keluar, j_kelamin, alamat)
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($query, "ssssssss", $no_registrasi, $foto, $nm_anggota, $th_masuk, $jurusan, $th_keluar, $j_kelamin, $alamat);

        // Eksekusi query
        if (mysqli_stmt_execute($query)) {
            echo '<script>alert("Data berhasil dimasukkan."); window.location="../anggota";</script>';
        } else {
            echo '<script>alert("Data gagal dimasukkan: ' . mysqli_error($conn) . '"); window.location="../anggota";</script>';
        }
    }
    mysqli_stmt_close($select);
} else {
    echo '<script>alert("Permintaan tidak valid!"); window.location="../anggota";</script>';
}
?>
