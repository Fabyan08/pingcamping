<?php 

namespace App\Controllers;

use App\Models\BarangModel; // Include the BarangModel

class Sewa extends BaseController
{
    public function index()
    {
        // Your controller logic for the Sewa page
    }

    public function get_barang_price()
    {
        $selected_barang = $this->request->getJSON('nama_barang');

        // Implement logic to fetch the price from the database based on $selected_barang
        // Gantilah dengan query database sesuai struktur Anda
        $barangModel = new BarangModel();
        $price = $barangModel->getPriceByNamaBarang($selected_barang);

        return $this->response->setJSON(['price' => $price]);
    }
}
