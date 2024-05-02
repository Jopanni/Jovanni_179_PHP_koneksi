<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database MySql</title>
</head>
<body>
    <h1>Demo Koneksi database MySql</h1>
    <?php 
        $conn=mysqli_connect("localhost","root","","mod7") or die ("Koneksi gagal");                
        $hasil = $conn->query("select * from liga");
        while ($baris=$hasil->fetch_row()) {
            echo "Liga " .$baris[1];
            echo " mempunyai " .$baris[2];
            echo " wakil di liga champion <br>";
        }
    ?>
</body>
</html>