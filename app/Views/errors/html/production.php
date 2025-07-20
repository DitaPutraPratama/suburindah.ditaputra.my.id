<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title><?= lang('Errors.whoops') ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#b45309">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('https://img.antarafoto.com/cache/1200x811/2023/09/30/produksi-genteng-di-magetan-18cq6-dom.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            font-family: 'Segoe UI', sans-serif;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to right, rgba(120, 53, 15, 0.85), rgba(146, 64, 14, 0.6));
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1.headline {
            font-size: 5rem;
            font-weight: 800;
        }

        p.lead {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .btn-custom {
            background-color: #d2691e;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }

        .btn-custom:hover {
            background-color: #aa4e0f;
        }
    </style>
</head>

<body>
    <div class="hero-overlay"></div>

    <div class="container text-center">
        <h1 class="headline"><?= lang('Errors.whoops') ?></h1>
        <p class="lead"><?= lang('Errors.weHitASnag') ?></p>

        <a href="<?= base_url('/') ?>" class="btn btn-custom">Kembali ke Beranda</a>
    </div>
</body>

</html>