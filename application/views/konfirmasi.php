<div class="container" style="max-width:500px">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center"  >
                    Form Tambah Data Produk
                </div>
                <!-- <?php if ($this->session->flashdata('tambah')) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Data produk <strong><?= $this->session->flashdata('tambah'); ?></strong> ditambahkan.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?> -->

                <div class="card-body"  >
                    <form action="" method="post" enctype="multipart/form-data"><?php echo form_open_multipart('admin/tambahproduk');?>
                        <div class="form-group">
                            <label for="nama">ATAS NAMA</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemilik Rekening" required>
                            
                        </div>
                       <div class="form-group">
                            <label for="bank">DARI BANK</label>
                            <input type="text" class="form-control" id="bank" name="bank" placeholder="Nama Bank Anda" required>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="kebank">KE BANK</label>
                            <select class="form-control" id="kebank" name="kebank"> 
                                <option>-Pilihan Bank-</option>
                                <option value="BNI">BNI</option>
                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="BRI">BRI</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl">TANGGAL PEMBAYARAN</label>
                            <input type="text" class="form-control" name="tgl" placeholder="dd/mm/yyyy" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="note">NOTE</label>
                            <input type="text" class="form-control" name="note" placeholder="Note mengenai pembayaran" required>
                           
                        </div>
                        <div class="form-group" >
                            <label for="bukti">BUKTI PEMBAYARAN</label>
                            <input  type="file"  name="gambar" id="userfile"  class="float-left form-control-file"style="color: white; border:solid #E7EAED;" required>
                        </div>
                        
                        <br><br>
                        <button type="submit" name="tambah" value="uploud" class="btn btn-primary align-center"style="background:#FF6600;color: white;transform: translate(150px,0);">Tambah Data</button>
                    </form><?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div> 