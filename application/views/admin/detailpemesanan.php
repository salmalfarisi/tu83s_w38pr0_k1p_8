<br>
<div class="container">
	<table class="table text-center">
	  <thead class="thead-dark">
		<tr>
			  <th scope="col">Nama Produk</th>
			  <th scope="col">Jumlah Produk</th>
			  <th scope="col">Ukuran Produk</th>
		</tr>
	  </thead>
	  <tbody>
	  <?php foreach($detail as $p) { ?>
		<tr>
		  <td><?php echo $p->namaproduk; ?></td>
		  <td><?php echo $p->jumlahproduk; ?></td>
		  <td><?php echo $p->ukuranproduk; ?></td>
		</tr>
	  <?php } ?>
	  </tbody>
	</table>
</div>