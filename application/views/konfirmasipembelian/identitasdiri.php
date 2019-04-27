<br>
<div class="container">
	<div class="row">
		<div class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">1. Ringkasan Belanja</p>
		</div>
		<div style="background: #343a40;color: white;" class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">2. Pengiriman</p>
		</div>
		<div class="card col-md-4 col-sm-4 text-center">
			<p href="#" class=" card-title">3. Pembayaran</p>
		</div>
	</div>
</div>

<div class="container">
	<table class="table table-striped container-fluid">
	  <thead>
		<th style="width : 35%;background:#d6d8db;" class="col-4"><span><img src="<?php echo base_url('assets/contoh home/pic/baseline-shopping_cart-24px.svg');?> "></span> DAFTAR BELANJAAN</th>
		<th style="background:#d6d8db;"class="col-8"></th>
	  </thead>
	  <tbody>
			<?php foreach ($cart as $show) { ?>
			<tr>
				  <td><center><img class="col-md-8 col-sm-8" src="<?php echo base_url('assets/produk/listproduk/').$show->gambarproduk; ?>"></center></td>
				  <td>
					<p><?php echo $show->namaproduk ?> </p>
					<p>Rp<?php echo number_format($show->harga,0,",","."); ?>,00</p>
					<p>Ukuran Produk : <?php echo $show->ukuranproduk; ?> | Jumlah Produk : <?php echo $show->jumlahproduk; ?> </p>
					<hr>
				  </td>
			</tr>
			<?php } ?>
		</div>
	</tbody>
</table>
</div>

<div class="container">
	<form method="POST" action="#">
		<table class="table container-fluid">
			<tr>
				<th style="width : 25%; background:#d6d8db;"><span><img src="<?php echo base_url('assets/contoh home/pic/baseline-place-24px.svg');?> "></span> Data & Alamat Kirim</th>
				<th style="background:#d6d8db;"></th>
			</tr>
			<tr>
				<th >No. Telepon</th>
				<td>Bentuknya input biasa</td>
			</tr>
			<tr>
				<th >Email</th>
				<td>Bentuknya input biasa</td>
			</tr>
			<tr>
				<th >Nama</th>
				<td>Bentuknya input biasa</td>
			</tr>
			<tr>
				<th >Provinsi</th>
				<td>Bentuknya multilevel dropdown</td>
			</tr>
			<tr>
				<th >Kota/Kab.</th>
				<td>Bentuknya multilevel dropdown</td>
			</tr>
			<tr>
				<th >Kec.</th>
				<td>Bentuknya multilevel dropdown</td>
			</tr>
			<tr>
				<th >Alamat</th>
				<td>Bentuknya input biasa</td>
			</tr>
			<tr>
				<th >Kode Pos</th>
				<td>Bentuknya input biasa</td>
			</tr>
			<tr>
				<th >Catatan</th>
				<td>b</td>
			</tr>
		</table>
</div>
<br>
<div class="container form-horizontal">
	<table class="table container-fluid">
			<th style="width : 30%; background:#d6d8db;"><span><img src="<?php echo base_url('assets/contoh home/pic/baseline-local_shipping-24px.svg');?> "></span> KURIR & ONGKOS KIRIM</th>
			<th style="background:#d6d8db;"></th>
		</tr>
		<tr>
			<th><input onclick="totalharga()" type="radio" id="jne" name="pilihkurir" value="11000"> <span><img style="width:150px; height:50px;" class="img-responsive img-block" src="<?php echo base_url('assets/contoh home/pic/jeniskurirkirim/jne.jpg');?> "></span></th>
			<th class="text-right" style="color:#f60;">Rp.11,000</th>
		</tr>
		<tr>
			<th><input onclick="totalharga()" type="radio" id="sicepat" name="pilihkurir" value="10000">  <span><img style="width:150px; height:50px;" class="img-responsive img-block" src="<?php echo base_url('assets/contoh home/pic/jeniskurirkirim/sicepat.png');?> "></span></th>
			<th class="text-right" style="color:#f60;">Rp.10,000</th>
		</tr>
		<tr>
			<th><input onclick="totalharga()" type="radio" id="posindo" name="pilihkurir" value="10000"> <span><img style="width:150px; height:50px;" class="img-responsive img-block" src="<?php echo base_url('assets/contoh home/pic/jeniskurirkirim/posindonesia.png');?> "></span></th>
			<th class="text-right"style="color:#f60;">Rp.10,000</th>
		</tr>
	</table>
</div>

<style>
	/*Berfungsi untuk membuat tampilan kartu pada kolom metode pembayaran*/
	.bentukkartu
	{
		width:70px;
		height:25px;
		background : white;
		padding-top:5px;
		border-radius:10%;
	}
	
	/*Berfungsi untuk merubah warna dalam table menjadi putih*/
	.tulisandalambagan
	{
		color:white;
	}
</style>

<div class="container form-horizontal">
	<table class="table bg-secondary table-striped  container-fluid">
		<tr>
			<th class="tulisandalambagan" style="width : 40%; background:#555555;color:white;"><span><img style="color:white;"src="<?php echo base_url('assets/contoh home/pic/baseline-payment-24px.svg');?> "></span> Metode Pembayaran</th>
			<th style="background:#555555;"></th>
		</tr>
		<tr>
			<td colspan="2" class="tulisandalambagan" style="background:#666666;">Pilih/klik salah satu metode pembayaran di bawah ini :</td>
		</tr>
		<tr>
			<th class="tulisandalambagan" style="background:#666666;">
				<input onclick="totalharga()" type="radio" id="bank" name="pilihmetode" value="0"> Bank Transfer
				<hr>
			</th>
			<th class="tulisandalambagan text-right" style="color:white; background:#666666;">
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/bca.png');?> "></span> 
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/bri.png');?> "></span>
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/mandiri.png');?> "></span>
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/cimb niaga.svg');?> "></span>
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/permatabank.png');?> "></span>
				<hr>
			</th>
		</tr>
		<tr>
			<th class="tulisandalambagan" style="background:#666666;">
				<input onclick="totalharga()" type="radio" id="alfamart" name="pilihmetode" value="5000"> Alfamart
				<hr>
			</th>
			<td class="text-right tulisandalambagan" style="background:#666666;">
				<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/alfamart.svg');?> "></span>
				<hr>
				<small>*Untuk Alfamart akan dikenakan biaya tambahan sebesar Rp5,000</small>
			</td>
		</tr>
		<tr>
			<tr>
				<th class="tulisandalambagan"  style="background:#666666;">
					<input onclick="totalharga()" type="radio" id="indomaret" name="pilihmetode" value="6500"> Indomaret
					<hr>
				</th>
				<td class="text-right"style="color:white;background:#666666;">
					<span><img class="img-responsive img-block bentukkartu" src="<?php echo base_url('assets/contoh home/pic/jenistransfer/indomaret.png');?> "></span>
					<hr>
					<small>*Untuk Indomaret akan dikenakan biaya tambahan sebesar Rp5,000</small>
				</td>
			</tr>
		</tr>
	</table>
	<table class="table table-striped container-fluid">
		<tr>
			<td>
				<h4 class="text-left">Total Belanja :</h4>
			</td>
			<td>
				<h4 class="text-right"><input type="hidden" id="hargasementara" value="<?php echo $this->session->userdata('totalbayar');?>">Rp<input id="totalfixharga" value="" readonly></h4>
			</td>
		</tr>
		<tr>
				<td>
					<a href="<?php echo base_url('testing2/panggilcart');?>" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">KEMBALI</a>
				</td>
				<td>
					<a href="#" class="btn <?php echo $this->session->userdata('warnagender'); ?> btn-block">LANJUT KE PEMBAYARAN</a>
				</td>
			</tr>
	</table>
</div>
</form>
<script type="text/javascript">
	function totalharga()
	{
		if(document.getElementById('jne').checked)
		{
			var tambahkurir = document.getElementById('jne').value;
		}
		else if(document.getElementById('sicepat').checked)
		{
			var tambahkurir = document.getElementById('sicepat').value;
		}
		if(document.getElementById('posindo').checked)
		{
			var tambahkurir = document.getElementById('posindo').value;
		}
		
		if(document.getElementById('bank').checked)
		{
			var tambahmetode = document.getElementById('bank').value;
			var totalharga = document.getElementById('hargasementara').value;
		
			var totalfix =  parseInt(totalharga) + parseInt(tambahkurir) + parseInt(tambahmetode);
			document.getElementById('totalfixharga').value = totalfix;
		}
		else if(document.getElementById('alfamart').checked)
		{
			var tambahmetode = document.getElementById('alfamart').value;
			var totalharga = document.getElementById('hargasementara').value;
		
			var totalfix =  parseInt(totalharga) + parseInt(tambahkurir) + parseInt(tambahmetode);
			document.getElementById('totalfixharga').value = totalfix;
		}
		else if(document.getElementById('indomaret').checked)
		{
			var tambahmetode = document.getElementById('indomaret').value;
			var totalharga = document.getElementById('hargasementara').value;
		
			var totalfix =  parseInt(totalharga) + parseInt(tambahkurir) + parseInt(tambahmetode);
			document.getElementById('totalfixharga').value = totalfix;
		}
	}
</script>