<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <!-- Icon -->
  	<link rel="icon" href="<?=base_url()?>assets/dist/img/book.png"  class="img-circle" type="image/x-icon">	
    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/bf9156d7b2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('assets/')?>dist/css/style.css">
    <title>Buku Digital</title>
  </head> 
  <body>
	
	<nav class="navbar fixed navbar-dark bg-success">
	  <div class="container">
	  <a class="navbar-brand mr-5" href="<?=base_url()?>" style="font-size: 30px;"><i class="fa fa-book-open"></i> MyBook <p class="text-white" style="font-size: 13px; font-style: italic;">Buku Digital Masa Kini.</p></a>
	  
	  <form class="form-inline">

	    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
	   <a href="https://api.whatsapp.com/send?phone=6289519680927&text=Assalaamualaikum%20Admin%20Buku%20Digital%20yang%20Ganteng%20:D">
       <img src="<?=base_url('img/wa1.png')?>" width="40px"> <font color="#FFFFFF">Whatsapp</font>
    	</a>
	    <!-- <a href="#" class="btn btn-outline-danger my-2 my-sm-0 mr-3" >WhattsUp</a> -->
	    <a href="<?=base_url()?>auth/login" class="btn btn-danger my-2 my-sm-0 ml-5" >Login</a>
      <a href="#" class="btn btn-danger my-2 my-sm-0 ml-2" >Registrasi</a>
	  </form>
	  </div>
	</nav>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
	  <!-- <a class="navbar-brand mr-5" href="#" style="font-size: 30px"><u>Digital</u>Library</a> -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-item nav-link mr-3" href="<?=base_url('home')?>">Home <span class="sr-only">(current)</span></a>
	      <a class="nav-item nav-link mr-3" href="<?=base_url('home')?>">Profile</a>
	      <a class="nav-item nav-link mr-3" href="<?=base_url('home')?>">Inbox</a>
	      
	      <?php $kategori = $this->home_m->get_all_data_kategori() ?>
	      <div class="dropdown">
			  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
			    Kategori
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

			  <?php foreach ($kategori as $key => $value) { ?>
			    <a href="<?=base_url('koleksi/kategori/'.$value->id_kategori)?>" class="dropdown-item" type="button"><?=$value->nama_kategori?></a>
			  <?php } ?>
			  </div>
			</div>

			<?php $keahlian = $this->home_m->get_all_data_keahlian() ?>
			<div class="dropdown ml-2">
			  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
			    Keahlian
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
			  	<?php foreach ($keahlian as $key => $value) { ?>
			    <a href="<?=base_url('koleksi/keahlian/'.$value->id_keahlian)?>" class="dropdown-item" type="button"><?=$value->nama_keahlian?></a>
			  	<?php } ?>
			  </div>
			</div>
	      <a class="nav-item nav-link ml-2" href="<?=base_url('koleksi') ?>">Koleksi Buku</a>
	    </div>
	  </div>
	  </div>
	</nav>

  <section id="home">
<!-- <img src="<?= base_url('assets/images/buku1.jpg') ?>"> -->
	<!-- <div class="jumbotron" style="background: url('img/background.jpg');">
		
		<div class="container">

	  <h1 class="display-4 text-white">Selamat Datang di Buku Digital</h1>
	  	<p class="lead text-white">Tempat Membaca Jutaan Buku.</p>
	  	<hr class="my-4">
	  	<p class="text-white">Carilah Referensimu, Kerjakan Tugasmu dan Raih Prestasi mu.</p>
	  <a class="btn btn-outline-success btn-md" href="#koleksi" role="button">Ayo Mulai</a>
	  </div>
	</div> -->
</section>
