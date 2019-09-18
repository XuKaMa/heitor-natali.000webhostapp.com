<!doctype html>
<html>
    <head>
		<?php require_once '../config.php'; ?>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/login.css">
        <title>Login | Sistema de Login ULTIMATE PHP</title>
    </head>
 
    <body>
		
		<div class="t">
         
        <h1>Login</h1>
 
        <form action="functionslogin.php" method="post">
        <br><br>
 
             <label for="login">Usuario: </label>
             <br>
            <input type="text" name="login" id="login">

            <br><br>
 
            <label for="senha">Senha: </label>
            <br>
            <input type="password" name="senha" id="senha">
 
            <br><br>
 
            <input type="submit" value="Entrar">
			<a type="button" href="<?php echo BASEURL; ?>index.php">Cancelar</a>
        </form>
		
		</div>
		
    </body>
</html>