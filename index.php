<?php
session_start();
//ob_start();

// Mengecek session
if (empty($_SESSION['username'])) {
    echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
} else {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Makanan Khas Sulawesi Selatan</title>
        <link rel="stylesheet" href="assets/style.css">
        <style>
            
        </style>
    </head>

    <body>
        <header>
            Makanan Khas
        </header>

        <div class="container">
            <!-- Sidebar -->
            <aside class="sidebar">
                <nav>
                    <ul>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="tabel-makanan.php">Makanan Khas</a></li>
                        <li><a href=#>Objek Wisata</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Konten Utama -->
            <section class="content">
                <?php include("main.php"); ?>
                <?php include("data_hitung.php"); ?>
            </section>

        </div>
    </body>

    </html>
<?php
}
?>