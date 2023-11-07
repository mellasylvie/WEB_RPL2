<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get PHP</title>
</head>
<body>
    <form method="get">
        <label>Masukkan Nama :</label>
        <input type="text" name="nama"><br>

        <label>Masukkan Absen :</label>
        <input type="text" name="absen"><br>

        <input type="submit" value="submit" name="submit">
    </form>
    <?php 
        if(isset($_GET["submit"])){
            $nama = $_GET['nama'];
            $absen = $_GET['absen'];
            echo "Halo Namaku $nama <br>";
            echo "Aku absen $absen <br>";
        }
    ?>
</body>
</html>