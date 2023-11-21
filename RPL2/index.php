<?php
require 'functions.php';
$barang = query("select * from barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>ID. Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>ID. Supplier</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($barang as $brg){?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $brg['id_barang'];?></td>
            <td><?= $brg['nama_barang'];?></td>
            <td><?= $brg['harga'];?></td>
            <td><?= $brg['stok'];?></td>
            <td><?= $brg['id_supplier'];?></td>
        </tr>
        <?php $i++;?>
        <?php }?>
    </table>
</body>
</html>
