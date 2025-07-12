<!-- Hero Section -->
<h1>coba dev</h1>
<section id="hero" class="d-flex align-items-center">
    <!-- batas 3 gambar -->
    <?php foreach ($slides as $s) : ?>
        <div class="slide" style="background-image: url('<?= $s->url ?>');"></div>
    <?php endforeach; ?>
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8 col-md-10">
                <div class="hero-content text-white">
                    <h1 style="color: #fff;" class="display-4 fw-bold mb-4 animate__animated animate__fadeIn ">Genteng Tanah Liat Berkualitas untuk Atap Rumah Anda</h1>
                    <p class="lead mb-5">Diproduksi dengan keahlian tradisional dan teknologi modern untuk menghasilkan genteng yang tahan lama, indah, dan ramah lingkungan.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="#contact" class="btn btn-primary btn-lg scroll-link">
                            Hubungi Kami <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#products" class="btn btn-outline-light btn-lg scroll-link">Lihat Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Tentang Kami</h2>
            <div class="section-divider"></div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <div class="about-image-container position-relative">
                    <img src="<?= $tentang ?>" alt="Proses pembuatan genteng tanah liat" class="img-fluid rounded shadow">
                    <div class="about-accent-box d-none d-lg-block"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <h3 class="mb-4">Keahlian Tradisional, Kualitas Modern</h3>
                <p class="text-muted mb-4">
                    Sejak 1985, UMKM Percetakan Genteng Tanah Liat kami telah memproduksi genteng berkualitas tinggi dengan menggabungkan keahlian tradisional dan teknologi modern. Kami memilih tanah liat terbaik dari daerah kami untuk menghasilkan genteng yang tahan lama dan indah.
                </p>
                <p class="text-muted mb-4">
                    Setiap genteng dibuat dengan perhatian khusus terhadap detail, memastikan bahwa produk kami tidak hanya fungsional tetapi juga estetis. Kami bangga dengan warisan kerajinan kami dan komitmen kami terhadap keberlanjutan.
                </p>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="stat-card p-4 rounded shadow-sm">
                            <h4 class="fw-bold">35+</h4>
                            <p class="mb-0">Tahun Pengalaman</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="stat-card p-4 rounded shadow-sm">
                            <h4 class="fw-bold">1000+</h4>
                            <p class="mb-0">Proyek Selesai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Produk Kami</h2>
            <div class="section-divider"></div>
            <p class="text-muted">Berbagai pilihan genteng tanah liat berkualitas tinggi untuk kebutuhan atap rumah Anda</p>
        </div>

        <!-- Desktop/Tablet Products Grid -->
        <div class="row g-4 d-none d-md-flex">
            <?php foreach ($genteng as $g) : ?>
                <!-- <div class="col-md-6 col-lg-4">
                    <div class="product-card card h-100 border-0 shadow-sm">
                        <div class="product-img-container">
                            <img src="<?= $g->foto ?>" class="card-img-top" alt="<?= $g->nama ?>">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title"><?= htmlspecialchars($g->nama, ENT_QUOTES, 'UTF-8') ?></h5>
                            <p class="card-text text-muted"><?= htmlspecialchars($g->deskripsi, ENT_QUOTES, 'UTF-8') ?>.</p>
                            <?php if ($g->po == 1): ?>
                                <span class="badge bg-danger po-product">Pre Order Required</span>
                            <?php endif; ?>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4">
                    <div class="product-card card h-100 border-0 shadow-sm">
                        <div class="product-img-container">
                            <img src="<?= $g->foto ?>" class="card-img-top" alt="<?= $g->nama ?>">
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title me-2"><?= htmlspecialchars($g->nama, ENT_QUOTES, 'UTF-8') ?></h5>
                                <?php if ($g->po): ?>
                                    <span class="badge bg-danger po-product">Pemesanan</span>
                                <?php endif; ?>
                            </div>
                            <p class="card-text text-muted"><?= htmlspecialchars($g->deskripsi, ENT_QUOTES, 'UTF-8') ?>.</p>
                            <!-- <a href="#" class="product-link">Lihat Detail</a> -->
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

        <!-- Mobile Products Carousel -->
        <div id="productCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($genteng as $g) : ?>
                    <div class="carousel-item active">
                        <div class="product-card card border-0 shadow-sm mx-2">
                            <div class="product-img-container">
                                <img src="<?= $g->foto ?>" class="card-img-top" alt="<?= $g->nama ?>">
                            </div>
                            <div class="card-body p-4">
                                <!-- <h5 class="card-title"><?= $g->nama ?></h5> -->
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title me-2"><?= htmlspecialchars($g->nama, ENT_QUOTES, 'UTF-8') ?></h5>
                                    <?php if ($g->po): ?>
                                        <span class="badge bg-danger po-product">Pemesanan</span>
                                    <?php endif; ?>
                                </div>
                                <p class="card-text text-muted"><?= $g->deskripsi ?>.</p>
                                <!-- <a href="#" class="product-link">Lihat Detail</a> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <!-- <div class="carousel-item">
                    <div class="product-card card border-0 shadow-sm mx-2">
                        <div class="product-img-container">
                            <img src="https://placehold.co/400x300" class="card-img-top" alt="Genteng Lengkung Klasik">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Genteng Lengkung Klasik</h5>
                            <p class="card-text text-muted">Model tradisional dengan lengkungan elegan, memberikan tampilan klasik pada bangunan.</p>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="product-card card border-0 shadow-sm mx-2">
                        <div class="product-img-container">
                            <img src="https://placehold.co/400x300" class="card-img-top" alt="Genteng Romawi">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Genteng Romawi</h5>
                            <p class="card-text text-muted">Terinspirasi dari arsitektur Romawi kuno, kuat dan tahan terhadap cuaca ekstrem.</p>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="product-card card border-0 shadow-sm mx-2">
                        <div class="product-img-container">
                            <img src="https://placehold.co/400x300" class="card-img-top" alt="Genteng Minimalis">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Genteng Minimalis</h5>
                            <p class="card-text text-muted">Desain sederhana namun elegan, cocok untuk rumah bergaya minimalis modern.</p>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="product-card card border-0 shadow-sm mx-2">
                        <div class="product-img-container">
                            <img src="https://placehold.co/400x300" class="card-img-top" alt="Genteng Mediterania">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Genteng Mediterania</h5>
                            <p class="card-text text-muted">Gaya mediterania yang hangat dengan warna-warna alami tanah liat.</p>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="product-card card border-0 shadow-sm mx-2">
                        <div class="product-img-container">
                            <img src="https://placehold.co/400x300" class="card-img-top" alt="Genteng Eksotis">
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title">Genteng Eksotis</h5>
                            <p class="card-text text-muted">Desain unik dengan tekstur khusus, memberikan karakter pada atap rumah Anda.</p>
                            <a href="#" class="product-link">Lihat Detail</a>
                        </div>
                    </div>
                </div> -->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- <div class="carousel-indicators position-relative mt-3">
                <?php foreach ($genteng as $g) : ?>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <?php endforeach ?>
            </div> -->
            <!-- <div class="carousel-indicators position-relative mt-3">
                <?php foreach ($genteng as $index => $g) : ?>
                    <button type="button"
                        data-bs-target="#productCarousel"
                        data-bs-slide-to="<?= $index ?>"
                        class="<?= $index === 0 ? 'active' : '' ?>"
                        aria-current="<?= $index === 0 ? 'true' : 'false' ?>"
                        aria-label="Slide <?= $index + 1 ?>"></button>
                <?php endforeach ?>
            </div> -->
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="section-divider"></div>
            <p class="text-muted">Tertarik dengan produk kami? Jangan ragu untuk menghubungi kami untuk informasi lebih lanjut atau pemesanan.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-form-container p-4 p-md-5 rounded shadow">
                    <h3 class="mb-4">Kirim Pesan</h3>

                    <div id="formSuccess" class="alert alert-success d-none">
                        Terima kasih! Pesan Anda telah terkirim. Kami akan menghubungi Anda segera.
                    </div>

                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email Anda" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon Anda">
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit"
                            data-sitekey="reCAPTCHA_site_key"
                            data-callback='onSubmit'
                            data-action='submit'
                            class="btn btn-primary w-100" id="submitBtn">
                            Kirim Pesan <i class="bi bi-send ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <h3 class="mb-4">Informasi Kontak</h3>

                <div class="contact-info">
                    <div class="d-flex mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Alamat</h5>
                            <a href="https://maps.app.goo.gl/Ri66FtcsdNSmswVF9" target="_blank" class="text-muted addres">
                                Dusun Jajar, Desa Talesan<br>
                                Kecamatan Purwantoro, Kabupaten Wonogiri<br>
                                Jawa Tengah, Indonesia 57695
                            </a>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Telepon</h5>
                            <a href="https://wa.me/+6282329066361?text=Halo,%20saya%20ingin%20memesan%20genteng" target="_blank" class="text-muted addres">+62 823 2906 6361</a>
                            <br>
                            <a href="https://wa.me/+6281548155073?text=Halo,%20saya%20ingin%20memesan%20genteng" target="_blank" class="text-muted addres">+62 815 4815 5073</a>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Email</h5>
                            <a href="mailto:info@suburindah.biz.id" target="_blank" class="text-muted addres">info@suburindah.biz.id</a>
                        </div>
                    </div>
                </div>

                <div class="hours-card p-4 rounded mt-5">
                    <h5 class="mb-3">Jam Operasional</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Senin - Jumat</span>
                            <span class="fw-medium">08:00 - 17:00</span>
                        </li>
                        <li class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Sabtu</span>
                            <span class="fw-medium">08:00 - 15:00</span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text-muted">Minggu</span>
                            <span class="fw-medium">Tutup</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>