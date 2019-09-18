<?php
	session_start();
    require_once('functions.php');
	view($_GET['id']);
	if(!isset($_SESSION['logged_in'])){
		header("Location: ../../");
	}
	include(HEADER_TEMPLATE); 
?>
<h2>Login <?php echo $login['id']; ?></h2>
<hr>
<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
<dl class="dl-horizontal">
	<dt>Usuario:</dt>
	<dd><?php echo $login['login']; ?></dd>
</dl>
<div id="actions" class="row">
	<div class="col-md-12">
		<?php if($_SESSION['admin']=='4'): ?>
			<a href="edit.php?id=<?php echo $login['id']; ?>" class="btn btn-secondary">Editar</a>
		<?php endif; ?>
	    <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>