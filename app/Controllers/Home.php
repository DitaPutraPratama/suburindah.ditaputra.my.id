<?php

namespace App\Controllers;

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
                'url' => 'https://img.antarafoto.com/cache/1200x811/2023/09/30/produksi-genteng-di-magetan-18cq6-dom.webp'
            ],
            (object)[
                'url' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgStYkId2caZiHJIXoqbpODyMd9Dyks2HYkXooj-uSd535bKmMl2KYXcmMgP-2C5no2WV-bbD4uEYVU1yd3GxByCcuzWZJBAf5myONJabkEkA-nZCcCXiLA6WTFvVqzO0Wv2QiS4q_hNf8/s1600/klunthung+dua.JPG'
            ],
            (object)[
                'url' => 'https://direktoriukm.com/media/fotoproduk/135/IMG00894-20150716-1305_1.jpg'
            ]
        ];

        // tentang kami
        $data['tentang'] = 'https://img.antarafoto.com/cache/1200x811/2023/09/30/produksi-genteng-di-magetan-18cq6-dom.webp';
        // product data
        $data['genteng'] = [
            (object)[
                'nama'      => 'Genteng Press',
                'deskripsi' => 'Genteng Press memberikan tampilan elegan dan kekuatan tahan lama atap rumah',
                'foto'      => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgStYkId2caZiHJIXoqbpODyMd9Dyks2HYkXooj-uSd535bKmMl2KYXcmMgP-2C5no2WV-bbD4uEYVU1yd3GxByCcuzWZJBAf5myONJabkEkA-nZCcCXiLA6WTFvVqzO0Wv2QiS4q_hNf8/s1600/klunthung+dua.JPG',
                'po'        => false
            ],
            (object)[
                'nama'      => 'Genteng Mantili',
                'deskripsi' => 'Genteng Mantili menonjolkan desain unik dengan pola tradisional, menghadirkan kesan autentik',
                'foto'      => 'https://direktoriukm.com/media/fotoproduk/135/IMG00894-20150716-1305_1.jpg',
                'po'        => true
            ],
            (object)[
                'nama'      => 'Genteng Wuwung',
                'deskripsi' => 'Genteng Wuwung menghadirkan lekukan artistik yang menggabungkan estetika klasik dan modern',
                'foto'      => 'https://ibb.jatimprov.go.id/uploads/product_images/CspjeSVYP39HYHLK.JPG',
                'po'        => true
            ]
        ];

        $data['title'] = 'Subur Indah';
        echo view('template/header', $data);
        echo view('template/nav');
        echo view('home');
        echo view('template/footer');
    }
}
