<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1>Selamat Datang di Toko Buku Online Kamu !</h1>
                <p>Kami menyediakan berbagai macam Buku dari berbagai penerbit ternama. 
                    kali.
                </p>
                <button class="btn btn-warning">Lhat Produk</button>
            </div>
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorit </h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" name = "judul" id ="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="Kategori" id="Kategori" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-3">Buku Best Seller</h2>
                <div class="row">
                        <div class="col-4">
                        <div class="card">
                        <img src="<?= base_url() ?>/images/foto4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wujud Tanpa Suara</h5>
                            <p class="card-text">Rp.99.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                        </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/foto2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Malioboro at midnight</h5>
                            <p class="card-text">Rp.175.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/foto3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Harga Sebuah Percaya</h5>
                            <p class="card-text">Rp.150.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/foto1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ayahku Bukan Pembohong</h5>
                            <p class="card-text">Rp.99.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/foto5.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tinggal Dirumah Cahaya</h5>
                            <p class="card-text">Rp.65.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="card" >
                        <img src="<?= base_url() ?>/images/foto6.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pesan Trakhir</h5>
                            <p class="card-text">Rp.250.000</p>
                            <a href="#" class="btn btn-primary">Add To Chart</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="p-5">
        &copy; 2024. Kelas A Pemrograman Web 2. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>