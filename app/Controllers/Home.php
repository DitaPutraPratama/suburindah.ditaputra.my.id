<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        // popup
        $data['popups'] = (object)[
            'title'   => 'Selamat Datang di Subur Indah',
            'content' => 'Kami menyediakan berbagai macam genteng berkualitas dengan harga terjangkau. Klik tombol dibawah untuk melihat produk kami.',
            'gambar'  => 'https://asset-2.tstatic.net/tribunnews/foto/bank/images/kata-kata-untuk-Kartu-Ucapan-Idul-Fitri-2025.jpg',
            'link'  => 'https://asset-2.tstatic.net/tribunnews/foto/bank/images/kata-kata-untuk-Kartu-Ucapan-Idul-Fitri-2025.jpg',
            'button'  => 'Lihat Produk',
            'popup'   => true
        ];
        // hero image
        $data['slides'] = [
            (object)[
                'url' => base_url('/assets/images/web/latar.jpg'),
            ],
            (object)[
                'url' => base_url('/assets/images/web/luntung2.jpg'),
            ],
            (object)[
                'url' => base_url('/assets/images/web/tobong.jpg'),
            ]
        ];

        // tentang kami
        $data['tentang'] = base_url('/assets/images/web/gentengmunggah.jpg');
        // product data
        $data['genteng'] = [
            (object)[
                'nama'      => 'Genteng Press',
                'deskripsi' => 'Genteng Press memberikan tampilan elegan dan kekuatan tahan lama atap rumah',
                'foto'      => base_url('/assets/images/web/luntung2.jpg'),
                'po'        => false
            ],
            // (object)[
            //     'nama'      => 'Genteng Mantili',
            //     'deskripsi' => 'Genteng Mantili menonjolkan desain unik dengan pola tradisional, menghadirkan kesan autentik',
            //     'foto'      => 'https://direktoriukm.com/media/fotoproduk/135/IMG00894-20150716-1305_1.jpg',
            //     'po'        => true
            // ],
            (object)[
                'nama'      => 'Genteng Wuwung',
                'deskripsi' => 'Genteng Wuwung menghadirkan lekukan artistik yang menggabungkan estetika klasik dan modern',
                'foto'      => 'https://ibb.jatimprov.go.id/uploads/product_images/CspjeSVYP39HYHLK.JPG',
                'po'        => true
            ]
        ];

        $data['title'] = 'Subur Indah';
        log_page_view('home'); // Log page view
        log_visitor();
        echo view('template/header', $data);
        echo view('template/nav');
        echo view('home');
        echo view('template/footer');
    }

    public function sendMassage()
    {
        $recaptchaToken = $this->request->getPost('g-recaptcha-response');

        if (empty($recaptchaToken)) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'CAPTCHA wajib diisi.'
            ]);
        }

        // Verifikasi token dengan Google
        $secretKey = '6LfA7YArAAAAADJK_zxIJLnmYdzKb6PSRCB__NbP'; // ganti dengan secret key Google kamu
        $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';

        $response = file_get_contents($verifyURL . '?secret=' . $secretKey . '&response=' . $recaptchaToken);
        $result = json_decode($response);

        if (!$result->success) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Verifikasi CAPTCHA gagal.'
            ]);
        }
        if ($this->request->isAJAX()) {
            $db = \Config\Database::connect();

            $data = [
                'name'    => $this->request->getPost('name'),
                'email'   => $this->request->getPost('email'),
                'phone'   => $this->request->getPost('phone'),
                'message' => $this->request->getPost('message'),
            ];

            // Insert data ke tabel contact_messages
            $db->table('contact_messages')->insert($data);

            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'Pesan berhasil dikirim.'
            ]);
        }

        return $this->response->setStatusCode(400)->setJSON([
            'status'  => 'error',
            'message' => 'Permintaan tidak valid.'
        ]);
    }
}
