<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi - Institut Teknologi Bandung</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css'); ?>">
</head>
<body>
    <header>
        <h1>Institut Teknologi Bandung</h1>
        <nav>
            <ul>
                <li><a href="/halaman">Beranda</a></li>
                <li><a href="#">Pendidikan</a></li>
                <li><a href="#">Penerimaan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Ekstrakurikuler Aktif Hari Ini</h2>
        <ul id="aktif-ekstra"></ul> <!-- Tempat untuk menampilkan jadwal ekstrakurikuler aktif -->
    </section>

    <section>
        <h2>Program Studi</h2>
        <div class="program-container">
            <?php foreach ($ekstrakurikuler as $ekstra): ?>
                <div class="program-box">
                    <h3><?= $ekstra['Nama ekstrakurikuler']; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

  

    <footer>
        <p>&copy; 2024 Institut Teknologi Bandung</p>
    </footer>

    <!-- Menghubungkan file JavaScript -->
    <script src="<?= base_url('js/jadwal_ekstra.js'); ?>"></script>
</body>
</html>
