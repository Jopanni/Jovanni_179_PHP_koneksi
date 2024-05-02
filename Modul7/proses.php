<?php 
include 'tugasKonek.php';

if(isset($_POST['submit'])){
   
    // ambil data dari formulir
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $pesan = $_POST['Pesan'];    

    // buat query
    $sql = "INSERT INTO buku_tamu (nama, email, isi) VALUE ('$nama', '$email', '$pesan')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {        
        header('Location: tuga.php');
    } else {        
        die("Gagal..");
    }
} else {
    die("Akses dilarang...");
}

?>