<nav class="navbar navbar-expand-lg navbar-light border-bottom sticky-top">
    <div class="container">
        <!-- Logo di Kiri -->
        <a href="index.php?x=home" class="navbar-brand d-flex align-items-center">
            <img src="assets/img/logo ed new.png" height="42" />
            <span class="text-light fs-2">Edelweis</span>
        </a>

        <!-- Tombol Toggle untuk Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fs-3"></span>
        </button>

        <!-- Konten Navbar -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <!-- Item Navbar di Tengah -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="home">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="profil" id="navbarDropdownKegiatan"
                        role="button" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="#sejarah">Sejarah</a></li>
                        <li><a class="dropdown-item text-light" href="#visi-misi">Visi & Misi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="kegiatan" id="navbarDropdownKegiatan"
                        role="button" aria-expanded="false">
                        Kegiatan
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="index.php?x=divisi&sub=gunung_hutan">Gunung
                                Hutan</a></li>
                        <li><a class="dropdown-item text-light" href="index.php?x=divisi&sub=panjat_tebing">Panjat
                                Tebing</a></li>
                        <li><a class="dropdown-item text-light" href="index.php?x=divisi&sub=arung_jeram">Arung
                                Jeram</a></li>
                        <li><a class="dropdown-item text-light" href="index.php?x=divisi&sub=konservasi">Konservasi
                                Sumber Daya
                                Alam</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="anggota">Anggota</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownPengurus" role="button"
                        aria-expanded="false">
                        Pengurus
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="index.php?x=pengurus&sub=struktur">Struktur
                                Pengurus</a></li>
                        <li><a class="dropdown-item text-light" href="index.php?x=pengurus&sub=periode">Periode
                                Pengurus</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Item Navbar di Kanan -->
            <div class="d-flex align-items-center">
                <!-- Dropdown Upload -->
                <div class="dropdown me-3">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownUpload" role="button"
                        data-bs-toggle="dropdown" aria-expanded="true" data-bs-auto-close="outside">
                        Upload
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                                data-bs-target="#dataAnggotaModal">Data Anggota</a></li>
                        <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                                data-bs-target="#dataPengurusModal">Data Pengurus</a></li>
                        <li><a class="dropdown-item text-light" href="#" data-bs-toggle="modal"
                                data-bs-target="#dataKegiatanModal">Data Kegiatan</a></li>
                    </ul>
                </div>

                <!-- Dropdown Profil -->
                <div class="dropdown">
                    <div class="profile-circle">
                        <img src="assets/img/profil.jpeg" alt="Profil" class="w-100 h-100">
                    </div>
                    <ul class="dropdown-menu dropdown-menu-center bg-dark">
                        <li><a class="dropdown-item text-light" href="#"><i class="bi bi-person-circle"></i> Profil
                                Saya</a></li>
                        <li><a class="dropdown-item text-light" href="#"><i class="bi bi-gear"></i> Pengaturan</a></li>
                        <li><a class="dropdown-item text-light" href="index.php?x=login"><i
                                    class="bi bi-box-arrow-in-left"></i>
                                Login</a></li>
                        <li><a class="dropdown-item text-light" href="proses/OAuth/logout.php"><i
                                    class="bi bi-box-arrow-right"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Upload Data Anggota -->
    <div class="modal fade" id="dataAnggotaModal" tabindex="-1" data-bs-backdrop="false"
        aria-labelledby="dataAnggotaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-md-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="uploadModalLabel">Upload Data Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses/tambah_anggota.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- Kolom Foto -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="foto" id="floatingFoto"
                                        accept="image/*">
                                    <label for="floatingFoto">Foto</label>
                                </div>
                            </div>

                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <!-- Nama Anggota -->
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="nm_anggota" id="floatingName"
                                        placeholder="" required>
                                    <label for="floatingName">Nama Anggota</label>
                                </div>

                                <!-- Tahun Masuk -->
                                <div class="form-floating-custom mb-3">
                                    <input type="number" class="form-control" name="th_masuk" id="floatingThMasuk"
                                        placeholder="">
                                    <label for="floatingThMasuk">Tahun Masuk</label>
                                </div>

                                <!-- Jurusan -->
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="jurusan" id="floatingJurusan" required>
                                        <option value="" disabled selected>Pilih Jurusan</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Kimia">Teknik Kimia</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Teknologi Informasi dan Komputer">Teknologi Informasi dan
                                            Komputer</option>
                                        <option value="Bisnis">Bisnis</option>
                                        <option value="-">-</option>
                                    </select>
                                    <label for="floatingJurusan">Jurusan</label>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <!-- Tahun Keluar -->
                                <div class="form-floating-custom mb-3">
                                    <input type="number" class="form-control" name="th_keluar" id="floatingThKeluar"
                                        placeholder="">
                                    <label for="floatingThKeluar">Tahun Keluar</label>
                                </div>

                                <!-- No. Registrasi -->
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="no_registrasi" id="floatingNoreg"
                                        placeholder="" required>
                                    <label for="floatingNoreg">No. Registrasi</label>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="j_kelamin" id="floatingGender" required>
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="floatingGender">Jenis Kelamin</label>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="col-12">
                                <div class="form-floating text-dark">
                                    <textarea class="form-control" name="alamat" id="floatingAlamat"
                                        placeholder="Masukkan Alamat" style="height: 100px;" required></textarea>
                                    <label for="floatingAlamat">Alamat</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- Tombol Upload di dalam form -->
                            <button type="submit" class="btn btn-primary" name="input_anggota_validate"
                                value="12345">Upload</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload Data Pengurus -->
    <div class="modal fade" id="dataPengurusModal" tabindex="-1" data-bs-backdrop="false"
        aria-labelledby="dataPengurusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="dataPengurusModalLabel">Upload Data Pengurus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses/tambah_pengurus.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- Kolom Foto -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="media" id="floatingMedia"
                                        accept="image/*">
                                    <label for="floatingMedia">Media</label>
                                </div>
                            </div>

                            <!-- Kolom Kiri -->
                            <div class="col-6">
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="nm_pengurus" id="floatingName"
                                        placeholder="" required>
                                    <label for="floatingName">Nama Pengurus</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- No. Registrasi -->
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="no_registrasi"
                                        id="floatingNoregistrasi" placeholder="" required>
                                    <label for="floatingNoregistrasi">No. Registrasi</label>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <!-- Jabatan -->
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="jabatan" id="floatingJabatan"
                                        placeholder="" required>
                                    <label for="floatingJabatan">Jabatan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Periode -->
                                <div class="form-floating-custom mb-3">
                                    <input type="text" class="form-control" name="period" id="floatingPeriod"
                                        placeholder="" required>
                                    <label for="floatingPeriod">Periode</label>
                                </div>
                            </div>

                            <!-- Bidang (Departemen, tidak wajib diisi) -->
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <select class="form-control" name="bidang" id="floatingBidang">
                                        <option value="" disabled selected hidden>Pilih Departemen</option>
                                        <option value="Humas">Humas</option>
                                        <option value="Perlengkapan">Perlengkapan</option>
                                        <option value="Diklat">Diklat</option>
                                        <option value="Infokom">Infokom</option>
                                    </select>
                                    <label for="floatingBidang">Departemen</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary" name="input_pengurus_validate">Upload</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload Data Kegiatan -->
    <div class="modal fade" id="dataKegiatanModal" tabindex="-1" data-bs-backdrop="false"
        aria-labelledby="dataKegiatanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="dataKegiatanModalLabel">Upload Data Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="proses/tambah_kegiatan.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <!-- Kolom Media -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="media" id="floatingMedia"
                                        accept="image/*">
                                    <label for="floatingMedia">Media</label>
                                </div>
                            </div>

                            <!-- Kolom Kiri -->
                            <div class="col-md-6">
                                <!-- Nama Kegiatan -->
                                <div class="form-floating text-dark mb-3">
                                    <input type="text" class="form-control" name="nm_kegiatan" id="floatingNamaKegiatan"
                                        placeholder="" required>
                                    <label for="floatingNamaKegiatan">Nama Kegiatan</label>
                                </div>

                                <!-- Nama Pengurus -->
                                <div class="form-floating text-dark mb-3">
                                    <input type="text" class="form-control" name="nm_pengurus" id="floatingNamaPengurus"
                                        placeholder="" required>
                                    <label for="floatingNamaPengurus">Nama Pengurus</label>
                                </div>

                                <!-- Tanggal Kegiatan -->
                                <div class="form-floating text-dark mb-3">
                                    <input type="date" class="form-control" name="tgl_kegiatan"
                                        id="floatingTanggalKegiatan" placeholder="">
                                    <label for="floatingTanggalKegiatan">Tanggal Kegiatan</label>
                                </div>

                                <!-- Lokasi -->
                                <div class="form-floating text-dark mb-3">
                                    <input type="text" class="form-control" name="lokasi" id="floatingLokasi"
                                        placeholder="">
                                    <label for="floatingLokasi">Lokasi</label>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="col-md-6">
                                <!-- Divisi -->
                                <div class="form-floating text-dark mb-3">
                                    <select class="form-select" name="divisi" id="floatingDivisi">
                                        <option value="" selected hidden>-- Pilih Divisi --</option>
                                        <option value="konservasi">Konservasi Sumber Daya Alam</option>
                                        <option value="arung_jeram">Arung Jeram</option>
                                        <option value="gunung_utan">Gunung Hutan</option>
                                        <option value="panjang_tebing">Panjang Tebing</option>
                                    </select>
                                    <label for="floatingDivisi">Divisi</label>
                                </div>

                                <!-- Deskripsi -->
                                <div class="form-floating text-dark mb-3">
                                    <textarea class="form-control" name="deskripsi" id="floatingDeskripsi"
                                        placeholder="" style="height: 100px;"></textarea>
                                    <label for="floatingDeskripsi">Deskripsi</label>
                                </div>

                                <!-- URL Sosial Media -->
                                <div class="form-floating-custom mb-3">
                                    <input type="url" class="form-control" name="youtube_url" id="floatingYoutubeUrl"
                                        placeholder="">
                                    <label for="floatingYoutubeUrl"><i class="bi bi-youtube text-danger"></i>
                                        YouTube</label>
                                </div>
                                <div class="form-floating-custom mb-3">
                                    <input type="url" class="form-control" name="instagram_url"
                                        id="floatingInstagramUrl" placeholder="">
                                    <label for="floatingInstagramUrl"><i class="bi bi-instagram text-danger"></i>
                                        Instagram</label>
                                </div>
                                <div class="form-floating-custom mb-3">
                                    <input type="url" class="form-control" name="tiktok_url" id="floatingTiktokUrl"
                                        placeholder="">
                                    <label for="floatingTiktokUrl"><i class="bi bi-tiktok text-dark"></i> TikTok</label>
                                </div>
                                <div class="form-floating-custom mb-3">
                                    <input type="url" class="form-control" name="facebook_url" id="floatingFacebookUrl"
                                        placeholder="">
                                    <label for="floatingFacebookUrl"><i class="bi bi-facebook text-primary"></i>
                                        Facebook</label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="input_kegiatan_validate">Upload</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- Akhir modal Upload -->
</nav>