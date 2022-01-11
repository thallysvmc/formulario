<?php
include_once ('conectabanco.php');
class cliente{
private $codcliente;
private $nomecliente;

public function getcodcliente(){
return $this->codcliente;
}
public function getnomecliente(){

    return $this->nomecliente;
}
public function setcodcliente($codcliente){
    $this->codcliente = $codcliente;
}
public function setnomecliente($nomecliente){

    $this->nomecliente = $nomecliente;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codcliente,nomecliente from tbcliente";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>