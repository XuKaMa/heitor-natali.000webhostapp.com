<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="<?php echo BASEURL; ?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>font/css/all.css">
  	<script src="<?php echo BASEURL; ?>font/js/all.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASEURL;?>">Início <span class="sr-only">(current)</span></a>
          </li>
	        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Clientes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
			<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] >= 3):
			?>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Novo Clientes</a>
			<?php endif; } ?>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Gerenciador de Clientes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
			<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] >= 3):
			?>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>products/add.php">Novo Produto</a>
			<?php endif; } ?>
              <a class="dropdown-item" href="<?php echo BASEURL; ?>products">Gerenciador de Produtos</a>
            </div>
          </li>
      <?php 
      if(array_key_exists('logged_in',$_SESSION)):
      if($_SESSION['logged_in'] == '1'){
			if($_SESSION['admin'] >= 2):
			?>
	  	    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            <?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] == 4):
			?>
                <a class="dropdown-item" href="<?php echo BASEURL; ?>login/add.php">Novo Login</a>
            <?php endif; } ?>
				
				
              <a class="dropdown-item" href="<?php echo BASEURL; ?>login">Gerenciador de Logins</a>
			  <?php endif; } endif; ?>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto" id="login">
			<?php if(!isset($_SESSION['logged_in'])):?>
			<a href="<?php echo BASEURL; ?>login/login.php" class="btn btn-success">
				Entrar
			</a>
			<?php endif;?>
			<?php if(isset($_SESSION['logged_in'])):?>
			<a href="<?php echo BASEURL; ?>logout.php" class="btn btn-danger">
				Sair
			</a>
			<?php endif;?>
        </ul>
      </div>
    </nav>
    <main class="container" style="margin-top: 20px">