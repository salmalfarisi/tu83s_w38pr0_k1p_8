&nbsp;
<div class="container">
	<div class="row">
		<div style="background: black;color: white;" class="card col-md-4 col-sm-4 text-center">
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
	  	<?php foreach ($tampilkandata as $show) { ?>
		<tr>
			  <td><img class="col-md-12 col-sm-12" src="<?php echo base_url('assets/produk/listproduk/').$show->gambarproduk; ?>"></td>
			  <td>
				<p><?php echo $show->namaproduk ?> <span class="btn btn-sm <?php echo $this->session->userdata('warnagender'); ?>" style="font-size:25px; float:right;">&times;</span></p>
				<p>Rp<?php echo number_format($show->harga,0,",","."); ?>,00</p>
				<p><?php echo $show->ukuranproduk; ?> | <?php echo $show->jumlahproduk; ?> </p>
				<hr>
				<p class="text-right">Rp<?php echo number_format($this->session->userdata('totalharga'),0,",","."); ?>,00</p>
			  </td>
		</tr>
	    <?php } ?>
	  </tbody>
	</table>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-4">
			<a href="<?php echo base_url('Geoffmax/index');?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-fluid btn-block">KEMBALI</a>
		</div>
		<div class="col-md-8 col-sm-8">
			<a href="<?php echo base_url('Geoffmax/identitasdatadiri'); ?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">LANJUT KE PEMBAYARAN</a>
		</div>
	</div>
</div>