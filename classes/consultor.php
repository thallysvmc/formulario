<?php
include_once ('conectabanco.php');
class consultor{
private $codConsultor;
private $nomeConsultor;

public function getcodConsultor(){
return $this->codConsultor;
}
public function getnomeConsultor(){

    return $this->nomeConsultor;
}
public function setcodConsultor($codConsultor){
    $this->codConsultor = $codConsultor;
}
public function setnomeConsultor($nomeConsultor){

    $this->nomeConsultor = $nomeConsultor;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codConsultor,nomeConsultor from tbconsultor";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>