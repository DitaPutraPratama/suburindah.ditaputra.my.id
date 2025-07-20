<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>404 - Halaman Tidak Ditemukan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#b45309">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            animation: fade 9s infinite;
            z-index: 0;
        }

        .slide:nth-child(1) {
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            animation-delay: 3s;
        }

        .slide:nth-child(3) {
            animation-delay: 6s;
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            30% {
                opacity: 1;
            }

            40% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right,
                    rgba(120, 53, 15, 0.8),
                    rgba(146, 64, 14, 0.6));
            z-index: 1;
        }

        .error-container {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .error-container h1 {
            font-size: 8rem;
            font-weight: bold;
        }

        .error-container p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .btn-custom {
            background-color: #d2691e;
            border: none;
        }

        .btn-custom:hover {
            background-color: #aa4e0f;
        }

        #hero {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
    </style>

</head>

<body>
    <?php
    $slides = [
        (object)[
            'url' => 'https://img.antarafoto.com/cache/1200x811/2023/09/30/produksi-genteng-di-magetan-18cq6-dom.webp'
        ],
        (object)[
            'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgStYkId2caZiHJIXoqbpODyMd9Dyks2HYkXooj-uSd535bKmMl2KYXcmMgP-2C5no2WV-bbD4uEYVU1yd3GxByCcuzWZJBAf5myONJabkEkA-nZCcCXiLA6WTFvVqzO0Wv2QiS4q_hNf8/s1600/klunthung+dua.JPG'
        ],
        (object)[
            'url' => 'https://direktoriukm.com/media/fotoproduk/135/IMG00894-20150716-1305_1.jpg'
        ]
    ];
    ?>

    <section id="hero">
        <?php foreach ($slides as $s): ?>
            <div class="slide" style="background-image: url('<?= $s->url ?>');"></div>
        <?php endforeach; ?>

        <div class="hero-overlay"></div>

        <div class="container error-container">
            <h1>404</h1>
            <h3>Halaman Tidak Ditemukan</h3>
            <p>Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>
            <a href="<?= base_url('/') ?>" class="btn btn-custom text-white me-2">Kembali ke Beranda</a>
            <!-- <a href="<?= base_url('kontak') ?>" class="btn btn-outline-light">Hubungi Kami</a> -->
        </div>
    </section>
</body>

</html>