<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/LightSlider/src/css/lightslider.css') ?>" />                  
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	  <script src="<?php echo base_url('assets/LightSlider/src/js/lightslider.js') ?>"></script> 
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/geoff.css') ?>">               
	  
	  <style type="text/css">
        .demo .item{
            margin-bottom: 60px;
        }
		.content-slider li{
		    background-color: #ed3020;
		    text-align: center;
		    color: #FFF;
		}
		.demo{
			
		}
		.img-preview{
			max-width: 500px;
		}
		.img-thumb{
			width: 300px;
		}
		.deskripsi{
			font-family: Poppins, century, Arial;
			font-size: 12.6px;
			
			text-align: justify;
			color: #333333;
		}

	  </style>
	<title></title>
</head>
<body>
	<div class="detail-product">
		
		<div class="left-place">
			<div class="img-product">
				<img src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_01.jpg')?>">
			</div>
			<!-- <div class="demo">
		        <div class="item">            
		            <div class="clearfix" style="max-width:500px;">
		                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_01.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_01.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_02.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_02.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_03.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_03.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_04.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_04.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_05.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_05.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_06.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_06.jpg')?>" />
		                    </li>
		                    <li class="img-thumb" data-thumb="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_07.jpg')?>"> 
		                        <img class="img-preview" src="<?php echo base_url('assets/geoff produk rinci/cowok/authentic_black_white_07.jpg')?>" />
		                    </li>
		                </ul>
		            </div>
		        </div>
		        
    		</div>	 -->
          
		</div>
		<form class="right-place" method="POST" action="<?php base_url ('Geoffmax/cartcheckbelanja1')?>">
			<!-- <img class="card-img-top" src="<?php echo base_url('assets/produk/listproduk/'). $p->gambarproduk; ?>">
				<div class="card-body text-center">
					<h5 class="card-title"><?php echo $p->namaproduk; ?></h5>
					<p class="card-text">Rp<?php echo number_format($p->harga,0,",","."); ?></p>
				</div> -->
			<h1>Authentic Black White</h1>
			<h3>Rp. 285,000</h3>
			<div class="field" id="ukuranaa">
				<label>Pilih Ukuran</label>
				<div  class="radio-option" name="">
					<em>
	                    <input id="opt-1" type="radio" name="sz" value="38">
	                    <label for="opt-1">38</label>
	                </em>
	                <em>
	                    <input id="opt-2" type="radio" name="sz" value="39">
	                    <label for="opt-2">39</label>
	                </em>
	                <em>
	                    <input id="opt-3" type="radio" name="sz" value="40">
	                    <label for="opt-3">40</label>
	                </em>
	                <em>
	                    <input id="opt-4" type="radio" name="sz" value="41">
	                    <label for="opt-4">41</label>
	                </em>
	                <em>
	                    <input id="opt-5" type="radio" name="sz" value="42">
	                    <label for="opt-5">42</label>
	                </em>
	                <em>
	                    <input id="opt-6" type="radio" name="sz" value="43">
	                    <label for="opt-6">43</label>
	                </em>
	                <em>
	                    <input id="opt-7" type="radio" name="sz" value="44">
	                    <label for="opt-7">44</label>
	                </em>
	                <em>
	                    <input id="opt-8" type="radio" name="sz" value="45">
	                    <label for="opt-8">45</label>
	                </em>
	                
				</div>
			</div>
			<div class="field">
				<label>Pilih Jumlah</label>
				<select name="qty" id="qty">
					<option value="1" selected="">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
			<div id="errMsg"></div>
			<div class="detail-splite" style="padding-left: 15px;">
				<input type="button" class="button" value="BELI" name="butATC" id="butATC" data-toggle="modal" data-target="#warning" style="width: 355px;">
				<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="detail-help">
                <a href="https://geoff-max.com/size-guide.php" class="size-button" target="_blank">
                	<div>PANDUAN UKURAN</div>
                </a>
                <a href="https://geoff-max.com/cara-beli" class="caber">
                	<div style="font-size: 18px;">CARA BELI</div>
                </a>
                <b>Butuh bantuan? Line kami:</b>
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
		    		<li class="items">
		    			<div class="status">
		    				
                        </div>
                        <a href="#" class="">
                            <!-- <div class="pict">
                                <img src="<?php echo base_url('assets/geoff produk rinci/cowok/brown6.jpg')?>">
                            </div>
                            <label><strong>Authentic Brown</strong></label>
                            <div class="price">Rp. 425,000</div>
                            <div class="size"></div> -->
                            <?php foreach($produk as $p) { ?>
							  <div class="col-lg-3 col-md-4 mb-4">
								<div class="card" style="width: 18rem;">
									<img class="card-img-top" src="<?php echo base_url('assets/produk/listproduk/'). $p->gambarproduk; ?>">
									<div class="card-body text-center">
										<h5 class="card-title"><?php echo $p->namaproduk; ?></h5>
										<p class="card-text">Rp<?php echo number_format($p->harga,0,",","."); ?></p>
									</div>
								</div>
							  </div>
							  <?php } ?>
                        </a>
                    </li>
		    	</ul>
		    </div>
		</div>

	</div>
</body>