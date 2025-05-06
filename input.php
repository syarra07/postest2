
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>contoh website</title>
        <link rel="stylesheet" href="style.css" />
    </head>
  <body>
        <header>
            <h1>SELAMAT BERBELANJA</h1>
        </header>

        <div class="navbar">
        <ul>
        <li><a href="postest.php">Beranda</a></li>
        <li><a href="katalog.php">Katalog Produk</a></li>
        <li><a href="input.php">Pembayaran</a></li>
</ul>
        </div>
        <h2 align="center">KONFIRMASI PESANAN</h2>
        <div class="container">
            <form action="crud_penjualan.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-25">
                        <label for="">Nama Produk</label>
                    </div>
                    <div class="col-75">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Harga Produk</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="harga_produk" id="harga_produk" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Jumlah Produk</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="jumlah_produk" name="jumlah_produk" oninput="hitungTotalBayar()">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Total Bayar</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="total_bayar" id="total_bayar" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" class="tombol" value="Pesan Sekarang" name="btnSimpan">
                    
                </div>
                </form>
        </div>
        <footer>
            <p class="text">&copy; 2025 Belanja.</p>
        </footer>

    </body>

    </html>