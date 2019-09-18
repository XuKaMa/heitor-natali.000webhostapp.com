<?php 
	session_start();
	require_once('functions.php'); 

  add();

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Novo Produto</h2>



<form action="add.php" method="post">

  <!-- area de campos do form -->

  <hr />

  <div class="row">

    <div class="form-group col-md-7">

      <label for="name">Descrição</label>

      <input type="text" class="form-control" name="produto['descricao']">

    </div>



    <div class="form-group col-md-3">

      <label for="campo2">Quantidade</label>

      <input type="number" class="form-control" name="produto['quantidade']">

    </div>



    <div class="form-group col-md-2">

      <label for="campo3">Preço Unidade</label>

      <input type="number" step="any" class="form-control" name="produto['precounidade']">

    </div>

  </div>

    

    <div class="form-group col-md-2">

      <label for="campo3">Data de Cadastro</label>

      <input type="text" class="form-control" name="produto['created']" disabled>

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