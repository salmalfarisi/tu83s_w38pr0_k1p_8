<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">


  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="<?php echo base_url('assets/contoh home/pic/c1.jpg') ?>" class="carousel2" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/contoh home/pic/c2.jpg')?>" class="carousel2" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/contoh home/pic/c3.jpg')?>" class="carousel2" alt="New York">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/contoh home/pic/c4.jpg')?>" class="carousel2" alt="New York">
    </div>
  </div>
  &nbsp;

</div>

<div class="container">
  <div class="row">
  <?php foreach($produk as $p) { ?>
  <div class="col-lg-3 col-md-4 mb-4">
	<div class="mb-4" style="width: 18rem;">
	<!-- Pembuatan Link ke halaman detail produk sama mengeluarkan data gambar ke halaman website -->
		<a href="#"><img class="card-img-top" src="<?php echo base_url('assets/produk/listproduk/'). $p->gambarproduk; ?>"></a>
		<div class="card-body text-center">
			<a href="#"><h5 class="hurufproduk card-title"><?php echo $p->namaproduk; ?></h5></a>
			<a href="#"><p class="hurufproduk card-text">Rp<?php echo number_format($p->harga,0,",","."); ?></p></a>
			
		</div>
	</div>
  </div>
  <?php } ?>
  </div>
</div>