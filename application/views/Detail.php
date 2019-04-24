<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/detail.css') ?>">   
	  <style type="text/css">
	  	
	  	
	  </style>            
</head>
<body>
	<br>
	<div class="detail-product">
		
		<div class="left-place">
			<div class="img-product">
				<?php foreach ($detail as $dp) { ?>
				<img style="width: 500px;height: 500px" src="<?php echo base_url('assets/produk/listproduk/'). $dp->gambarproduk;?>">
			</div>
		
		</div>
		<form class="right-place" method="POST" action="<?php echo base_url ('testing2/langsungbayar/');?>">

		    <input type="hidden" id="idproduk" name="idproduk" value="<?php echo $dp->idproduk; ?>">
			<h1 style="font-weight: 600; " name="namaproduk"><?php echo $dp->namaproduk; ?></h1>
			<input type="hidden" name="totalharga" value="<?php echo $dp->harga; ?>"" name=""><h3 style="font-weight: 700;">Rp<?php echo number_format($dp->harga,0,",","."); ?></h3>
			<div class="" id="ukuranaa" style="height: 100px;border-bottom: solid #C3C3C3 1px;"><?php } ?>
				<label>Pilih Ukuran</label>
				<div class="middle">
					<div class="girl">
						<div style="transform: translate(180px,-30px);">
							<label >
							  <input type="radio" name="radio" value="37" checked="" />
							  <div class="box">
							    <span>37</span>
							  </div>
							</label>
						</div>
						<div style="transform: translate(230px,-85px);">
							<label>
							  <input type="radio" name="radio" value="38" />
							  <div class="box">
							    <span>38</span>
							  </div>
							</label>
						</div>
						<div style="transform: translate(280px,-140px);">
							<label>
							  <input type="radio" name="radio" value="39" />
							  <div class="box">
							    <span>39</span>
							  </div>
							</label>
						</div>
						<div style="transform: translate(330px,-195px);"> 
							<label>
							  <input type="radio" name="radio" value="40" />
							  <div class="box">
							    <span>40</span>
							  </div>
							</label>
						</div>
						<div style="transform: translate(280px,-200px);">
							<label>
							  <input type="radio" name="radio" value="41" />
							  <div class="box">
							    <span>41</span>
							  </div>
							</label>
						</div>
					  	<div style="transform: translate(330px,-255px);">
					  		<label>
							  <input type="radio" name="radio" value="42" />
							  <div class="box">
							    <span>42</span>
							  </div>
							</label>
					  	</div>
					</div>
					
									  
				</div>
			
			</div>
			<div class="field" style="padding-top:  10px ;">
				<label>Pilih Jumlah</label>
				<select name="qty" id="qty" required style="float: right;">
					<option value="1" selected="">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
			
			<div class="detail-splite" style="padding-left: 15px;">
				<!-- <button type="submit" class="button" value="BELI"name="butATC" id="butATC" data-toggle="modal" data-target="#warning" style="width: 355px;"></button> -->
				<input type="button" class="button" value="BELI" name="butATC" id="butATC" data-toggle="modal" data-target="#warning" style="width: 355px;">
				<br>
				
				
			</div>

			<div class="detail-help">
                <a href="#" class="size-button" target="_blank">
                	<div>PANDUAN UKURAN</div>
                </a>
                <a href="<?php echo base_url('testing2/beli')?>" class="caber">
                	<div style="font-size: 18px;">CARA BELI</div>
                </a>
                <b style="text-align: center;">Butuh bantuan? Line kami:</b>
                <a href="https://line.me/R/ti/p/@geoff_max" class="line-button">@geoff_max</a>
            </div>
            <div class="deskripsi">
            	<p class="deskripsi-product">Warna Black + White itu ga pernah salah bray! Bakalan selalu cocok di pakai pake baju apa pun dan kemana pun! Buat anak sekolahan juga bisa loh! Warna dan design yang simple yang bikin sepatu Authentic Black pas di pakai kapan pun dan di mana pun!</p>
                <br>

                <div class="desc-1">Shoes Material</div>
                <div class="desc-2">Upper : Canvas 12 Oz</div>
                <div class="desc-3">Sole : Rubber</div>
                <div class="desc-4">Insole : Jersey Foam</div>
                <div class="desc-5">Construction : Stitch Down</div>
            </div>
		</form>
		<div class="detail-bottom">
			<ul class="debot-nav">
		        <li class="debot-nav-product current">Produk Lainnya</li>
		       
		    </ul>
		    <div class="debot-lainnya">
		    	<ul class="product-list">
		    			<div class="status">
		    				
                        </div>
                        <a href="#" class="">
							<div class="row">
                            <?php foreach($randomproduk as $rp) { ?>
							  <div class="col-lg-3 col-md-4 mb-4">
								<div class="card" style="width: 10rem;">
									<a href="<?php echo base_url('testing2/detail/').$rp->idproduk; ?>"><img class="card-img-top" src="<?php echo base_url('assets/produk/listproduk/'). $rp->gambarproduk; ?>"></a>
									<div class="card-body text-center">
										<a href="<?php echo base_url('testing2/detail/').$rp->idproduk; ?>"><h5 class="hurufproduk card-title"><?php echo $rp->namaproduk; ?></h5></a>
										<a href="<?php echo base_url('testing2/detail/').$rp->idproduk; ?>"><p class="hurufproduk card-text">Rp<?php echo number_format($rp->harga,0,",","."); ?></p></a>
									</div>
								</div>
							  </div>
							  <?php } ?>
							 </div>
                        </a>
		    	</ul>
		    </div>
		</div>

	</div>
	<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboards="false" data-backdrop="static">
				  <div class="modal-dialog modal-dialog-centered" style="width: 350px;height: 135px;" role="document">
				    <div class="modal-content" style="background-color: black;">
				      
				      <div class="modal-body" style="padding: 20px 30px;">
				      	<form class="right-place" method="POST" action="<?php echo base_url ('testing2/langsungbayar/');?>">

						    <input type="hidden" id="idproduk" name="idproduk" value="<?php echo $dp->idproduk; ?>">
							<input type="hidden" name="namaproduk" value="<?php echo $dp->namaproduk; ?>">
							
				      	<div class="container">
					        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-size: 16px;font-weight: 700;text-align: center;">YEAH! Berhasil masuk keranjang...</h5>
					        <br>
					           	
					   		<div class="row">
						      	<input   name="kecart" type="submit" class="btn" value="Langsung Ke Kasir" style="background-color: #F93E4C;color: white;width: 310px;font-size: 14px;font-weight: 700;">		      			
						    </div>
						    <div class="row"><h3> </h3></div>
						    <div class="row">
						      	<button type="button" class="btn" style="background-color: #F93E4C;color: white;width: 310px;font-size: 14px;font-weight: 700;" data-dismiss="modal">Beli yang Lainnya Juga</button>				      			
						    </div>
				      	</div>
				      </form>
				      </div>
				      
				    </div>
				  </div>
				</div>
</body>