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
	  <link rel="stylesheet" type="text/css" href="https://cdn.gmx.shoes/assets/css/geoff-main.css?v=18.050">               
	  
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
		

	  </style>
	<title></title>
</head>
<body>
	<div class="detail-product">
		
		<div class="left-place">
			
			<script type="text/javascript">
				$(document).ready(function() {
				$("#content-slider").lightSlider({
	                loop:true,
	                keyPress:true
	            });
	            $('#image-gallery').lightSlider({
	                gallery:true,
	                item:1,
	                thumbItem:5,
	                slideMargin: 0,
	                speed:700,
	                auto:false,
	                loop:true,
	                onSliderLoad: function() {
	                    $('#image-gallery').removeClass('cS-hidden');
	                }  
	            });
				});
			</script>
			<div class="demo">
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
		        
    		</div>	
          
		</div>
		<form class="right-place">
			<h1>Authentic Black White</h1>
			<h3>Rp. 285,000</h3>
			<div class="field" id="ukuranaa">
				<label>Pilih Ukuran</label>
				<div class="radio-option">
					<em>
	                    <input id="opt-1" type="radio" name="sz" value="5117">
	                    <label for="opt-1">38</label>
	                </em>
	                <em>
	                    <input id="opt-2" type="radio" name="sz" value="5118">
	                    <label for="opt-2">39</label>
	                </em>
	                <em>
	                    <input id="opt-3" type="radio" name="sz" value="5119">
	                    <label for="opt-3">40</label>
	                </em>
	                <em>
	                    <input id="opt-4" type="radio" name="sz" value="5120">
	                    <label for="opt-4">41</label>
	                </em>
	                <em>
	                    <input id="opt-5" type="radio" name="sz" value="5121">
	                    <label for="opt-5">42</label>
	                </em>
	                <em>
	                    <input id="opt-6" type="radio" name="sz" value="5122">
	                    <label for="opt-6">43</label>
	                </em>
	                <em>
	                    <input id="opt-7" type="radio" name="sz" value="5123">
	                    <label for="opt-7">44</label>
	                </em>
	                <em>
	                    <input id="opt-8" type="radio" name="sz" value="5124">
	                    <label for="opt-8">45</label>
	                </em>
	                <em class="kosong">
	                	<input id="opt-9" type="radio" name="orientation" disabled="">
	                	<label for="opt-9">46</label>
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
			<div class="detail-splite">
				<input type="button" class="button" value="BELI" name="butATC" id="butATC">
			</div>
			<div class="detail-help">
                <a href="https://geoff-max.com/size-guide.php" class="size-button" target="_blank">
                	<div>PANDUAN UKURAN</div>
                </a>
                <a href="https://geoff-max.com/cara-beli" class="caber">
                	<div>CARA BELI</div>
                </a>
                <b>Butuh bantuan? Line kami:</b>
                <a href="https://line.me/R/ti/p/@geoff_max" class="line-button">@geoff_max</a>
            </div>
            <div class="product-desc desktop">
                <div>Warna Black + White itu ga pernah salah bray! Bakalan selalu cocok di pakai pake baju apa pun dan kemana pun! Buat anak sekolahan juga bisa loh! Warna dan design yang simple yang bikin sepatu Authentic Black pas di pakai kapan pun dan di mana pun!
                </div>
                <div><br></div>
                <div>Shoes Material</div>
                <div>Upper : Canvas 12 Oz</div>
                <div>Sole : Rubber</div>
                <div>Insole : Jersey Foam</div>
                <div>Construction : Stitch Down</div>
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
                            <div class="pict">
                                <img src="<?php echo base_url('assets/geoff produk rinci/cowok/brown6.jpg')?>">
                            </div>
                            <label><strong>Authentic Brown</strong></label>
                            <div class="price"><span>Rp. 425,000</span></div>
                            <div class="size"></div>
                        </a>
                    </li>
		    	</ul>
		    </div>
		</div>

	</div>
</body>