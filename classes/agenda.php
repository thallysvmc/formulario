<?php
include_once ('conectabanco.php');
class agenda{
private $codagenda;

public function getcodagenda(){
return $this->codagenda;
}
public function setcodagenda($codagenda){
    $this->codagenda = $codagenda;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codagenda from tbagenda";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }
    public function listar1(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "SELECT codagenda FROM tbagenda order by codagenda desc  LIMIT 1";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>