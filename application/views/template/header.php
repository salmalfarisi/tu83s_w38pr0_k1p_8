<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<script src="<?php echo base_url('assets/js/ajaxgoogle/jquery-3.4.0.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/ajaxgoogle/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/ajaxgoogle/bootstrap.min.js') ?>"></script>
  <style type="text/css">
  	.img-crs{
  		width: 95px;
  		height: 41px
  	}

  	.outfoot{
  		-webkit-text-stroke-width: 1px;
    	-webkit-text-stroke-color: white;
    	margin-top: 80px;
    	font-size:30px;
      font-weight: bold;
  	}
  	.outfoot2{
  		-webkit-text-stroke-width: 1px;
    	-webkit-text-stroke-color: white;
    	margin-top: 80px;
    	font-size:25px;
      font-weight: bold;
  	}

  	.headers {
  		position:relative;
  		border-style: solid;
  		border-width: 0.1px 0px 0.1px 0px;
  		border-color: grey;
  		padding: 10px 0px 3px 0px;
  		width: 98%;
  	}
	.carousel2{
		height: 500px;
		width: 95%;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px
	}
	.konten{
		background-color: #EEEEEE;
		width: 100%;
		margin-top :20px;


	}

    .awesome {
      
      font-family: bebas neue;
      
      width:100%;
      
      margin: 0 auto;
      text-align: center;
      
     
      position: absolute;
      -webkit-animation:colorchange 2s infinite alternate;
      
      
    }

    @-webkit-keyframes colorchange {
      
      50% {
        
        color: #FF6600;
      }
      
      100% {
        
        color: #000000;
      }
      
      
    }
	.konten2{
		width: 105%;
		left : -15px;
		height: auto;
		margin-top :10px
	}

	.carousel-indicators li {
  		width: 15px;
  		height: 15px;
  		border-radius: 100%;

  		margin: 5px;

    	cursor: pointer;
    	border: none;
    	background-color: grey;

	}

	.carousel-indicators .active {
    width: 15px;
  	height: 15px;
  	border-radius: 100%;
    background-color: #FF6600;
}

	.carabeli{
		left: -40px;
	}

	.link{
		color : black;

	}

	.footer1{
		background-color: #F3F3F3;
		margin-top: 15px;

	}

	.footer2{
		background-color: #222222;
	}

	.imgfooter{
		height: 100px;
		width: 100px
	}

	.hurufproduk
	{
		color : #333333;
		
	}
	
	.white{
		color: white;
	}
	.linkss:hover{
		color: #FF6600;
		text-decoration: none
	}
	
	.bayar
	{
	  background-color: #222222;
	  width: 200px;
	  height: 180px;

	}

	.bank
	{
		background-color:  #F3F3F3;
	}
  </style>
	<title><?php echo $this->session->userdata('Judul Halaman');?></title>
</head>
<body>
	<div class="row headers">
		<div class="carousel slide col-1"	data-ride="carousel" data-interval="2000">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="<?php echo base_url('testing2/rumah');?>"><img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon1.png')?>"></a>
				</div>
				<div class="carousel-item" style="height: 50%, width:50%">
					<a href="<?php echo base_url('testing2/rumah');?>"><img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon2.png')?>" ></a>

				</div>
			</div>
		</div>
		<div class="header-icons col-2 offset-9">
                <a href="/search?idsrch=0&amp;prodkat=0&amp;ref=&amp;fav=1&amp;brnd=0&amp;txtcr=" class="link fav hurufproduk linkss"><img src="<?php echo base_url('assets/contoh home/pic/fav.png')?>">FAV</a>   
                <a href="<?php echo base_url('testing2/panggilcart'); ?>" class="link cari hurufproduk linkss"><img src="<?php echo base_url('assets/contoh home/pic/cart.png')?>">CART</a> 
                <div class="dropdown">                
					<button class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="<?php echo base_url('assets/contoh home/pic/cari.png')?>">CARI
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenu">
						<form method="POST" action="<?php echo base_url('testing2/searchproductengine');?>">
							<p>
								<input name="cariproduk" class="link cari hurufproduk linkss" placeholder="Saya ingin Mencari...">
								<button type="submit"><img src="<?php echo base_url('assets/contoh home/pic/cari.png')?>"></button>
							</p>
						</form>
					</div>
				</div>
        </div>
	</div>
	<div class="row headers">
		<div class="col-2 offset-6 a1 hurufproduk" style="left: -50px"><b>Browse By Gender</b></div>
	</div>
	<div class="row headers">
		<div class="col-1 offset-3"><a class="hurufproduk linkss " href="<?php echo base_url('testing2/produkcowok');?>"><b>BOY</b></a></div>
		<div class="col-1 offset-2"><img src="<?php echo base_url('assets/contoh home/pic/mid.png')?>" style="height: 80%"></div>
		<div class="col-1 offset-2"><a class="hurufproduk linkss" href="<?php echo base_url('testing2/produkcewek');?>"><b>GIRL</b></a></div>
	</div> 
