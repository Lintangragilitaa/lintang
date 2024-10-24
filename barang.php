<?php
$Stokakhir = null;
$id = '';
$namaBarang = '';
$stokAwal = 0;
$pembelian = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data input dari form
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $namaBarang = isset($_POST['namaBarang']) ? $_POST['namaBarang'] : '';
    $stokAwal = isset($_POST['stokAwal']) ? (int)$_POST['stokAwal'] : 0;
    $pembelian = isset($_POST['pembelian']) ? (int)$_POST['pembelian'] : 0;

    // Hitung stok akhir
    $Stokakhir = $stokAwal - $pembelian;
}
