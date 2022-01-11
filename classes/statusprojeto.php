<?php
include_once ('conectabanco.php');
class statusprojeto{
private $codstatus_proj;
private $nomestatus_proj;

public function getcodstatus_proj(){
return $this->codstatus_proj;
}
public function getnomestatus_proj(){

    return $this->nomestatus_proj;
}
public function setcodstatus_proj($codstatus_proj){
    $this->codstatus_proj = $codstatus_proj;
}
public function setnomestatus_proj($nomestatus_proj){

    $this->nomestatus_proj = $nomestatus_proj;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codstatus_proj,nomestatus_proj from tbstatusprojeto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>