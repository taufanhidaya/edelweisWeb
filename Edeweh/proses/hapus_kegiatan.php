<?php
include 'connect.php'; // Pastikan file koneksi database sudah benar

// Periksa apakah parameter 'id' dikirim melalui URL
if (isset($_GET['id'])) {
    $id_kegiatan = intval($_GET['id']); // Pastikan nilai id berupa integer untuk keamanan

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM kegiatan WHERE id_kegiatan = $id_kegiatan";

    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        // Redirect ke halaman kegiatan setelah berhasil menghapus
        header("Location: ../page/kegiatan.php");
        exit; // Pastikan proses dihentikan setelah redirect
    } else {
        // Menampilkan pesan error jika query gagal
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }

    // Tutup koneksi database
    mysqli_close($conn);
} else {
    // Jika parameter ID tidak ditemukan, tampilkan pesan error
    echo "ID kegiatan tidak ditemukan.";
}
?>