<?php

require_once('../config.php');

require_once(DBAPI);

$produtos = null;

$produto = null;

function index() {
	global $produtos;
	$produtos = find_all2('produtos');
}

function add() {
	if (!empty($_POST['produto'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$produto = $_POST['produto'];
		$produto['modified'] = $produto['created'] = $today->format("Y-m-d H:i:s");
		save2('produtos', $produto);
		header('location: index.php');
	}
}

function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $codpro = $_GET['id'];
    if (isset($_POST['produto'])) {
		$produto = $_POST['produto'];
		$produto['modified'] = $now->format("Y-m-d H:i:s");
		update2('produtos', $codpro, $produto);
		header('location: index.php');
    } else {
		global $produto;
		$produto = find2('produtos', $codpro);
    } 
  } else {
    header('location: index.php');
  }
}

function view($codpro = null) {
  global $produto;
  $produto = find2('produtos', $codpro);
}
	
function delete($codpro = null) {	
	global $produto;	  
	$produto = remove2('produtos', $codpro);		  
	header('location: index.php');	

}