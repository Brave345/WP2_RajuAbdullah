<?php

namespace App\Controllers;

use App\Models\Model_latihan1; // Import Model_latihan1

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang... Selamat belajar Web Programming";
        // $this->load->view('view-latihan1'); // Perlu diperbaiki jika menggunakan view
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1(); // Membuat instance dari Model_latihan1
        $hasil = $model->jumlah($n1, $n2);

        $data = [
            'nilai1' => $n1,
            'nilai2' => $n2,
            'hasil' => $hasil
        ];

        return view('view-latihan1', $data); // Tampilkan view dengan data hasil penjumlahan
    }
}
