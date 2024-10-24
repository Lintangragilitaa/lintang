<?php
$Stokakhir = null;
$tanggal = '';
$idBarang = '';
$namaCstm = '';
$jumlahBeli = 0;
$noHP = '';
$alamatCstm = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data input dari form
    $tanggal = isset($_POST['date']) ? $_POST['date'] : '';
    $idBarang = isset($_POST['id']) ? $_POST['id'] : '';
    $namaCstm = isset($_POST['namaCstm']) ? $_POST['namaCstm'] : '';
    $jumlahBeli = isset($_POST['jumlahBeli']) ? (int)$_POST['jumlahBeli'] : 0;
    $noHP = isset($_POST['noHP']) ? $_POST['noHP'] : '';
    $alamatCstm = isset($_POST['alamatCstm']) ? $_POST['alamatCstm'] : '';

    //stok awal 
    $stok_awal = 100;
    $Stokakhir = $stok_awal - $jumlahBeli;
}
