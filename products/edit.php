<?php 
	session_start();
	require_once('functions.php'); 

  edit();

?>



<?php include(HEADER_TEMPLATE); ?>



<h2>Atualizar Produtos</h2>



<form action="edit.php?id=<?php echo $produto['codpro']; ?>" method="post">

  <hr />

  <div class="row">

    <div class="form-group col-md-7">

      <label for="name">Descrição</label>

      <input type="text" class="form-control" name="produto['descricao']" value="<?php echo $produto['descricao']; ?>">

    </div>



    <div class="form-group col-md-3">

      <label for="campo2">Quantidade</label>

      <input type="text" class="form-control" name="produto['quantidade']" value="<?php echo $produto['quantidade']; ?>">

    </div>



    <div class="form-group col-md-2">

      <label for="campo3">Preço Unidade</label>

      <input type="text" class="form-control" name="produto['precounidade']" value="<?php echo $produto['precounidade']; ?>">

    </div>

  </div>

  

    <div class="form-group col-md-2">

      <label for="campo3">Data de Cadastro</label>

      <input type="text" class="form-control" name="produto['created']" disabled value="<?php echo $produto['created']; ?>">

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