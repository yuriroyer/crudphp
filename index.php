<?php
	session_start();

	require 'ConnDB.class.php';
	require 'Crud.class.php';


	$crud = new Crud();





	$deletar_loja = $crud->deleta('lojas','WHERE id = ?', array($_GET['id']));
	
	$insere_loja = $crud->insere('lojas', 'nome = ?', array($_GET['nome']));
	

	$atualiza_loja = $crud->atualiza('lojas', 'razao = ? WHERE id = ?', array('novo nome da loja', 114));


	$row_loja = $crud->seleciona('*','lojas','', array());
	foreach ($row_loja as $item) {
		echo $item['nome'].'<br>';
	}
?>