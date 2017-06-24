<?php
class Crud extends ConnDB
{
    //Variável responsável por retornar o resultado de uma ação
    private $query;

    //Função para exeuctar o prepare e o execute em todas as outras funções
    private function prepExec($prep,$exec)
    {
        $this -> query = $this -> getConn() -> prepare($prep);
        $this -> query -> execute($exec);
    }

    public function seleciona($campos,$tabela,$prep,$exec)
    {
        $this -> prepExec('SELECT '. $campos .' FROM '. $tabela .' '. $prep .'', $exec);
        return $this -> query;
        //return $this -> query retornará o resultado da ação em um var_dump no objeto extanciado
    }

    public function atualiza($tabela,$prep,$exec)
    {
        $this -> prepExec('UPDATE '.$tabela.' SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function insere($tabela,$prep,$exec)
    {
        $this -> prepExec('INSERT INTO '.$tabela.' SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function deleta($tabela,$prep,$exec)
    {
        $this -> prepExec('DELETE FROM '.$tabela.' '. $prep .' ', $exec);
        return $this -> query;
    }
}
?>