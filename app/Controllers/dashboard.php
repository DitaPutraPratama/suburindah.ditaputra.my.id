<?php

namespace App\Controllers;

use App\Models\Dashboards;
use App\Models\ViewsWebsite;
use App\Models\DetailVisitor;
use DatePeriod;
use DateTime;
use DateInterval;

class Dashboard extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = session();
        if (!$this->session->has('logged_in')) {
            redirect()->to(base_url())->send();
            exit;
        }
        $this->viewsWebsite = new ViewsWebsite();
        $this->detailVisitor = new DetailVisitor();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page'] = [
            ['name' => 'Dashboard', 'url' => base_url('admin/dashboard')],
        ];
        $data['count'] = $this->viewsWebsite
            ->select('total')
            ->where('DATE(created_at)', date('Y-m-d'))
            ->first()['total'];
        $data['totalVisitorsToday'] = $this->detailVisitor
            ->countAllResults();
        $data['visitors'] = $this->detailVisitor
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        $data['pagerVisitors'] = $this->detailVisitor->pager;

        // Ambil data 7 hari terakhir
        $sevenDaysAgo = date('Y-m-d', strtotime('-6 days'));
        $today = date('Y-m-d');

        $results = $this->viewsWebsite
            ->select("DATE(created_at) as date, SUM(total) as total")
            ->where("DATE(created_at) >=", $sevenDaysAgo)
            ->where("DATE(created_at) <=", $today)
            ->groupBy("DATE(created_at)")
            ->orderBy("DATE(created_at)", "ASC")
            ->findAll();

        // Format data untuk Chart.js
        $chartLabels = [];
        $chartData = [];

        // Buat array default 7 hari agar hari tanpa data tetap muncul
        $period = new DatePeriod(
            new DateTime($sevenDaysAgo),
            new DateInterval('P1D'),
            (new DateTime($today))->modify('+1 day')
        );

        $dateMap = [];
        foreach ($results as $row) {
            $dateMap[$row['date']] = (int) $row['total'];
        }

        foreach ($period as $date) {
            $label = $date->format('Y-m-d');
            $chartLabels[] = $label;
            $chartData[] = $dateMap[$label] ?? 0;
        }

        $data['chartLabels'] = $chartLabels;
        $data['chartData'] = $chartData;


        echo view('admin/template/header', $data);
        echo view('admin/template/nav', $data);
        echo view('admin/dashboard', $data);
        echo view('admin/template/footer');
    }

    public function daftar_pesan()
    {
        $data['title'] = 'Detail Pesan';
        $data['page'] = [
            ['name' => 'Dashboard', 'url' => base_url('admin/dashboard')],
            ['name' => 'Pesan', 'url' => base_url('admin/pesan')],
        ];

        $Dashboards = new Dashboards();
        $data['massages'] = $Dashboards->orderBy('created_at', 'DESC')->paginate(10);
        $data['count'] = $Dashboards->countAll();
        $data['pager'] = $Dashboards->pager;

        echo view('admin/template/header', $data);
        echo view('admin/template/nav', $data);
        echo view('admin/daftar_pesan', $data);
        echo view('admin/template/footer');
    }
}
