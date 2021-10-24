<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $jenis_olahraga = $_POST['jenis_olahraga'];

    // buat query
    $sql = "INSERT INTO calon_atlit (nama, alamat, jenis_kelamin, tinggi_badan, jenis_olahraga) VALUE ('$nama', '$alamat', '$jk', '$tinggi_badan', '$jenis_olahraga')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>