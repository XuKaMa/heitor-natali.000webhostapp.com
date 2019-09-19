<?php 
	session_start();
	require_once 'config.php';
	if(array_key_exists('logged_in',$_SESSION)) {
		if(!$_SESSION['logged_in']){
			function autologin() {
				$_SESSION['logged_in'] = $_COOKIE['logged_in'];
				$_SESSION['login'] = $_COOKIE['login'];
				$_SESSION['admin'] = $_COOKIE['admin'];
				$_SESSION['user_id'] = $_COOKIE['user_id'];
			}
		}
	}
	
	include(HEADER_TEMPLATE);

?>
<h1>Dashboard</h1>
<hr />
<div class="row">
<?php if(isset($_SESSION['logged_in'])){
		if($_SESSION['admin'] >= 2):
	?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/add.php" class="btn btn-secondary">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-user-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>
<?php endif; } ?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr>
<div class="row">
<?php if(isset($_SESSION['logged_in'])){
		if($_SESSION['admin'] >= 2):
	?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="products/add.php" class="btn btn-secondary">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-cart-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Novo Produto</p>
				</div>
			</div>
		</a>
	</div>
<?php endif; } ?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="products" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-shopping-cart fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Produtos</p>
				</div>
			</div>
		</a>
	</div>
</div>
<hr>
<div class="row">
<?php if(isset($_SESSION['logged_in'])){
		if($_SESSION['admin'] == 4):
	?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="login/add.php" class="btn btn-secondary">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-folder-plus fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Novo Login</p>
				</div>
			</div>
		</a>
	</div>
<?php endif; } ?>
<?php if(isset($_SESSION['logged_in'])){
		if($_SESSION['admin'] >= 2):
	?>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="login" class="btn btn-default">
			<div class="row">
				<div class="col-12 text-center">
					<i class="fas fa-folder fa-5x"></i>
				</div>
				<div class="col-12 text-center">
					<p>Logins</p>
				</div>
			</div>
		</a>
	</div>
<?php endif; } ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>