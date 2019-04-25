&nbsp;
<div class="container">
	<div class="row">
		<div style="background: #343a40;color: white;" class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">1. Ringkasan Belanja</p>
		</div>
		<div class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">2. Pengiriman</p>
		</div>
		<div class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">3. Pembayaran</p>
		</div>
	</div>
</div>
&nbsp;
<div class="container">
	<table class="table table-striped container-fluid">
	  <thead>
		<th style="width : 35%;" class="col-4">DAFTAR BELANJAAN</th>
		<th class="col-8"></th>
	  </thead>
	  <tbody>
	  	<?php foreach ($cart as $show) { ?>
		<tr>
			  <td><img class="col-md-11 col-sm-11" src="<?php echo base_url('assets/produk/listproduk/').$show->gambarproduk; ?>"></td>
			  <td>
				<p><?php echo $show->namaproduk ?> <a href="<?php echo base_url('testing2/hapusbarangorderan').$show->idpemesanan;?>"><span class="btn btn-sm <?php echo $this->session->userdata('warnagender'); ?>" style="font-size:25px; float:right;">&times;</span></a></p>
				<p>Rp<?php echo number_format($show->harga,0,",","."); ?>,00</p>
				<p>Ukuran Produk : <?php echo $show->ukuranproduk; ?> | Jumlah Produk : <?php echo $show->jumlahproduk; ?> </p>
				<hr>
				<p class="text-right">Total Harga Produk : Rp<?php echo number_format($show->totalhargaproduk,0,",","."); ?>,00</p>

			  </td>
		</tr>
	    <?php } ?>
		<tr>
			<td>
				<h4 class="text-left">Total Belanja :</h4>
			</td>
			<td>
				<h3 class="text-right">Rp<?php echo number_format($show->totalbayar,0,",","."); ?>,00</h3>
			</td>
		</tr>
	  </tbody>
	</table>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<a href="<?php echo base_url('testing2/rumah');?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-fluid btn-block">KEMBALI</a>
		</div>
		<div class="col-md-8 col-sm-8">
			<a href="<?php echo base_url('testing2/identitasdatadiri'); ?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">LANJUT KE PEMBAYARAN</a>
		</div>
	</div>
</div>