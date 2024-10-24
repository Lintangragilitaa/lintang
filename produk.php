<?php
class Produk {
    public $namaProduk;
    public $jenisProduk;
    public $jumlahProduk;
    public $stok;
    public $pembelian;

    public function stokAkhirProduk () {
        //menghitung hasil akhir stok
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }

}

//Inisialisasi variabel untuk perhitungan stok
$Stokakhir = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Membentuk instance/objek baru dari class produk
    $panggilProduk = new Produk ();
    $panggilProduk -> stok = intval($_POST['stok']);
    $panggilProduk -> pembelian = intval($_POST['pembelian']);

    //perhitungan akhir sebuah produk
    $Stokakhir = $panggilProduk->stokAkhirProduk();
}
?>