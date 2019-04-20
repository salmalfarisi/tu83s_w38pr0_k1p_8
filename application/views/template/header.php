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
  <style type="text/css">
  	.img-crs{
  		width: 95px;
  		height: 41px
  	}
  	.headers {
  		position:relative;
  		border-style: solid;
  		border-width: 0.1px 0px 0.1px 0px;
  		border-color: grey;
  		padding: 10px 0px 10px 0px
  	}
	.carousel2{
		height: 500px;
		width: 1510px;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px
	}
	.konten{
		background-color: #EEEEEE;
		width: 100%;
		margin-top :20px;


	}
	.konten2{
		width: 105%;
		left : -15px;
		height: auto;
		margin-top :10px
	}
	.link{
		color : black;

	}

	.footer{
		background-color: #F3F3F3;
		margin-top: 15px;

	}

	.imgfooter{
		height: 100px;
		width: 100px
	}

	.hurufproduk
	{
		color : black;
		
	}
  </style>
	<title><?php echo $this->session->userdata('Judul Halaman');?></title>
</head>
<body>
	<div class="row headers">
		<div class="carousel slide col-1"	data-ride="carousel" data-interval="2000">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="<?php echo base_url('Geoffmax/index');?>"><img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon1.png')?>"></a>
				</div>
				<div class="carousel-item" style="height: 50%, width:50%">
					<a href="<?php echo base_url('Geoffmax/index');?>"><img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon2.png')?>" ></a>

				</div>
			</div>
		</div>
		<div class="header-icons col-2 offset-9">
                <a href="/search?idsrch=0&amp;prodkat=0&amp;ref=&amp;fav=1&amp;brnd=0&amp;txtcr=" class="link fav"><img src="<?php echo base_url('assets/contoh home/pic/fav.png')?>">FAV</a>   
                <a href="#" class=" link cart active"><img src="<?php echo base_url('assets/contoh home/pic/cart.png')?>">CART </a>
                <a href="#" class="link cari"><img src="<?php echo base_url('assets/contoh home/pic/cari.png')?>">CARI</a>                
        </div>
	</div>
	<div class="row headers">
		<div class="col-2 offset-5"><b>Browse By Gender</b></div>
	</div>
	<div class="row headers">
		<div class="col-1 offset-3"><a class="hurufproduk " href="<?php echo base_url('Geoffmax/produkcowok');?>">BOY</a></div>
		<div class="col-1 offset-2"><img src="<?php echo base_url('assets/contoh home/pic/mid.png')?>" style="height: 80%"></div>
		<div class="col-1 offset-2"><a class="hurufproduk " href="<?php echo base_url('Geoffmax/produkcewek');?>">GIRL</a></div>
	</div>