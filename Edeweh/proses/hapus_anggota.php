<?php
include 'connect.php';

$id = $_GET['id_anggota'];
$sql = "DELETE FROM anggota WHERE id_anggota = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
if ($stmt->execute()) {
    echo '<script>alert("Anggota berhasil dihapus."); window.location.href="../anggota";</script>';
} else {
    echo '<script>alert("Gagal menghapus anggota."); window.location.href="../anggota";</script>';
}
$stmt->close();
$conn->close();
?>
