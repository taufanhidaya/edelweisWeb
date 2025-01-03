<div class="container p-4 mt-3 mb-3 text-center rounded shadow-lg"
    style="font-family: 'Playfair Display', serif; font-size:1.5rem; background-color: rgba(0, 0, 0, 0.3);">

    <header>
        <div class="p mb-4 rounded">
                <div class="carousel">
                    <img src="assets/img/sun flow.jpg" style="height: 600px; object-fit: cover;" class="d-block w-100" >
                </div>
            </div>
    </header>


    <section id="visi-misi">
        <div class="card-header bg-secondary rounded mt-3 text-center mb-3 fs-2 fw-bold">
            VISI & MISI
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-center gap-2" style="font-size: 1.2rem;">
            <div class="col-6 bg-transparant">
                <h3>VISI</h3>
                <p>Memberikan pemahaman anggota tentang keorganisasian.
                    Membina pribadi anggota untuk mengenal alam serta memupuk jiwa cinta tanah air.
                    Mengembangkan potensi kreatif keilmuan dan budaya mahasiswa.
                    Melakukan konservasi lingkungan dan sumber daya alam.
                    Memperjuangkan kelestarian alam dan social masyarakat.</p>
            </div>

            <div class="col-6 bg-transparant rounded-shadow">
                <h3>MISI</h3>
                <p>UKM-PA <span style="font-family: 'Brush Script MT', cursive; font-size: 2rem;">Edelweis</span>
                    berfungsi sebagai wadah pembinaan Mahasiswa berwatak
                    kreatif, dinamis, cinta kepada Tuhan, berbakti kepada Almamater, serta ikut bertanggung
                    jawab atas terlaksananya Tri Dharma Perguruan Tinggi.</p>
            </div>
        </div>
    </section>

    <section id="sejarah">
        <div class="card-header bg-secondary rounded mt-5 text-center mb-3 fs-2 fw-bold">
            SEJARAH
        </div>
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; text-align: center; ">
            <div style="max-width: 800px;">
                <!-- Judul -->
                <h3
                    style="font-size: 2rem; margin-bottom: 20px; text-transform: uppercase; font-family: 'Playfair Display', serif;">
                    DUA PULUH SATU JULI “98”
                </h3>

                <!-- Konten paragraf -->
                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Dua puluh satu Juli 1998,<br>
                    Kami, Mapala <span style="font-family: 'Brush Script MT', cursive; font-size: 2rem;">Edelweis</span>
                    lahir
                    sebagai<br>
                    Kelompok Pecinta Alam<br>
                    di bawah bendera Politeknik Negeri Lhokseumawe.
                </p>

                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Kami mengharapkan keberadaan kami diakui<br>
                    sebagai kelompok Pecinta Alam yang memiliki<br>
                    rasa tanggung jawab yang besar untuk menjaga<br>
                    dan melestarikan kelestarian alam di Aceh khususnya,<br>
                    dan di Bumi Pertiwi umumnya.
                </p>

                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Teramat jauh jalan kami lalui,<br>
                    begitu besar tantangan yang kami hadapi, tetapi<br>
                    tetap semua itu sebagai tanggung jawab<br>
                    yang harus kami emban.
                </p>

                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Kami menyadari bahwa begitu kecilnya<br>
                    kami di hadapan Sang Pencipta,<br>
                    dan kita semua adalah ciptaan-Nya.<br>
                    Maka dari itu, tidak pernah terfikir oleh kami<br>
                    untuk menaklukkan alam.
                </p>

                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Tebing yang terjal, jurang yang dalam,<br>
                    gunung yang tinggi menjulang,<br>
                    liang gua yang gelap dan jurang yang liar<br>
                    menanti kami.
                </p>

                <p style="margin: 10px 0; line-height: 1.8; font-size: 1.2rem; font-family: 'Playfair Display', serif;">
                    Semoga Sang Khalik merestui langkah kecil<br>
                    yang akan kami ukir di persada ini.
                </p>
            </div>
    </section>
</div>


<script>
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            // Hitung tinggi navbar
            const navbarHeight = document.querySelector('.navbar').offsetHeight;

            // Scroll ke elemen dengan memperhitungkan tinggi navbar
            window.scrollTo({
                top: targetElement.offsetTop - navbarHeight - 10,
                behavior: 'smooth',
            });
        });
    });
</script>