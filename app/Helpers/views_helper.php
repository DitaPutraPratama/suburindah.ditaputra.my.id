<?php

use App\Models\ViewsWebsite;

if (!function_exists('log_page_view')) {
    function log_page_view(string $page)
    {
        $viewsModel = new ViewsWebsite();

        $today = date('Y-m-d');

        $existing = $viewsModel
            ->where('page', $page)
            ->where("DATE(created_at)", $today)
            ->first();

        if ($existing) {
            // Update total jika sudah ada
            $viewsModel->update($existing['id_views'], [
                'total' => $existing['total'] + 1
            ]);
        } else {
            // Insert baru jika belum ada
            $viewsModel->insert([
                'page'  => $page,
                'total' => 1
            ]);
        }
    }
}
