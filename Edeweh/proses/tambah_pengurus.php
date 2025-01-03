<?php
// Koneksi ke database
include 'connect.php'; 

// Periksa apakah form telah disubmit
if (isset($_POST['input_pengurus_validate'])) {

    // Ambil data dari form
    $nm_pengurus = htmlspecialchars($_POST['nm_pengurus']);
    $no_registrasi = htmlspecialchars($_POST['no_registrasi']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    $period = htmlspecialchars($_POST['period']);
    $bidang = isset($_POST['bidang']) ? htmlspecialchars($_POST['bidang']) : null; // Bidang tidak wajib diisi

    // Proses file upload jika ada
    $media = $_FILES['media'];
    $media_name = $media['name'];
    $media_tmp_name = $media['tmp_name'];
    $media_error = $media['error'];
    $media_size = $media['size'];

    // Tentukan folder tujuan upload
    $upload_dir = '../media/pengurus/'; // Sesuaikan dengan struktur folder Anda

    // Validasi file upload
    if (!empty($media_name)) { // Jika file diunggah
        if ($media_error === 0) {
            if ($media_size <= 524288000) { // Maksimal 500MB
                $media_ext = pathinfo($media_name, PATHINFO_EXTENSION);
                $media_ext_lc = strtolower($media_ext);

                $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];

                if (in_array($media_ext_lc, $allowed_exts)) {
                    $new_media_name = uniqid('media_', true) . '.' . $media_ext_lc;
                    $media_upload_path = $upload_dir . $new_media_name;

                    // Pindahkan file ke folder tujuan
                    if (!move_uploaded_file($media_tmp_name, $media_upload_path)) {
                        echo "<script>alert('Gagal mengunggah file media.'); window.history.back();</script>";
                        exit;
                    }
                } else {
                    echo "<script>alert('File harus berupa gambar (JPG, JPEG, PNG, GIF).'); window.history.back();</script>";
                    exit;
                }
            } else {
                echo "<script>alert('Ukuran file terlalu besar. Maksimal 500MB.'); window.history.back();</script>";
                exit;
            }
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengunggah file.'); window.history.back();</script>";
            exit;
        }
    } else {
        $new_media_name = null; // Jika tidak ada file yang diunggah
    }

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO pengurus (nm_pengurus, no_registrasi, jabatan, period, bidang, media) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ssssss", $nm_pengurus, $no_registrasi, $jabatan, $period, $bidang, $new_media_name);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo '<script>alert("Data berhasil dimasukkan."); window.location="../struktur";</script>';
        } else {
            echo "<script>alert('Gagal menambahkan data pengurus! Periksa kembali input Anda.'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Terjadi kesalahan pada query database.'); window.history.back();</script>";
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "<script>alert('Akses tidak diizinkan.'); window.history.back();</script>";
}
?>
