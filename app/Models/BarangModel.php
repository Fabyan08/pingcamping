<?php 
namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'tb_barang'; // Set the table name

    public function getPriceByNamaBarang($nama_barang)
    {
        // Gantilah dengan query database sesuai struktur Anda
        $result = $this->db->table($this->table)
            ->select('harga')
            ->where('nama_barang', $nama_barang)
            ->get()
            ->getRowArray();

        return $result ? $result['harga'] : 0;
    }
}
