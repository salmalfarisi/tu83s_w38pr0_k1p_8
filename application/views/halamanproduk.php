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
  <?php foreach($produk as $p) { ?>
  <div class="col-lg-3 col-md-4 mb-4">
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="<?php echo base_url('assets/produk/listproduk/'). $p->gambarproduk; ?>">
		<div class="card-body text-center">
			<h5 class="card-title"><?php echo $p->namaproduk; ?></h5>
			<p class="card-text">Rp<?php echo number_format($p->harga,0,",","."); ?></p>
			<a href="#" class="btn btn-primary">Go somewhere</a>
		</div>
	</div>
  </div>
  <?php } ?>