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
        <!--code php-->

        <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran atlit  baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
        <!--code php-->
        
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

                <img src="assets/img/1.jpeg">
                <h1> Sepak Bola </h1>
                <hr>
                <p>
                    Sepak bola asosiasi adalah cabang olahraga yang menggunakan bola, pada umumnya terbuat dari bahan
                    kulit dan dimainkan oleh dua tim yang masing-masing beranggotakan 11 orang pemain inti dan beberapa
                    pemain cadangan. Memasuki abad ke-21, olahraga ini telah dimainkan oleh lebih dari 250 juta orang di
                    200 negara
                </p>
                <a href="#" class="continue-lendo">Selengkapnya →</a>
            </div>
            <div class="conteudo">

                <img src="assets/img/2.jpeg">
                <h1> Renang</h1>
                <hr>
                <p>
                    Renang adalah olahraga yang melombakan kecepatan atlet renang dalam berenang. Gaya renang yang
                    diperlombakan adalah gaya bebas, gaya kupu-kupu, gaya punggung, dan gaya dada. Perenang yang
                    memenangkan lomba renang adalah perenang yang menyelesaikan jarak lintasan tercepat.
                </p>
                <a href="#" class="continue-lendo">Selengkapnya →</a>
            </div>
        </div>
    </div>

</body>

</html>