&nbsp;
<div class="container">
	<div class="row">
		<div class="card col-md-4 col-sm-4 text-center">
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
		<tr>
			  <td><img class="col-md-12 col-sm-12" src="<?php echo base_url('assets/produk/listproduk/JP1.jpg'); ?>"></td>
			  <td>
				<p>Nama Produk <span class="btn btn-sm <?php echo $this->session->userdata('warnagender'); ?>" style="font-size:25px; float:right;">&times;</span></p>
				<p>Rp<?php echo number_format(/*$p->harga*/928302,0,",","."); ?>,00</p>
				<p>UKURAN | JUMLAH </p>
				<hr>
				<p class="text-right">Rp<?php echo number_format(/*$p->harga*/928302,0,",","."); ?>,00</p>
			  </td>
		</tr>
	  </tbody>
	</table>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<a href="#" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-fluid btn-block">KEMBALI</a>
		</div>
		<div class="col-md-8 col-sm-8">
			<a href="#" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">LANJUT KE PEMBAYARAN</a>
		</div>
	</div>
</div>