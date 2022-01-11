<?php
     $codmacroprocesso = $_POST['codmac_proc'];

    $conexao = conectabanco::pegarConexao();
        $querySelect = "select distinct cod_proc,nome_proc from tbprocesso where cod_proc = '$codmacroprocesso'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchALL();

?>        