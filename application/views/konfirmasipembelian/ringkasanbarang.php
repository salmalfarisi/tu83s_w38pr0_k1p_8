&nbsp;
<div class="container">
	<?php if($cart > 0) : ?>
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
	<table class="table table-striped container-fluid">
		<thead>
		<th style="width : 35%;background:#d6d8db;" class="col-4"><span><img src="<?php echo base_url('assets/contoh home/pic/baseline-shopping_cart-24px.svg');?> "></span> DAFTAR BELANJAAN</th>
		<th style="background:#d6d8db;"class="col-8"></th>
		  </thead>
		  <tbody>
			<?php foreach ($cart as $show) { ?>
			<tr>
				  <td><center><img class="col-md-11 col-sm-11" src="<?php echo base_url('assets/produk/listproduk/').$show->gambarproduk; ?>"></center></td>
				  <td>
					<p><?php echo $show->namaproduk ?> <a href="<?php echo base_url('testing2/hapusbarangorderan/').$show->idpemesanan;?>"><span class="btn btn-sm <?php echo $this->session->userdata('warnagender'); ?>" style="font-size:25px; float:right;">&times;</span></a></p>
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
					<h4 class="text-right">Rp<?php echo number_format($show->totalbayar,0,",","."); ?>,00</h4>
				</td>
			</tr>
			<tr style="background:white;">
				<td>
					<a href="<?php echo base_url('testing2/rumah');?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">KEMBALI</a>
				</td>
				<td>
					<a href="<?php echo base_url('testing2/identitasdatadiri'); ?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">LANJUT KE PEMBAYARAN</a>
				</td>
			</tr>
		</div>
		</tbody>
		<?php else : ?>
		<table class="table table-striped container-fluid">
			<tr>
				  <td colspan="2">
					<center>
						<img style="width:20%; height:20%;" class="img-fluid img-responsive" src="<?php echo base_url('assets/contoh home/pic/kosong.svg'); ?>">
						<br>
						<br>
						<h5 style="color : #f60;" >Sorry Bray !! Keranjang Masih Kosong</h5>
					</center>
				  </td>
			</tr>
	<?php endif;?>
	</table>
</div>