<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $jenis_olahraga = $_POST['jenis_olahraga'];

    // buat query update
    $sql = "UPDATE calon_atlit SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', tinggi_badan='$tinggi_badan', jenis_olahraga='$jenis_olahraga' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-atlit.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>