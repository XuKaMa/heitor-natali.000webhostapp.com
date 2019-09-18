<?php 
	session_start();
	require_once('functions.php'); 

	view($_GET['id']);

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Produto <?php echo $produto['codpro']; ?></h2>

<hr>



<?php if (!empty($_SESSION['message'])) : ?>

	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>

<?php endif; ?>



<dl class="dl-horizontal">

	<dt>Descrição:</dt>

	<dd><?php echo $produto['descricao']; ?></dd>



	<dt>Quantidade:</dt>

	<dd><?php echo $produto['quantidade']; ?></dd>



	<dt>Preço Unidade:</dt>

	<dd><?php echo $produto['precounidade']; ?></dd>

</dl>



<dl class="dl-horizontal">

	<dt>Data de Cadastro:</dt>

	<dd><?php echo $produto['created']; ?></dd>

</dl>

<div id="actions" class="row">

	<div class="col-md-12">
	<?php if(isset($_SESSION['logged_in'])){
	if($_SESSION['admin'] >= 2): ?>
	  <a href="edit.php?id=<?php echo $produto['codpro']; ?>" class="btn btn-secondary">Editar</a>
	<?php endif; } ?>
	  <a href="index.php" class="btn btn-default">Voltar</a>

	</div>

</div>



<?php include(FOOTER_TEMPLATE); ?>