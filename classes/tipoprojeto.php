<?php
include_once ('conectabanco.php');
class tipoprojeto{
private $codtipoprojeto;
private $nometipoprojeto;

public function getcodtipoprojeto(){
return $this->codtipoprojeto;
}
public function getnometipoprojeto(){

    return $this->nometipoprojeto;
}
public function setcodtipoprojeto($codtipoprojeto){
    $this->codtipoprojeto = $codtipoprojeto;
}
public function setnometipoprojeto($nometipoprojeto){

    $this->nometipoprojeto = $nometipoprojeto;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codtipoprojeto,nometipoprojeto from tbtipoprojeto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>