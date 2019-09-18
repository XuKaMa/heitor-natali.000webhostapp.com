<?php
	session_start();
    require_once('functions.php');
	index();
	if(!isset($_SESSION['logged_in'])){
		header("Location: ../../");
	}
?>

<?php include(HEADER_TEMPLATE); ?>
    <script src="<?php echo BASEURL; ?>js/prodmain.js"></script>

<header>

	<div class="row">

		<div class="col-sm-6">

			<h2>Logins</h2>

		</div>

		<div class="col-sm-6 text-right h2">
			<?php if($_SESSION['admin'] == '4'): ?>
	    		<a class="btn btn-secondary " href="add.php"><i class="fa fa-plus"></i> Novo Login</a>
			<?php endif; ?>
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

		<th>ID</th>

		<th width="30%">Usuario</th>
		<th>Admin</th>
		<th style="text-align: right;">Opções</th>

	</tr>

</thead>

<tbody>

<?php if ($logins) : ?>

<?php foreach ($logins as $login) : ?>

	<tr>

		<td><?php echo $login['id']; ?></td>

		<td><?php echo $login['login']; ?></td>
		
		<td><?php echo $login['admin']?></td>

		<td class="actions text-right">
			<a href="view.php?id=<?php echo $login['id']; ?>" class="btn btn-sm btn-secondary "><i class="fa fa-eye"></i> Visualizar</a>
			<?php if($login['id'] == $_SESSION['user_id']||$_SESSION['admin'] == '4'): ?>
				<a href="edit.php?id=<?php echo $login['id']; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit"></i> Editar</a>
			<?php endif;?>
						<?php if(isset($_SESSION['logged_in'])){
			if($_SESSION['admin'] == 4): ?>
			<a href="#" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#delete-modal" data-produto="<?php echo $login['id']; ?>">
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