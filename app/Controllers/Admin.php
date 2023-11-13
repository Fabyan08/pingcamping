<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    /////////////////////////////////////////////////////////////
    public function index()
    {
        $barang = $this->db->query("SELECT * FROM tb_barang")->getResultArray();

        $data = [
            'barang' => $barang,
        ];
        return view('admin/barang', $data);
    }

    public function tambah_barang()
    {
        $nama_barang        = $this->request->getPost('nama_barang');
        $harga_sewa         = $this->request->getPost('harga_sewa');
        $detail_barang      = $this->request->getPost('detail_barang');
        $stok               = $this->request->getPost('stok');
        $gambar             = $this->request->getFile('gambar');

        $kasihnamarandom     =   ($gambar->getRandomName());
        $gambar->move('public/assets/img/barang', $kasihnamarandom);

        $this->db->query("INSERT INTO tb_barang VALUES ('', '$nama_barang', '$harga_sewa',' $detail_barang', '$stok', '$kasihnamarandom') ");

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect('Admin/barang');
    }

    public function hapus_barang($id_barang)
    {
        $barang = $this->db->query("DELETE FROM tb_barang WHERE id_barang = $id_barang");
        session()->setFlashdata('gagal', 'Data berhasil Dihapus');
        return redirect('Admin/barang');
    }

    public function ubah_barang($id_barang)
    {
        $nama_barang        = $this->request->getPost('nama_barang');
        $harga_sewa         = $this->request->getPost('harga_sewa');
        $detail_barang      = $this->request->getPost('detail_barang');
        $stok               = $this->request->getPost('stok');
        $gambar             = $this->request->getFile('gambar');

        $kasihnamarandom     =   ($gambar->getRandomName());
        $gambar->move('public/assets/img/barang', $kasihnamarandom);

        $this->db->query("UPDATE tb_barang
                            SET nama_barang = '$nama_barang', harga_sewa = '$harga_sewa', detail_barang =' $detail_barang', stok = '$stok', gambar = '$kasihnamarandom'
                            WHERE id_barang = '$id_barang'");

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Admin/barang');
    }

    /////////////////////////////////////////////////////////////
    public function member()
    {
        $member = $this->db->query("SELECT * FROM tb_akun")->getResultArray();

        $data = [
            'member' => $member,
        ];
        return view('admin/member', $data);
    }

    public function hapus_member($id_pengguna)
    {
        $member = $this->db->query("DELETE FROM tb_akun WHERE id_pengguna = $id_pengguna");
        session()->setFlashdata('gagal', 'Data berhasil Dihapus');
        return redirect('Admin/member');
    }

    public function ubah_member($id_pengguna)
    {
        $nama           = $this->request->getPost('nama');
        $hp             = $this->request->getPost('hp');
        $alamat         = $this->request->getPost('alamat');
        $username       = $this->request->getPost('username');
        $password       = $this->request->getPost('password');

        $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat =' $alamat', username = '$username', password = '$password'
                            WHERE id_pengguna = '$id_pengguna'");

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Admin/member');
    }

    /////////////////////////////////////////////////////////////
    public function kurir()
    {
        $kurir = $this->db->query("SELECT * FROM tb_kurir")->getResultArray();

        $data = [
            'kurir' => $kurir,
        ];
        return view('admin/kurir', $data);
    }

    public function tambah_kurir()
    {
        $nama_kurir         = $this->request->getPost('nama_kurir');
        $hp                 = $this->request->getPost('hp');
        $area                 = $this->request->getPost('area');


        $this->db->query("INSERT INTO tb_kurir VALUES ('', '$nama_kurir', '$hp', '$area') ");

        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect('Admin/kurir');
    }

    public function ubah_kurir($id_kurir)
    {
        $nama_kurir     = $this->request->getPost('nama_kurir');
        $hp             = $this->request->getPost('hp');
        $area             = $this->request->getPost('area');


        $this->db->query("UPDATE tb_kurir
                            SET nama_kurir = '$nama_kurir', hp = '$hp', area='$area'
                            WHERE id_kurir = '$id_kurir'");

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Admin/kurir');
    }

    public function hapus_kurir($id_kurir)
    {
        $member = $this->db->query("DELETE FROM tb_kurir WHERE id_kurir = $id_kurir");
        session()->setFlashdata('gagal', 'Data berhasil Dihapus');
        return redirect('Admin/kurir');
    }
    //////////////////////////////////////////////////////
    public function ulasan()
    {
        $ulasan = $this->db->query("SELECT * FROM tb_ulasan,tb_barang,tb_akun WHERE tb_ulasan.id_pengguna = tb_akun.id_pengguna AND tb_ulasan.id_barang = tb_barang.id_barang")->getResultArray();

        $data = [
            'ulasan' => $ulasan,
        ];
        return view('admin/ulasan', $data);
    }
    public function hapus_ulasan($id_ulasan)
    {
        $ulasan = $this->db->query("DELETE FROM tb_ulasan WHERE id_ulasan = $id_ulasan");
        session()->setFlashdata('gagal', 'Data berhasil Dihapus');
        return redirect('Admin/ulasan');
    }






    /////////////////////////////////////////////////////////////

    public function data_sewa()
    {
        $data_sewa = $this->db->query("SELECT tb_sewa.*, tb_akun.hp, tb_akun.alamat FROM tb_sewa join tb_akun on tb_sewa.nama_pengguna = tb_akun.nama;")->getResultArray();

        $kurir = $this->db->query("SELECT * FROM tb_kurir")->getResultArray();

        $data = [
            'data_sewa' => $data_sewa,
            'kurir' => $kurir,
        ];

        return view('admin/sewa', $data);
    }
    public function ubah_sewa($id_sewa)
    {
        $nama_kurir     = $this->request->getPost('nama_kurir');


        $this->db->query("UPDATE tb_sewa
                            SET nama_kurir = '$nama_kurir',status = 'Selesai'
                            WHERE id_sewa = '$id_sewa'");

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Admin/data_sewa');
    }
}
