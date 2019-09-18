<?php
	session_start();
    require_once('functions.php');
	index();
?>



<?php include(HEADER_TEMPLATE); ?>
    <script src="<?php echo BASEURL; ?>js/prodmain.js"></script>

<header>

	<div class="row">

		<div class="col-sm-6">

			<h2>Produtos</h2>

		</div>

		<div class="col-sm-6 text-right h2">
			<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] >= 3): 
			?>
	    	<a class="btn btn-secondary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
			<?php endif; } ?>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-sync"></i> Atualizar</a>

	    </div>

	</div>

</header>



<?php if (!empty($_SESSION['message'])) : ?>

	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">

		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

		<?php echo $_SESSION['message']; ?>

	</div>

	<?php //clear_messages(); ?>

<?php endif; ?>



<hr>



<table class="table table-hover">

<thead>

	<tr>

		<th>Cod do Produto</th>

		<th width="30%">Descrição</th>

		<th>Quantidade</th>

		<th>Preço Unidade</th>

		<th>Atualizado em</th>


	</tr>

</thead>

<tbody>

<?php if ($produtos) : ?>

<?php foreach ($produtos as $produto) : ?>

	<tr>

		<td><?php echo $produto['codpro']; ?></td>

		<td><?php echo $produto['descricao']; ?></td>

		<td><?php echo $produto['precounidade']; ?></td>

		<td><?php echo $produto['modified']; ?></td>

		<td class="actions text-right">

			<a href="view.php?id=<?php echo $produto['codpro']; ?>" class="btn btn-sm btn-secondary "><i class="fa fa-eye"></i> Visualizar</a>
			<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] >= 2): 
			?>
			<a href="edit.php?id=<?php echo $produto['codpro']; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit"></i> Editar</a>
			<?php endif; } ?>
			<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] >= 3): 
			?>
			<a href="#" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $produto['codpro']; ?>">
				<i class="fa fa-trash"></i> Excluir
			<?php endif; } ?>
			</a>
			
		</td>

	</tr>

<?php endforeach; ?>

<?php else : ?>

	<tr>

		<td colspan="3">Nenhum registro encontrado.</td>

	</tr>

<?php endif; ?>

</tbody>

</table>

<?php include('../inc/modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>