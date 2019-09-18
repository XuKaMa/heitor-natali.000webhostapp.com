<?php 
  session_start();
  require_once('functions.php'); 
  if(!isset($_SESSION['admin'])) {
    header("Location: ./");
    
  } else {
    if($_SESSION['admin'] == '0'){
      header("Location: ./");
    }
  }
  add();

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Novo Login</h2>



<form action="add.php" method="post">

  <!-- area de campos do form -->

  <hr />

  <div class="row">
    <div class="form-group col-md-7">

      <label for="name">Usuario</label>

      <input type="text" class="form-control" name="login['login']">

    </div>
    <div class="form-group col-md-3">

      <label for="campo2">Senha</label>

      <input type="number" class="form-control" name="login['senha']">

    </div>
	<div class="form-group col-md-3">

      <label for="campo2">Nivel Admin</label>

      <input type="number" class="form-control" name="login['admin']">

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