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
                <img src="assets/img/foto.jpeg" alt="foto" height="140" width="100">
                <p><strong>NIM</strong> :190411100027</p>
                <P><strong>NAMA</strong> :M. Salisianto Fahmi Zaka</P>
            </div>

        </aside>


        <div class="blog">
            <div class="conteudo">

                <h3>Formulir Pendaftaran Atlit Baru</h3>


                <form action="proses-pendaftaran.php" method="POST">

                    <fieldset>

                        <p>
                            <label for="nama">Nama: </label>
                            <input type="text" name="nama" placeholder="nama lengkap" />
                        </p>
                        <p>
                            <label for="alamat">Alamat: </label>
                            <textarea name="alamat"></textarea>
                        </p>
                        <p>
                            <label for="jenis_kelamin">Jenis Kelamin: </label>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                        </p>
                        <p>
                            <label for="tinggi_badan">Tinggi Badan </label>
                            <select name="tinggi_badan">
                                <option>150 cm</option>
                                <option>160 cm</option>
                                <option>180 cm</option>
                                <option>190 cm</option>
                                <option>200 cm</option>
                            </select>
                        </p>
                        <p>
                            <label for="jenis_olahraga">Jenis Olahraga: </label>
                            <input type="text" name="jenis_olahraga" placeholder="nama olahraga" />
                        </p>
                        <p>
                            <input type="submit" value="Daftar" name="daftar" />
                        </p>

                    </fieldset>

                </form>

            </div>

            <div class="conteudo">

                <img src="assets/img/3.jpg">
                <h1> indonesia pencetak juara atlit nasional</h1>
                <hr>
                <p>
                    Atlet Indonesia tak pernah berhenti membuat ibu pertiwi tersenyum. Berbagai penghargaan dan gelar
                    juara terus mereka berikan dari berbagai kejuaraan. Merah-Putih pun tak henti berkibar di tiang
                    tertinggi.
              
                </p>
                <a href="#" class="continue-lendo">Selengkapnya →</a>
            </div>
        </div>
    </div>
</body>

</html>