<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
     <?php endif; ?>


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Pemesanan ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn" style="background:#FF6600;color: white" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Pemesanan</h3>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">KODE TRANSAKSI</th>
                        <th class="text-center" scope="col">NAMA LENGKAP</th>
                        <th class="text-center" scope="col">ALAMAT</th>
                        <th class="text-center" scope="col">NO TELEPON</th>
                        <th class="text-center" scope="col">KODE POS</th>
                        <th class="text-center" scope="col">TOTAL BAYAR</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                        <?php if(is_array($pemesanan)){ foreach ($pemesanan as $p) { ?>
                        <tr>
                            <td class="text-center"><?= $p['kodetransaksi']; ?></td>
                            <td class="text-center"><?= $p['namalengkap']; ?></td>
                            <td class="text-center"><?= $p['alamattujuan']; ?></td>
                            <td class="text-center"><?= $p['nomortelepon']; ?></td>
                            <td class="text-center"><?= $p['kodepos']; ?></td>
                            <td class="text-center">Rp<?= number_format($p['totalbayar'],0,",","."); ?></td>
                            <td class="text-center">
                               
                                <a href="<?= base_url(); ?>admin/hapusPesanan/<?= $p['kodetransaksi'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            </td>
                        </tr></tr><?php }} ?>
                    
                    
                    
                </tbody>
            </table>
            <div class="row mt-3">
                
            </div>

        </div>
    </div>
</div> 