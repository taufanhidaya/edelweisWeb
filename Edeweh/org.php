<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --line-color: #ffffff;
        }
        
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #004d1a, #003300);
            padding: 2rem;
        }

        .org-chart {
            padding: 20px;
        }

        .level {
            display: flex;
            justify-content: center;
            position: relative;
            padding: 20px 0;
        }

        /* Lines */
        .vertical-line {
            position: absolute;
            width: 2px;
            background: var(--line-color);
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .horizontal-line {
            position: absolute;
            height: 2px;
            background: var(--line-color);
            z-index: 1;
        }

        /* Top vertical line */
        .top-line {
            top: 0;
            height: 30px;
        }

        /* First horizontal line */
        .first-level-line {
            width: 50%;
            left: 25%;
            top: 30px;
        }

        /* Second horizontal line */
        .second-level-line {
            width: 80%;
            left: 10%;
            top: 30px;
        }

        /* Department vertical lines */
        .dept-line {
            top: -30px;
            height: 30px;
        }

        /* Card styling */
        .org-card {
            background: white;
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
            width: 180px;
            margin: 0 15px;
        }

        .org-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        .org-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .org-card h5 {
            font-size: 14px;
            color: #006622;
            margin-bottom: 5px;
        }

        .org-card p {
            font-size: 12px;
            color: #666;
            margin: 0;
        }

        /* Staff container */
        .staff-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            position: relative;
        }

        .staff-container::before {
            content: '';
            position: absolute;
            top: -30px;
            left: 50%;
            width: 2px;
            height: 30px;
            background: var(--line-color);
        }

        /* Secretary section specific */
        .secretary-section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .secretary-line {
            width: 2px;
            height: 30px;
            background: var(--line-color);
            margin: 10px 0;
        }

        /* Department section */
        .department-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .org-card {
                width: 160px;
                padding: 10px;
            }

            .org-card img {
                width: 50px;
                height: 50px;
            }
        }

        @media (max-width: 768px) {
            .level {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .horizontal-line {
                display: none;
            }

            .department-section {
                margin: 20px 0;
            }
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container-fluid org-chart">
        <!-- Leader Level -->
        <div class="level">
            <div class="org-card" data-aos="fade-down">
                <img src="/api/placeholder/60/60" alt="Ketua Umum">
                <h5>M.Deka Arya Putra</h5>
                <p>Ketua Umum</p>
            </div>
            <div class="vertical-line top-line"></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
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
</body>
</html>