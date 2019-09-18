<?php 
	session_start();
	require_once('functions.php'); 

  edit();

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Atualizar Login</h2>



<form action="edit.php?id=<?php echo $login['id']; ?>" method="post">

  <hr />

  <div class="row">

    <div class="form-group col-md-7">

      <label for="name">Usuario</label>

      <input type="text" class="form-control" name="login['login']" value="<?php echo $login['login']; ?>">

    </div>



    <div class="form-group col-md-3">

      <label for="campo2">Senha</label>

      <input type="text" class="form-control" name="login['senha']" value="<?php echo $login['senha']; ?>">

    </div>



  </div>



  <div id="actions" class="row">

    <div class="col-md-12">

      <button type="submit" class="btn btn-secondary">Salvar</button>

      <a href="index.php" class="btn btn-default">Cancelar</a>

    </div>

  </div>

</form>



<?php include(FOOTER_TEMPLATE); ?>