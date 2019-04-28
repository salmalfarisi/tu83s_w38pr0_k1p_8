<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/@fortawesome/fontawesome-free/css/fontawesome.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/@fortawesome/fontawesome-free/css/fontawesome.min.css') ?>">
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
	body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #FFA500;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: white;
			padding: 10px;
			text-align: center;
			border: solid #EA6002 10px; 
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #EA6002 !important;
			color: white !important;
		}
		
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		
		.input-group-text {
			background: #EA6002 !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
  </style>
	<title><?php echo $this->session->userdata('Judul Halaman');?></title>
</head>
<body>	
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<div class="carousel slide " style="transform: translate(0,50px);" 	data-ride="carousel" data-interval="2000">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon1.png')?>">
								</div>
								<div class="carousel-item" style="height: 50%, width:50%">
									<img class="img-crs" src="<?php echo base_url('assets/contoh home/pic/icon2.png')?>" >

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-center ">
					
				</div>
				<div class="d-flex justify-content-center form_container">
					
					<form method="POST" action="<?php echo base_url('admin')?>">
							<div class="form-group">
								<?php if ($this->session->flashdata('login')) : ?>
									<p class="text-danger text-center">Login <strong>GAGAL</strong> <br><?= $this->session->flashdata('login'); ?></p>	
								<?php endif;?>
								<input type="text" name="username" class="form-control input_user" value="" placeholder="username" required="">
								
							</div>
							<div class="form-group mb-4">
								<input type="password" name="password" class="form-control input_pass" value="" placeholder="password" required="">
								
							</div>
							<div class="d-flex justify-content-center mt-4 login_container" >
								<button type="submit" name="button" id="login" class="btn login_btn">Login</button>
							</div>
							
					</form>
				</div>
				
				<br><br>
			</div>
		</div>
	</div>
</body>