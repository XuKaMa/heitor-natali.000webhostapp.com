<?php



require_once('../config.php');

require_once(DBAPI);



$logins = null;

$login = null;



/**

 *  Listagem de Clientes

 */

function index() {

	global $logins;

	$logins = find_all3('login');

}

/**

 *  Cadastro de Clientes

 */

function add() {
  if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    save('login', $login);
    header('location: index.php');
  }

}


/**

 *	Atualizacao/Edicao de Cliente

 */

function edit() {

  if (isset($_GET['id'])) {



    $id = $_GET['id'];

	    if (isset($_POST['login'])) {



      $login = $_POST['login'];


      update3('login', $id, $login);

      header('location: index.php');

    } else {



      global $login;

      $login = find3('login', $id);

    } 
  }else {

    header('location: index.php');

  }
}


/**

 *  Visualização de um Cliente

 */

function view($id = null) {

  global $login;

  $login = find3('login', $id);

}	
/**	 
*  Exclusão de um Cliente	 
*/
	
function delete($id = null) {	
	  
	global $login;	  
	$login = remove3('login', $id);		  
	header('location: index.php');	

}