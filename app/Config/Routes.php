<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Web::index');

$routes->group("Web", function ($routes) {
    $routes->get('/', 'Web::index');
    $routes->get('detail_barang/(:any)', 'Web::detail_barang/$1');


    $routes->post('search', 'Web::search');

    $routes->get('sewa', 'Web::sewa');
    $routes->post('proses_sewa', 'Web::proses_sewa');
    $routes->get('berhasil', 'Web::berhasil');

    // $routes->get('print', 'Web::print');
    $routes->get('print/(:any)', 'Web::print/$1');

    // $routes->get('cetak_print', 'Web::cetak_print');
    $routes->get('cetak_print/(:any)', 'Web::cetak_print/$1');

    $routes->post('proses_pembayaran', 'Web::proses_pembayaran');
    $routes->get('pembayaran', 'Web::pembayaran');

    $routes->post('hapus_ulasan/(:any)', 'Web::hapus_ulasan/$1');

    $routes->get('profil', 'Web::profil');
    $routes->post('ubah_profil', 'Web::ubah_profil');
    $routes->get('profil_home', 'Web::profil_home');

    $routes->get('profil_detail_barang/(:any)', 'Web::profil_detail_barang/$1');
    $routes->post('tambah_ulasan', 'Web::tambah_ulasan');
    $routes->post('Web/get_barang_price', 'Web::get_barang_price');


    $routes->get('riwayat', 'Web::riwayat');
    $routes->get('cetak', 'Web::cetak');
});

$routes->group("Login", function ($routes) {
    $routes->get('/', 'Login::login');
    $routes->get('register', 'Login::register');
    $routes->post('proses_register', 'Login::proses_register');
    $routes->get('login', 'Login::login');
    $routes->post('proses_login', 'Login::proses_login');
    $routes->get('logout', 'Login::logout');
});

$routes->group("Login_admin", function ($routes) {
    $routes->get('/', 'Login::login_admin');
    $routes->get('login_admin', 'Login::login_admin');
    $routes->post('proses_login_admin', 'Login::proses_login_admin');
    $routes->get('logout_admin', 'Login::logout_admin');
});


$routes->group("Admin", function ($routes) {
    $routes->get('/', 'Admin::index');

    $routes->get('barang', 'Admin::index');
    $routes->post('tambah_barang', 'Admin::tambah_barang');
    $routes->post('hapus_barang/(:any)', 'Admin::hapus_barang/$1');
    $routes->post('ubah_barang/(:any)', 'Admin::ubah_barang/$1');

    $routes->get('member', 'Admin::member');
    $routes->post('hapus_member/(:any)', 'Admin::hapus_member/$1');
    $routes->post('ubah_member/(:any)', 'Admin::ubah_member/$1');

    $routes->get('ulasan', 'Admin::ulasan');
    $routes->post('hapus_ulasan/(:any)', 'Admin::hapus_ulasan/$1');
    $routes->post('ubah_member/(:any)', 'Admin::ubah_member/$1');

    $routes->get('kurir', 'Admin::kurir');
    $routes->post('tambah_kurir', 'Admin::tambah_kurir');
    $routes->post('hapus_kurir/(:any)', 'Admin::hapus_kurir/$1');
    $routes->post('ubah_kurir/(:any)', 'Admin::ubah_kurir/$1');

    $routes->get('data_sewa', 'Admin::data_sewa');
    $routes->post('ubah_sewa/(:any)', 'Admin::ubah_sewa/$1');
});
