<?php
include_once ('conectabanco.php');
class processo{
private $Codtbprocesso;
private $nomemac_proc;
private $cod_proc;
private $nome_proc;

public function getCodtbprocesso(){
return $this->Codtbprocesso;
}
public function getnomemac_proc(){

    return $this->nomemac_proc;
}
public function setCodtbprocesso($Codtbprocesso){
    $this->Codtbprocesso = $Codtbprocesso;
}
public function setnomemac_proc($nomemac_proc){

    $this->nomemac_proc = $nomemac_proc;
}



        public function getcod_proc(){
            return $this->cod_proc;
            }
            public function getnome_proc(){
            
                return $this->nome_proc;
            }
            public function setcod_proc($cod_proc){
                $this->cod_proc = $cod_proc;
            }
            public function setnome_proc($nome_proc){
            
                $this->nome_proc = $nome_proc;
            }

    public function listar(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select distinct codmac_proc,nomemac_proc from tbmacroprocesso";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

    public function listarproc(){
        $conexao = conectabanco::pegarConexao();
        $querySelect = "select cod_proc,nome_proc from tbprocesso";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();
        return $lista;
    }

   
}
?>