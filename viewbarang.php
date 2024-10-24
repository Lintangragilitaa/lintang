<?php require 'barang.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Jumlah Barang</title>
</head>
<body>
    
    <h1>Perhitungan Jumlah Barang</h1>

    <form method="POST" action="">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" value="<?php echo isset($id) ? $id : ''; ?>" required><br><br>

        <label for="namaBarang">Nama Barang:</label>
        <input type="text" id="namaBarang" name="namaBarang" value="<?php echo isset($namaBarang) ? $namaBarang : ''; ?>" required><br><br>

        <label for="stokAwal">Stok Awal:</label>
        <input type="number" id="stokAwal" name="stokAwal" value="<?php echo isset($stokAwal) ? $stokAwal : ''; ?>" required><br><br>

        <label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian" value="<?php echo isset($pembelian) ? $pembelian : ''; ?>" required><br><br>

        <input type="submit" value="Hitung Stok Akhir">
    </form>

    <?php if ($Stokakhir !== null): ?>
        <h2>Data Barang:</h2>
        <p>ID: <?php echo $id; ?></p>
        <p>Nama Barang: <?php echo $namaBarang; ?></p>
        <p>Stok Awal: <?php echo $stokAwal; ?></p>
        <p>Jumlah Pembelian: <?php echo $pembelian; ?></p>
    <?php endif; ?>
    
</body>
</html>
