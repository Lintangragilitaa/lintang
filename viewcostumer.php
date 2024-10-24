<?php require 'customer.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
</head>
<body>
    
    <h1>Data Pembelian</h1>

    <form method="POST" action="">
        <label for="date">Tanggal:</label>
        <input type="date" id="date" name="date" value="<?php echo isset($tanggal) ? $tanggal : ''; ?>" required><br><br>

        <label for="id">Id Barang:</label>
        <input type="number" id="id" name="id" value="<?php echo isset($idBarang) ? $idBarang : ''; ?>" required><br><br>

        <label for="namaCstm">Nama Customer:</label>
        <input type="text" id="namaCstm" name="namaCstm" value="<?php echo isset($namaCstm) ? $namaCstm : ''; ?>" required><br><br>

        <label for="jumlahBeli">Jumlah Beli:</label>
        <input type="number" id="jumlahBeli" name="jumlahBeli" value="<?php echo isset($jumlahBeli) ? $jumlahBeli : ''; ?>" required><br><br>

        <label for="noHP">No HP:</label>
        <input type="number" id="noHP" name="noHP" value="<?php echo isset($noHP) ? $noHP : ''; ?>" required><br><br>

        <label for="alamatCstm">Alamat:</label>
        <input type="text" id="alamatCstm" name="alamatCstm" value="<?php echo isset($alamatCstm) ? $alamatCstm : ''; ?>" required><br><br>
        
        <input type="submit" value="Kirim">
    </form>

    <?php if ($Stokakhir !== null): ?>
        <h2>Data Pembelian:</h2>
        <p>Tanggal: <?php echo $tanggal; ?></p>
        <p>Id Barang: <?php echo $idBarang; ?></p>
        <p>Nama Customer: <?php echo $namaCstm; ?></p>
        <p>Jumlah Beli: <?php echo $jumlahBeli; ?></p>
        <p>No HP: <?php echo $noHP; ?></p>
        <p>Alamat: <?php echo $alamatCstm; ?></p>
    <?php endif; ?>
    
</body>
</html>
