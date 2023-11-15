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
        $jumlah_barang = $this->request->getPost('jumlah_barang');
        // $kurir = $this->request->getPost('kurir');
        $nama_kurir = $this->request->getPost('nama_kurir');




        // $ya = $this->request->getPost('ya');

        $nama_pengguna = session()->get('nama');
        $pembayaran = $this->request->getPost('pembayaran');



        $tgl1 = strtotime($tanggal_kembali);
        $tgl2 = strtotime($tanggal_sewa);
        $lama_sewa = abs(($tgl2 - $tgl1) / 60 / 60 / 24);

        // Ambil Data Barang
        $nama_barang_2 =  $this->request->getPost('nama_barang_2');
        $jumlah_barang_2 =  $this->request->getPost('jumlah_barang_2');
        $nama_barang_3 =  $this->request->getPost('nama_barang_3');
        $jumlah_barang_3 =  $this->request->getPost('jumlah_barang_3');
        $nama_barang_4 = $this->request->getPost('nama_barang_4');
        $jumlah_barang_4 = $this->request->getPost('jumlah_barang_4');
        $nama_barang_5 = $this->request->getPost('nama_barang_5');
        $jumlah_barang_5 = $this->request->getPost('jumlah_barang_5');
        $nama_barang_6 = $this->request->getPost('nama_barang_6');
        $jumlah_barang_6 = $this->request->getPost('jumlah_barang_6');
        $nama_barang_7 = $this->request->getPost('nama_barang_7');
        $jumlah_barang_7 = $this->request->getPost('jumlah_barang_7');
        $nama_barang_8 = $this->request->getPost('nama_barang_8');
        $jumlah_barang_8 = $this->request->getPost('jumlah_barang_8');
        $nama_barang_9 = $this->request->getPost('nama_barang_9');
        $jumlah_barang_9 = $this->request->getPost('jumlah_barang_9');
        $nama_barang_10 = $this->request->getPost('nama_barang_10');
        $jumlah_barang_10 = $this->request->getPost('jumlah_barang_10');



        // Stok 1




        $harga_kurir = 0; // or any default value that makes sense in your context

        $queryResult = $this->db->query("SELECT * FROM tb_kurir WHERE nama_kurir = '$nama_kurir'")->getResultArray();

        if (!empty($queryResult)) {
            foreach ($queryResult as $kr) {
                $harga_kurir = $kr['area'];
            }
            if ($harga_kurir == 'Luar Kota') {
                $harga_kurir = 10000;
            } else {
                $harga_kurir = 5000;
            }
        }

        // Now you can check the value of $harga_kurir



        $barang = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang'")->getResultArray();
        // Ambil harga sewa
        foreach ($barang as $value) {
            $harga_sewa = $value['harga_sewa'];
        }
        $total_harga = $harga_sewa * $jumlah_barang * $lama_sewa + $harga_kurir;
        if ($nama_barang_2 != null) {
            $barang2 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_2'")->getResultArray();
            foreach ($barang2 as $value) {
                $harga_sewa2 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa  * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_3 != null) {
            $barang3 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_3'")->getResultArray();
            foreach ($barang3 as $value) {
                $harga_sewa3 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_4 != null) {
            $barang4 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_4'")->getResultArray();
            foreach ($barang4 as $value) {
                $harga_sewa4 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_5 != null) {
            $barang5 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_5'")->getResultArray();
            foreach ($barang5 as $value) {
                $harga_sewa5 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_6 != null) {
            $barang6 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_6'")->getResultArray();
            foreach ($barang6 as $value) {
                $harga_sewa6 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5) + ($harga_sewa6 * $jumlah_barang_6)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_7 != null) {
            $barang7 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_7'")->getResultArray();

            foreach ($barang7 as $value) {
                $harga_sewa7 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5) + ($harga_sewa6 * $jumlah_barang_6) + ($harga_sewa7 * $jumlah_barang_7)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_8 != null) {
            $barang8 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_8'")->getResultArray();
            foreach ($barang8 as $value) {
                $harga_sewa8 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5) + ($harga_sewa6 * $jumlah_barang_6) + ($harga_sewa7 * $jumlah_barang_7) + ($harga_sewa8 * $jumlah_barang_8)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_9 != null) {
            $barang9 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_9'")->getResultArray();
            foreach ($barang9 as $value) {
                $harga_sewa9 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5) + ($harga_sewa6 * $jumlah_barang_6) + ($harga_sewa7 * $jumlah_barang_7) + ($harga_sewa8 * $jumlah_barang_8) + ($harga_sewa9 * $jumlah_barang_9)) * $lama_sewa + $harga_kurir;
        }
        if ($nama_barang_10 != null) {
            $barang10 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_10'")->getResultArray();
            foreach ($barang10 as $value) {
                $harga_sewa10 = $value['harga_sewa'];
            }
            $total_harga = (($harga_sewa * $jumlah_barang) + ($harga_sewa2 * $jumlah_barang_2) + ($harga_sewa3 * $jumlah_barang_3) + ($harga_sewa4 * $jumlah_barang_4) + ($harga_sewa5 * $jumlah_barang_5) + ($harga_sewa6 * $jumlah_barang_6) + ($harga_sewa7 * $jumlah_barang_7) + ($harga_sewa8 * $jumlah_barang_8) + ($harga_sewa9 * $jumlah_barang_9) + ($harga_sewa10 * $jumlah_barang_10)) * $lama_sewa + $harga_kurir;
        }


        if ($nama_kurir == null) {
            $queryString = "INSERT INTO tb_sewa VALUES 
            ('', '$nama_barang', '$jumlah_barang','$nama_barang_2', '$jumlah_barang_2','$nama_barang_3', '$jumlah_barang_3' , '$nama_barang_4', '$jumlah_barang_4', '$nama_barang_5', '$jumlah_barang_5', '$nama_barang_6', '$jumlah_barang_6', '$nama_barang_7', '$jumlah_barang_7', '$nama_barang_8', '$jumlah_barang_8', '$nama_barang_9', '$jumlah_barang_9', '$nama_barang_10', '$jumlah_barang_10' ,'$nama_pengguna',' $tanggal_sewa', '$tanggal_kembali', 'tidak' ,'$total_harga','$pembayaran', 'Belum Lunas', '') ";

            $query = $this->db->query($queryString);
        } else {

            $queryString = "INSERT INTO tb_sewa VALUES 
                ('', '$nama_barang', '$jumlah_barang','$nama_barang_2', '$jumlah_barang_2','$nama_barang_3', '$jumlah_barang_3' , '$nama_barang_4', '$jumlah_barang_4', '$nama_barang_5', '$jumlah_barang_5', '$nama_barang_6', '$jumlah_barang_6', '$nama_barang_7', '$jumlah_barang_7', '$nama_barang_8', '$jumlah_barang_8', '$nama_barang_9', '$jumlah_barang_9', '$nama_barang_10', '$jumlah_barang_10' ,'$nama_pengguna',' $tanggal_sewa', '$tanggal_kembali', '$nama_kurir' ,'$total_harga','$pembayaran', 'Belum Lunas', '') ";

            $query = $this->db->query($queryString);
        }



        // if (empty($nama_kurir)) {
        // $query = $this->db->query("INSERT INTO tb_sewa VALUES 
        //     ('', '$nama_barang', '$jumlah_barang','$nama_barang_2', '$jumlah_barang_2','$nama_barang_3', '$jumlah_barang_3' , '$nama_barang_4', '$jumlah_barang_4', '$nama_barang_5', '$jumlah_barang_5', '$nama_barang_6', '$jumlah_barang_6', '$nama_barang_7', '$jumlah_barang_7', '$nama_barang_8', '$jumlah_barang_8', '$nama_barang_9', '$jumlah_barang_9', '$nama_barang_10', '$jumlah_barang_10' ,'$nama_pengguna',' $tanggal_sewa', '$tanggal_kembali', 'tidak' ,'$total_harga','$pembayaran', 'Belum Lunas', '') ");

        $ambil_stok_1 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang'")->getResultArray();

        foreach ($ambil_stok_1 as $value) {
            $stok1 = $value['stok'];
            $hasil1 = $stok1 - $jumlah_barang;
        }

        // Stok 2
        $ambil_stok_2 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_2'")->getResultArray();
        foreach ($ambil_stok_2 as $value) {
            $stok2 = $value['stok'];
            $kurang2 = $stok2 - $jumlah_barang_2;
        }

        // Stok 3
        $ambil_stok_3 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_3'")->getResultArray();
        foreach ($ambil_stok_3 as $value) {
            $stok3 = $value['stok'];
            $kurang3 = $stok3 - $jumlah_barang_3;
        }


        // Stok 4
        $ambil_stok_4 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_4'")->getResultArray();
        foreach ($ambil_stok_4 as $value) {
            $stok4 = $value['stok'];
            $kurang4 = $stok4 - $jumlah_barang_4;
        }

        // Stok 5
        $ambil_stok_5 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_5'")->getResultArray();
        foreach ($ambil_stok_5 as $value) {
            $stok5 = $value['stok'];
            $kurang5 = $stok5 - $jumlah_barang_5;
        }

        // Stok 6
        $ambil_stok_6 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_6'")->getResultArray();
        foreach ($ambil_stok_6 as $value) {

            $stok6 = $value['stok'];
            $kurang6 = $stok6 - $jumlah_barang_6;
        }

        // Stok 7
        $ambil_stok_7 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_7'")->getResultArray();
        foreach ($ambil_stok_7 as $value) {

            $stok7 = $value['stok'];
            $kurang7 = $stok7 - $jumlah_barang_7;
        }

        // Stok 8
        $ambil_stok_8 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_8'")->getResultArray();
        foreach ($ambil_stok_8 as $value) {
            $stok8 = $value['stok'];
            $kurang8 = $stok8 - $jumlah_barang_8;
        }

        // Stok 9
        $ambil_stok_9 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_9'")->getResultArray();
        foreach ($ambil_stok_9 as $value) {
            $stok9 = $value['stok'];
            $kurang9 = $stok9 - $jumlah_barang_9;
        }

        // Stok 10
        $ambil_stok_10 = $this->db->query("SELECT * FROM tb_barang where nama_barang = '$nama_barang_10'")->getResultArray();
        foreach ($ambil_stok_10 as $value) {
            $stok10 = $value['stok'];
            $kurang10 = $stok10 - $jumlah_barang_10;
        }

        $this->db->query("UPDATE tb_barang SET stok = $hasil1 WHERE nama_barang = '$nama_barang'");
        if (empty($kurang2)) {
            $kurang2 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang2 WHERE nama_barang = '$nama_barang_2'");
        }

        if (empty($kurang3)) {
            $kurang3 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang3 WHERE nama_barang = '$nama_barang_3'");
        }
        if (empty($kurang4)) {
            $kurang4 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang4 WHERE nama_barang = '$nama_barang_4'");
        }
        if (empty($kurang5)) {
            $kurang5 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang5 WHERE nama_barang = '$nama_barang_4'");
        }
        if (empty($kurang6)) {
            $kurang6 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang6 WHERE nama_barang = '$nama_barang_6'");
        }
        if (empty($kurang7)) {
            $kurang7 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang7 WHERE nama_barang = '$nama_barang_6'");
        }
        if (empty($kurang8)) {
            $kurang8 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang8 WHERE nama_barang = '$nama_barang_6'");
        }
        if (empty($kurang9)) {
            $kurang9 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang9 WHERE nama_barang = '$nama_barang_6'");
        }
        if (empty($kurang10)) {
            $kurang10 = 0;
        } else {
            $this->db->query("UPDATE tb_barang SET stok = $kurang10 WHERE nama_barang = '$nama_barang_6'");
        }
        // } else {
        // $query =  $this->db->query("INSERT INTO tb_sewa VALUES 
        //     ('', '$nama_barang', '$jumlah_barang','$nama_pengguna','$nama_barang_2', '$jumlah_barang_2','$nama_barang_3', '$jumlah_barang_3' , '$nama_barang_4', '$jumlah_barang_4', '$nama_barang_5', '$jumlah_barang_5', '$nama_barang_6', '$jumlah_barang_6', '$nama_barang_7', '$jumlah_barang_7', '$nama_barang_8', '$jumlah_barang_8', '$nama_barang_9', '$jumlah_barang_9', '$nama_barang_10', '$jumlah_barang_10' ,' $tanggal_sewa', '$tanggal_kembali', '$nama_kurir','$total_harga','$pembayaran', 'Belum Lunas') ");
        // if (empty($kurang4)) {
        //     $kurang4 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang4 WHERE nama_barang = '$nama_barang_4'");
        // }
        // if (empty($kurang5)) {
        //     $kurang5 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang5 WHERE nama_barang = '$nama_barang_4'");
        // }
        // if (empty($kurang6)) {
        //     $kurang6 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang6 WHERE nama_barang = '$nama_barang_6'");
        // }
        // if (empty($kurang7)) {
        //     $kurang7 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang7 WHERE nama_barang = '$nama_barang_6'");
        // }
        // if (empty($kurang8)) {
        //     $kurang8 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang8 WHERE nama_barang = '$nama_barang_6'");
        // }
        // if (empty($kurang9)) {
        //     $kurang9 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang9 WHERE nama_barang = '$nama_barang_6'");
        // }
        // if (empty($kurang10)) {
        //     $kurang10 = 0;
        // } else {
        //     $this->db->query("UPDATE tb_barang SET stok = $kurang10 WHERE nama_barang = '$nama_barang_6'");
        // }

        // $this->db->query("UPDATE tb_barang SET stok = $hasil1 WHERE nama_barang = '$nama_barang'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang2 WHERE nama_barang = '$nama_barang_2'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang3 WHERE nama_barang = '$nama_barang_3'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang4 WHERE nama_barang = '$nama_barang_4'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang5 WHERE nama_barang = '$nama_barang_5'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang6 WHERE nama_barang = '$nama_barang_6'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang7 WHERE nama_barang = '$nama_barang_7'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang8 WHERE nama_barang = '$nama_barang_8'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang9 WHERE nama_barang = '$nama_barang_9'");
        // $this->db->query("UPDATE tb_barang SET stok = $kurang10 WHERE nama_barang = '$nama_barang_10'");
        // }


        echo $this->db->getLastQuery();


        session()->setFlashdata('success', 'Silahkan Lakukan Proses Pembayaran');
        return redirect('Web/pembayaran');
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

        $profil      = $this->request->getFile('profil');
        $foto_ktp    = $this->request->getFile('foto_ktp');

        // Periksa apakah file profil diunggah dan valid
        if ($profil->isValid() && !$profil->hasMoved()) {
            $kasihnamarandom1 = $profil->getRandomName();
            $profil->move('public/assets/img/auth', $kasihnamarandom1);
        }

        // Periksa apakah file foto_ktp diunggah dan valid
        if ($foto_ktp->isValid() && !$foto_ktp->hasMoved()) {
            $kasihnamarandom2 = $foto_ktp->getRandomName();
            $foto_ktp->move('public/assets/img/auth', $kasihnamarandom2);
        }

        // Lakukan pembaruan berdasarkan kondisi
        if (isset($kasihnamarandom1) && isset($kasihnamarandom2)) {
            $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat ='$alamat', profil = '$kasihnamarandom1', foto_ktp = '$kasihnamarandom2'
                            WHERE id_pengguna = '$id_pengguna'");
        } elseif (isset($kasihnamarandom1)) {
            $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat ='$alamat', profil = '$kasihnamarandom1'
                            WHERE id_pengguna = '$id_pengguna'");
        } elseif (isset($kasihnamarandom2)) {
            $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat ='$alamat', foto_ktp = '$kasihnamarandom2'
                            WHERE id_pengguna = '$id_pengguna'");
        } else {
            // Tidak ada file yang diunggah, lakukan pembaruan tanpa file
            $this->db->query("UPDATE tb_akun
                            SET nama = '$nama', hp = '$hp', alamat ='$alamat'
                            WHERE id_pengguna = '$id_pengguna'");
        }

        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect('Web/profil');
    }

    public function Search()
    {
        $keyword = $this->request->getPost('keyword');
        $data_search = $this->db->query("SELECT * FROM tb_barang WHERE nama_barang LIKE '%$keyword%'")->getResultArray();

        $data = [
            'data' => $data_search
        ];

        return view('sewa/home', $data);
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
    public function cetak()
    {
        $id_pengguna = session()->get('id_pengguna');

        $pengguna = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();




        $id_sewa = $this->request->getGet('id_sewa');
        // Load the Query Builder library
        $builder = $this->db->table('tb_sewa');
        $builder->select('tb_sewa.*, tb_akun.hp, tb_akun.alamat');
        $builder->join('tb_akun', 'tb_sewa.nama_pengguna = tb_akun.nama');
        $builder->where('tb_sewa.id_sewa', $id_sewa);
        $data_sewa = $builder->get()->getResultArray();

        $data = [
            'data_sewa' => $data_sewa,
            'pengguna' => $pengguna

        ];

        return view('sewa/cetak', $data);
    }
    public function berhasil()
    {
        $id_pengguna = session()->get('id_pengguna');

        $berhasil = $this->db->query("SELECT * FROM tb_sewa ORDER BY id_sewa DESC limit 1")->getResultArray();
        $pengguna = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();

        // $id_pengguna = session()->get('id_pengguna');

        // $pengguna = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();

        // $lastInsertID = $this->db->insertID();

        // $id_sewa = $this->request->getGet('id_sewa');
        // // Load the Query Builder library
        // $builder = $this->db->table('tb_sewa');
        // $builder->select('tb_sewa.*, tb_akun.hp, tb_akun.alamat');
        // $builder->join('tb_akun', 'tb_sewa.nama_pengguna = tb_akun.nama');
        // $builder->where('tb_sewa.id_sewa', $id_sewa);
        // $data_sewa = $builder->get()->getResultArray();

        $data = [
            'data_sewa' => $berhasil,
            'pengguna' => $pengguna
        ];

        return view('sewa/berhasil', $data);
    }
    public function pembayaran()
    {
        $id_pengguna = session()->get('id_pengguna');
        $nama = session()->get('nama');



        $berhasil = $this->db->query("SELECT * FROM tb_sewa WHERE nama_pengguna = '$nama' ORDER BY id_sewa DESC limit 1")->getResultArray();
        $pengguna = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();




        $data = [
            'data_sewa' => $berhasil,
            'pengguna' => $pengguna
        ];

        return view('sewa/pembayaran', $data);
    }
    public function proses_pembayaran()
    {
        $id_pengguna = session()->get('id_pengguna');
        $nama = session()->get('nama');

        // Ambil data
        $pembayaran = $this->request->getPost('pembayaran');

        // $bukti      = ;
        $bukti = $this->request->getFile('bukti');
        $status = 'lunas';

        if ($bukti === null) {
            $kasihnamarandom = 'bayar cash';
        } else {
            // Pastikan bahwa file yang diunggah adalah file yang valid
            if ($bukti->isValid() && !$bukti->hasMoved()) {
                $kasihnamarandom = $bukti->getRandomName();
                $bukti->move('public/assets/img/bukti', $kasihnamarandom);
                $this->db->query("UPDATE tb_sewa SET pembayaran = '$pembayaran', bukti = '$kasihnamarandom', status = '$status' WHERE nama_pengguna = '$nama' ORDER BY id_sewa DESC limit 1");
            } else {
                $this->db->query("UPDATE tb_sewa SET pembayaran = '$pembayaran', bukti = 'bayar cash', status = 'belum lunas' WHERE nama_pengguna = '$nama' ORDER BY id_sewa DESC limit 1");
            }
        }


        $berhasil = $this->db->query("SELECT * FROM tb_sewa WHERE nama_pengguna = '$nama' ORDER BY id_sewa DESC limit 1")->getResultArray();
        $pengguna = $this->db->query("SELECT * FROM tb_akun WHERE id_pengguna = '$id_pengguna'")->getResultArray();


        $data = [
            'data_sewa' => $berhasil,
            'pengguna' => $pengguna
        ];

        return view('sewa/berhasil', $data);
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
        $tanggal = date('Y-m-d');


        $this->db->query("INSERT INTO tb_ulasan VALUES ('', '$id_pengguna', '$id_barang','$ulasan', '$tanggal') ");

        $barang = $this->db->query("SELECT * FROM tb_barang WHERE tb_barang.id_barang = '$id_barang'")->getResultArray();

        $ulasan = $this->db->query(" SELECT * FROM tb_ulasan,tb_barang,tb_akun WHERE tb_ulasan.id_pengguna = tb_akun.id_pengguna AND tb_ulasan.id_barang = tb_barang.id_barang AND tb_akun.id_pengguna = '$id_pengguna' AND tb_ulasan.id_barang = '$id_barang'")->getResultArray();
        // $brg =  $this->db->query("INSERT INTO tb_ulasan VALUES ('', '$id_pengguna', '$id_barang','$ulasan') ")->getResultArray();

        session()->setFlashdata('success', 'Data berhasil ditambahkan');

        $data = [
            'barang' => $barang,
            'ulasan' => $ulasan
        ];

        // return view('sewa/detail_barang', $data);

        return redirect()->back();
    }
    public function hapus_ulasan($id_ulasan)
    {
        $this->db->query("DELETE FROM tb_ulasan WHERE id_ulasan = $id_ulasan");
        session()->setFlashdata('gagal', 'Data berhasil Dihapus');
        return redirect()->back();
        // return redirect('Web/profil_detail_barang');
    }
}
