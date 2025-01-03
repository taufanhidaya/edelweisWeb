<?php
session_start(); // Memulai sesi pengguna

// Default halaman
$page = "page/home.php";

// Memeriksa parameter 'x' untuk menentukan halaman yang dimuat
if (isset($_GET['x'])) {
    $x = $_GET['x'];

    // Routing berdasarkan parameter
    switch ($x) {
        case 'home':
            $page = "page/home.php";
            break;
        case 'kegiatan':
            $page = "page/kegiatan.php";
            break;
        case 'profil':
            $page = "page/profil.php";
            break;
        case 'upload':
            $page = "page/upload.php";
            break;
        case 'anggota':
            $page = "page/anggota.php";
            break;

        // Halaman divisi
        case 'divisi':
            if (isset($_GET['sub'])) {
                $sub = $_GET['sub'];
                switch ($sub) {
                    case 'arung_jeram':
                        $page = "page/divisi/arung_jeram.php";
                        break;
                    case 'gunung_hutan':
                        $page = "page/divisi/gunung_hutan.php";
                        break;
                    case 'konservasi':
                        $page = "page/divisi/konservasi.php";
                        break;
                    case 'panjat_tebing':
                        $page = "page/divisi/panjat_tebing.php";
                        break;
                }
            }
            break;

        // Halaman pengurus
        case 'pengurus':
            if (isset($_GET['sub'])) {
                $sub = $_GET['sub'];
                switch ($sub) {
                    case 'periode':
                        $page = "page/pengurus/periode.php";
                        break;
                    case 'struktur':
                        $page = "page/pengurus/struktur.php";
                        break;
                }
            }
            break;

        // Tambahkan routing untuk halaman login
        case 'login':
            $page = "login.php";
            break;

        default:
            $page = "page/home.php"; // Halaman default jika tidak sesuai
            break;
    }
}

// Include file template utama
include "main.php";
?>
