<?php
// Koneksi database
include 'proses/connect.php';

// Fungsi untuk menentukan kunci array
function tentukanKunci($jabatan, $bidang) {
  if (empty($bidang)) {
    return $jabatan; // Jika bidang kosong, gunakan jabatan
  }
  if ($jabatan == 'anggota' || $jabatan == 'ketua') {
    return $bidang; // Jika jabatan anggota/ketua, gunakan bidang
  }
  return $jabatan; // Default gunakan jabatan
}

// Query untuk mengambil data pengurus
$query = "SELECT nm_pengurus, jabatan, bidang, media FROM pengurus";
$result = $conn->query($query);

// Array untuk menyimpan data pengurus berdasarkan kondisi
$data_pengurus = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $kunci = tentukanKunci($row['jabatan'], $row['bidang']);
    $data_pengurus[$kunci] = [
      'nama' => htmlspecialchars($row['nm_pengurus']),
      'foto' => !empty($row['media']) ? "media/pengurus/" . htmlspecialchars($row['media']) : "assets/img/profil.jpeg"
    ];
  }
}
?>

<!-- Struktur Organisasi -->

    <div class="container-fluid org-chart">
        <!-- Leader Level -->
        <div class="level">
            <div class="org-card" data-aos="fade-down">
                <img src="/api/placeholder/60/60" alt="Ketua Umum">
                <h5>M.Deka Arya Putra</h5>
                <p>Ketua Umum</p>
            </div>
            <div class="vertical-line bottom-line"></div>
        </div>

        <!-- First Level - Bendahara & Sekretaris -->
        <div class="level">
            <div class="horizontal-line first-level-line"></div>
            <div class="org-card" data-aos="fade-right">
                <img src="/api/placeholder/60/60" alt="Bendahara">
                <h5>Mulia Putri</h5>
                <p>Bendahara Umum</p>
            </div>
            <div class="secretary-section">
                <div class="org-card" data-aos="fade-left">
                    <img src="/api/placeholder/60/60" alt="Sekretaris">
                    <h5>Isly Neyskha Iskandar</h5>
                    <p>Sekretaris Umum</p>
                </div>
                <div class="secretary-line"></div>
                <div class="org-card">
                    <img src="/api/placeholder/60/60" alt="Kesekretariatan">
                    <h5>Miftahul Jannah Putri</h5>
                    <p>Kesekretariatan</p>
                </div>
            </div>
        </div>

        <!-- Departments Level -->
        <div class="level">
            <div class="horizontal-line second-level-line"></div>
            
            <!-- Perlengkapan -->
            <div class="department-section">
                <div class="vertical-line dept-line"></div>
                <div class="org-card" data-aos="fade-up">
                    <img src="/api/placeholder/60/60" alt="Perlengkapan">
                    <h5>Ryandi</h5>
                    <p>Perlengkapan</p>
                </div>
                <div class="staff-container">
                    <div class="org-card"><h5>Haryadi</h5></div>
                    <div class="org-card"><h5>Ikram</h5></div>
                    <div class="org-card"><h5>Andika Dwi Pratama</h5></div>
                </div>
            </div>

            <!-- Infokom -->
            <div class="department-section">
                <div class="vertical-line dept-line"></div>
                <div class="org-card" data-aos="fade-up">
                    <img src="/api/placeholder/60/60" alt="Infokom">
                    <h5>M.Alief Dafarillah</h5>
                    <p>Infokom</p>
                </div>
                <div class="staff-container">
                    <div class="org-card"><h5>M.Taufan Hidayat</h5></div>
                    <div class="org-card"><h5>Nuria Fahira</h5></div>
                    <div class="org-card"><h5>Ulfa Mahera</h5></div>
                </div>
            </div>

            <!-- Diktat -->
            <div class="department-section">
                <div class="vertical-line dept-line"></div>
                <div class="org-card" data-aos="fade-up">
                    <img src="/api/placeholder/60/60" alt="Diktat">
                    <h5>Ilham Alkautsar</h5>
                    <p>Diktat</p>
                </div>
                <div class="staff-container">
                    <div class="org-card"><h5>Nadila Auliya</h5></div>
                    <div class="org-card"><h5>Rahmad Hidayat</h5></div>
                    <div class="org-card"><h5>Cut Fidya Maulina</h5></div>
                    <div class="org-card"><h5>Razheky Nazico Khasahab</h5></div>
                    <div class="org-card"><h5>Naila Zahira</h5></div>
                </div>
            </div>

            <!-- Humas -->
            <div class="department-section">
                <div class="vertical-line dept-line"></div>
                <div class="org-card" data-aos="fade-up">
                    <img src="/api/placeholder/60/60" alt="Humas">
                    <h5>Zacky Aulia Zulham</h5>
                    <p>Humas</p>
                </div>
                <div class="staff-container">
                    <div class="org-card"><h5>Aldi Alfarisyi</h5></div>
                    <div class="org-card"><h5>Maria Ulfa</h5></div>
                    <div class="org-card"><h5>Ramadhana</h5></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.org-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });

            cards.forEach(card => {
                observer.observe(card);
            });

            // Hover effect for cards
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-5px)';
                    card.style.boxShadow = '0 5px 15px rgba(0,0,0,0.3)';
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = 'none';
                });
            });
        });
    </script>