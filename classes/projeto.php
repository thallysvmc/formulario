<?php
include_once ('conectabanco.php');
class projeto{
private $codprojeto;
private $nomeprojeto;

public function getcodprojeto(){
return $this->codprojeto;
}
public function getnomeprojeto(){

    return $this->nomeprojeto;
}
public function setcodprojeto($codprojeto){
    $this->codprojeto = $codprojeto;
}
public function setnomeprojeto($nomeprojeto){

    $this->nomeprojeto = $nomeprojeto;
}

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select codprojeto,nomeprojeto from tbprojeto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

}
?>