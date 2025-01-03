<?php
// Pastikan koneksi ke database
include 'connect.php';

if (isset($_POST['input_kegiatan_validate'])) {
    // Ambil data dari form
    $media = $_FILES['media'];
    $nm_kegiatan = $_POST['nm_kegiatan'];
    $nm_pengurus = $_POST['nm_pengurus'];
    $tgl_kegiatan = $_POST['tgl_kegiatan'];
    $lokasi = $_POST['lokasi'];
    $divisi = $_POST['divisi']; // Bisa kosong
    $deskripsi = $_POST['deskripsi'];
    $youtube_url = $_POST['youtube_url'];
    $instagram_url = $_POST['instagram_url'];
    $tiktok_url = $_POST['tiktok_url'];
    $facebook_url = $_POST['facebook_url'];

    // Proses upload media
    $target_dir = "../media/kegiatan/";
    $media_name = basename($media['name']);
    $target_file = $target_dir . $media_name;

    if (move_uploaded_file($media['tmp_name'], $target_file)) {
        // Simpan data ke database
        $sql = "INSERT INTO kegiatan (media, nm_kegiatan, nm_pengurus, tgl_kegiatan, lokasi, divisi, deskripsi, youtube_url, instagram_url, tiktok_url, facebook_url) 
                VALUES ('$media_name', '$nm_kegiatan', '$nm_pengurus', '$tgl_kegiatan', '$lokasi', '$divisi', '$deskripsi', '$youtube_url', '$instagram_url', '$tiktok_url', '$facebook_url')";
        
        if (mysqli_query($conn, $sql)) {
            // Redirect berdasarkan divisi
            if (!empty($divisi)) {
                // Jika divisi diisi, redirect ke halaman divisi
                $divisi_slug = strtolower(str_replace(' ', '_', $divisi));
                header("Location: ../page/divisi/$divisi_slug.php");
            } else {
                // Jika divisi tidak diisi, redirect ke halaman kegiatan
                header("Location: ../page/kegiatan.php");
            }
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading media.";
    }
}
?>
