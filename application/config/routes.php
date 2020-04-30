<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['dashboard-siswa'] = 'welcome/siswa';
$route['dashboard-admin'] = 'welcome/admin';
$route['dashboard-petugas'] = 'welcome/petugas';

// siswa
$route['data-siswa'] = 'datasiswa/index';
$route['tambah-siswa'] = 'datasiswa/create';
$route['edit-siswa/(:any)'] = 'datasiswa/edit/$1';
$route['hapus-siswa/(:any)'] = 'datasiswa/hapus/$1';

// spp
$route['data-spp'] = 'dataspp/index';
$route['tambah-spp'] = 'dataspp/create';
$route['edit-spp/(:any)'] = 'dataspp/edit/$1';
$route['hapus-spp/(:any)'] = 'dataspp/hapus/$1';

// kelas
$route['data-kelas'] = 'datakelas/index';
$route['tambah-kelas'] = 'datakelas/create';
$route['edit-kelas/(:any)'] = 'datakelas/edit/$1';
$route['hapus-kelas/(:any)'] = 'datakelas/hapus/$1';

// petugas
$route['data-petugas'] = 'datapetugas/index';
$route['tambah-petugas'] = 'datapetugas/create';
$route['edit-petugas/(:any)'] = 'datapetugas/edit/$1';
$route['hapus-petugas/(:any)'] = 'datapetugas/hapus/$1';

// tunggakan
$route['data-tunggakan'] = 'datatunggakan/index';
$route['tambah-tunggakan'] = 'datatunggakan/create';
// $route['edit-petugas/(:any)'] = 'datapetugas/edit/$1';
$route['hapus-tunggakan/(:any)'] = 'datatunggakan/hapus/$1';

// detail bayar
$route['pembayaran-detail/(:any)'] = 'pembayaran/detail/$1';
$route['tambah-tunggakan'] = 'datatunggakan/create';
// $route['edit-petugas/(:any)'] = 'datapetugas/edit/$1';
$route['hapus-tunggakan/(:any)'] = 'datatunggakan/hapus/$1';

// history pembayaran
$route['history-pembayaran'] = 'pembayaran/history_pembayaran';
$route['history-pembayaran-siswa'] = 'pembayaran/history_pembayaran_siswa';
// $route['history-pembayaran/(:any)'] = 'pembayaran/history/$1';
