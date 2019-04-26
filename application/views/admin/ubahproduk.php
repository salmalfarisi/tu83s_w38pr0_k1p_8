<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Harga Produk
                </div>
                <div class="card-body">
                    
                    <form action="" method="post">
                        
                        <input type="hidden" name="idproduk" value="<?= $produk['idproduk'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="namaproduk" value="<?= $produk['namaproduk'] ?>" placeholder="">
                            <small class="form-text text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">HARGA</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga'] ?>">
                            <small class="form-text text-danger"></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right"style="background:#FF6600;color: white">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 