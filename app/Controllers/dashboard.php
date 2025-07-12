<?php

namespace App\Controllers;

use App\Models\Dashboards;

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
    }

    public function index()
    {
        // if (!$this->session->has('logged_in')) {
        //     return redirect()->to(base_url());
        // }
        $data['title'] = 'Dashboard';
        $data['page'] = [
            ['name' => 'Dashboard', 'url' => base_url('dashboard')]
        ];
        $Dashboards = new Dashboards();
        $data['massages'] = $Dashboards->orderBy('created_at', 'DESC')->paginate(10);
        $data['pager'] = $Dashboards->pager;

        echo view('admin/template/header', $data);
        echo view('admin/template/nav', $data);
        echo view('admin/dashboard', $data);
        echo view('admin/template/footer');
    }
}
