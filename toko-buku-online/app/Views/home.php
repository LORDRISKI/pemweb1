<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container">
    <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
            <h1>Selamat Datang di Toko Buku Online</h1>
            <p>Kami menyediakan berbagai jenis buku dari berbagai penerbit teremuka.</p>
            <button class="btn btn-warning">Lihat Produk</button>
        </div>

        <div class="col-6 p-5">
            <h1>Temukan Buku Favorit Anda</h1>
            <form action="<?= base_url('search')?>" method="GET">
                <div class="mb-3">
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
                </div>
                <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
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
                    <img src="<?= base_url() ?>/images/foto1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wujud Tanpa Suara</h5>
                            <p class="card-text">Rp 99.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                    <img src="<?= base_url() ?>images/foto2.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Malioboro at midnight</h5>
                            <p class="card-text">Rp 88.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>images/foto3.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Harga Sebuah Percaya</h5>
                            <p class="card-text">Rp 90.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 pt-4">
                    <div class="card">
                        <img src="<?= base_url() ?>images/foto4.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ayahu Bukan Pembohong</h5>
                            <p class="card-text">Rp 78.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 pt-4">
                    <div class="card">
                        <img src="<?= base_url() ?>images/foto5.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tinggal Dirumah Cahaya</h5>
                            <p class="card-text">Rp 177.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 pt-4">
                    <div class="card">
                        <img src="<?= base_url() ?>images/foto6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pesan Trakhir</h5>
                            <p class="card-text">Rp 150.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>