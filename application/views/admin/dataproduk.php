<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data produk ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn" style="background:#FF6600;color: white" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
                <div class="col md-6 text-center mt-5" >
                    <a href="<?php echo base_url('admin/tambahproduk')?>" class="btn " style="background:#FF6600;color: white">Tambah Data Produk</a>
                </div>
            </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Produk</h3>
            <!-- <?php if (empty($mahasiswa)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?> -->

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA PRODUK</th>
                        <th class="text-center" scope="col">KODE PRODUK</th>
                        <th class="text-center" scope="col">JENIS PRODUK</th>
                        <th class="text-center" scope="col">TARGET PEMBELI</th>
                        <th class="text-center" scope="col">HARGA</th>
                        <th class="text-center" scope="col">GAMBAR PRODUK</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php if(is_array($produk)){  foreach ($produk as $p) { ?>
                        <tr>
                            <td class="text-center"><br><?= $p['namaproduk']; ?></td>
                            <td class="text-center"><br><?= $p['kodeproduk']; ?></td>
                            <td class="text-center"><br><?= $p['jenisproduk']; ?></td>
                            <td class="text-center"><br><?= $p['targetpembeli']; ?></td>
                            <td class="text-center"><br>Rp<?= number_format($p['harga'],0,",","."); ?></td>
                            <td class="text-center">
                                <img style="max-width: 100px" src="<?php echo base_url('assets/produk/listproduk/'). $p['gambarproduk']; ?>">
                            </td>
                            <td class="text-center">
                                <br>
                                <a href="<?= base_url(); ?>admin/hapus/<?= $p['idproduk'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                <a href="<?= base_url(); ?>admin/ubah/<?= $p['idproduk'] ?>" class="badge badge-success float-center" ?>ubah</a>
                            </td>
                        
                        </tr><?php }} ?>
                    
                    
                    
                </tbody>
            </table>
            

        </div>
    </div>
</div> 