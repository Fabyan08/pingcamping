<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $barang = $this->db->query("SELECT * FROM tb_barang")->getResultArray();
        $kurir = $this->db->query("SELECT * FROM tb_kurir")->getResultArray();

        $data = [
            'barang' => $barang,
            'kurir' => $kurir,
        ];
        return view('web/home', $data);
    }

    /////
    public function detail_barang($id_barang)
    {
        $barang = $this->db->query("SELECT * FROM tb_barang where id_barang = $id_barang")->getResultArray();

        $ulasan = $this->db->query("SELECT tb_ulasan.*, tb_akun.nama FROM tb_ulasan join tb_akun on tb_akun.id_pengguna = tb_ulasan.id_pengguna where tb_ulasan.id_barang = $id_barang")->getResultArray();

        $data = [
            'barang' => $barang,
            'ulasan' => $ulasan,
        ];
        return view('web/detail_barang', $data);
    }

    /////////////////////////////////////////////////////////////

    public function sewa()
    {
        $barang = $this->db->query("SELECT * FROM tb_barang")->getResultArray();
        $kurir = $this->db->query("SELECT * FROM tb_kurir")->getResultArray();

        $data = [
            'barang' => $barang,
            'kurir' => $kurir,
        ];
        return view('sewa/proses_sewa', $data);
    }

    public function proses_sewa()
    {
        $nama_barang = $this->request->getPost('nama_barang');
        $tanggal_kembali = $this->request->getPost('tanggal_kembali');
        $tanggal_sewa = $this->request->getPost('tanggal_sewa');
        $nama_kurir = $this->request->getPost('nama_kurir');
        $jumlah_barang = $this->request->getPost('jumlah_barang');

        $nama_pengguna = session()->get('nama');



        $query = $this->db->query("SELECT * FROM tb_kurir WHERE nama_kurir = '$nama_kurir'")->getResultArray();

        $harga_kurir = 0;

        foreach ($query as $kr) {
            $harga_kurir = $kr['area'];
            if ($harga_kurir == 'Luar Kota') {
                $harga_kurir = 10000;
            } else {
                $harga_kurir = 5000;
            }
        }




        $barang = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang'")->getResultArray();

        foreach ($barang as $value) {
            $harga_sewa = $value['harga_sewa'];
        }

        $tgl1 = strtotime($tanggal_kembali);
        $tgl2 = strtotime($tanggal_sewa);
        $lama_sewa = abs(($tgl2 - $tgl1) / 60 / 60 / 24);

        $total_harga = $harga_sewa * $lama_sewa + $harga_kurir;

        $this->db->query("INSERT INTO tb_sewa VALUES 
        ('', '$nama_barang', '$jumlah_barang','$nama_pengguna',' $tanggal_sewa', '$tanggal_kembali', '$nama_kurir','$total_harga', 0, 'Lunas') ");


        session()->setFlashdata('success', 'Terimakasih pesanan anda sedang kami proses');
        return redirect('Web/sewa');
    }

    public function profil()
    {
        $id_pengguna = session()->get('id_pengguna');
        $akun = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();

        $data = [
            'akun' => $akun,
        ];
        return view('sewa/profil', $data);
    }

    public function ubah_profil()
    {
        $id_pengguna = session()->get('id_pengguna');

        $nama        = $this->request->getPost('nama');
        $hp          = $this->request->getPost('hp');
        $alamat      = $this->request->getPost('alamat');


        $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat ='$alamat'
                            WHERE id_pengguna = '$id_pengguna'");

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Web/profil');
    }

    public function riwayat()
    {
        $id_pengguna = session()->get('id_pengguna');
        $data_sewa = $this->db->query("SELECT tb_sewa.*, tb_akun.hp, tb_akun.alamat FROM tb_sewa join tb_akun on tb_sewa.nama_pengguna = tb_akun.nama where tb_akun.id_pengguna =$id_pengguna")->getResultArray();


        $data = [
            'data_sewa' => $data_sewa,
        ];

        return view('sewa/riwayat', $data);
    }

    ////////////////////////////

    public function profil_home()
    {
        $barang = $this->db->query("SELECT * FROM tb_barang")->getResultArray();

        $data = [
            'barang' => $barang,
        ];
        return view('sewa/home', $data);
    }

    /////
    public function profil_detail_barang($id_barang)
    {
        $barang = $this->db->query("SELECT * FROM tb_barang where id_barang = $id_barang")->getResultArray();
        $ulasan = $this->db->query("SELECT tb_ulasan.*, tb_akun.nama FROM tb_ulasan join tb_akun on tb_akun.id_pengguna = tb_ulasan.id_pengguna where tb_ulasan.id_barang = $id_barang")->getResultArray();

        $data = [
            'barang' => $barang,
            'ulasan' => $ulasan,
        ];
        return view('sewa/detail_barang', $data);
    }
    //

    public function tambah_ulasan()
    {
        $ulasan           = $this->request->getPost('ulasan');
        $id_barang        = $this->request->getPost('id_barang');
        $id_pengguna      = session()->get('id_pengguna');


        $this->db->query("INSERT INTO tb_ulasan VALUES ('', '$id_pengguna', '$id_barang','$ulasan') ");

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->back();
    }
}
