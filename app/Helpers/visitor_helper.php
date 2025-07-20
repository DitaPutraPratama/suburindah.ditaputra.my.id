<?php

use App\Models\DetailVisitor;

if (!function_exists('log_visitor')) {
    function log_visitor()
    {
        $request   = \Config\Services::request();
        $ip        = $request->getIPAddress();
        $userAgent = $request->getUserAgent();

        $model = new DetailVisitor();

        $model->insert([
            'ipaddress'   => $ip,
            'useragent'   => $userAgent, // pastikan ini VARCHAR di DB
        ]);
    }
}
