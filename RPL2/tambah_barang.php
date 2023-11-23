<?php
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah_barang($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <div>
            <label for="nama">Nama Barang :</label>
            <input type="text" name="nama_barang" id="nama_barang" required>
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" required>
        </div>
        <div>
            <label for="stok">Stok :</label>
            <input type="number" name="stok" id="stok" required>
        </div>
        <div>
            <label for="id_supplier">ID Supplier :</label>
            <input type="number" name="id_supplier" id="id_supplier" required>
        </div>
        <button type="submit" name="tambah">Tambah Data</button>
    </form>
</body>
</html>