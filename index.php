<?php
session_start();

require 'ConnDB.class.php';
require 'Crud.class.php';


$crud = new Crud();





	//$deletar_loja = $crud->deleta('lojas','WHERE id = ?', array($_GET['id']));
	
	//$insere_loja = $crud->insere('lojas', 'nome = ?, razao = ?, cnpj = ?', array($_GET['nome'],$_GET['razao'],$_GET['cnpj']));
	

	//$atualiza_loja = $crud->atualiza('lojas', 'razao = ? WHERE id = ?', array('yuriiririririirir', 114));


	$row_loja = $crud->seleciona('*','lojas','', array());
	foreach ($row_loja as $item) {
		echo $item['nome'].'<br>';
	}
?>