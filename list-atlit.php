<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran atlit olahraga</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <header>
        <h3>Pendaftaran atlit Baru</h3>
        <h1>Tofatek</h1>
    </header>

    <div class="wrap">

        <nav class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-atlit.php">Pendaftar</a></li>
            </ul>
        </nav>

        <aside class="sidebar">
            <div class="widget">
                <h2>Autor</h2>
                <img src="assets/img/foto.jpeg"  alt="foto" height="140" width="100">
                <p><strong>NIM</strong>  :190411100027</p>
                <P><strong>NAMA</strong> :M. Salisianto Fahmi Zaka</P>
            </div>
             
        </aside>
        

        <div class="blog">
            <div class="conteudo">


                <h3>Atlit yang sudah mendaftar</h3>
                <nav>
                    <a href="form-daftar.php">[+] Tambah Baru</a>
                </nav>

                <br>

                <table border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tinggi Badan</th>
                            <th>Jenis Olahraga</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
        $sql = "SELECT * FROM calon_atlit";
        $query = mysqli_query($db, $sql);

        while($atlit = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$atlit['id']."</td>";
            echo "<td>".$atlit['nama']."</td>";
            echo "<td>".$atlit['alamat']."</td>";
            echo "<td>".$atlit['jenis_kelamin']."</td>";
            echo "<td>".$atlit['tinggi_badan']."</td>";
            echo "<td>".$atlit['jenis_olahraga']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$atlit['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$atlit['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

                    </tbody>
                </table>

                <p>Total: <?php echo mysqli_num_rows($query) ?></p>

            </div>
        </div>
    </div>

</body>

</html>