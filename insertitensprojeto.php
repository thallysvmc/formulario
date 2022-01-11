<?php

if (ISSET($_POST['submit'])) 
{
 include_once ('config.php');

     $codprojeto = $_POST['codprojeto'];
     $COMERCIAL = $_POST['COMERCIAL'];
     $ADERÊNCIA = $_POST['ADERÊNCIA'];
     $SETUP = $_POST['SETUP'];
     $START = $_POST['START'];
    //  $CADASTROSBÁSICOS = $_POST['CADASTROS BÁSICOS'];
     $VIABILIDADE = $_POST['VIABILIDADE'];
     $ORÇAMENTO = $_POST['ORÇAMENTO'];
     $GESTAODECUSTOS = $_POST['GESTAODECUSTOS'];
     $FOLHADEPAGAMENTO = $_POST['FOLHADEPAGAMENTO'];
     $PATRIMONIO = $_POST['PATRIMONIO'];
     $CONTROLADORIA = $_POST['CONTROLADORIA'];
     $COMERCIALVENDAS = $_POST['VENDAS'];
     $RECEBÍVEIS = $_POST['RECEBÍVEIS'];
     $SAC = $_POST['SAC'];
     $QUALIDADESGQ = $_POST['QUALIDADESGQ'];
     $ESCRITAFISCAL = $_POST['ESCRITAFISCAL'];
     $CONTABILIDADE = $_POST['CONTABILIDADE'];
     $WBI = $_POST['WBI'];
     $GERADORESRESULTADOS = $_POST['GERADORESRESULTADOS'];
    

     if ($COMERCIAL <> NULL){
     $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
     VALUES('$codprojeto','$COMERCIAL',2)");
     } 

     if ($ADERÊNCIA <> NULL){
        $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
        VALUES('$codprojeto','$ADERÊNCIA',12)");
        } 
        if ($SETUP <> NULL){
            $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
            VALUES('$codprojeto','$SETUP',8)");
            } 
            if ($START <> NULL){
                $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                VALUES('$codprojeto','$START',8)");
                } 
                    if ($VIABILIDADE <> NULL){
                        $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                        VALUES('$codprojeto','$VIABILIDADE',12)");
                        } 
                        if ($ORÇAMENTO <> NULL){
                            $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                            VALUES('$codprojeto','$ORÇAMENTO',16)");
                            } 
                            if ($GESTAODECUSTOS <> NULL){
                                $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                VALUES('$codprojeto','$GESTAODECUSTOS',50)");
                                } 
                                if ($FOLHADEPAGAMENTO <> NULL){
                                    $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                    VALUES('$codprojeto','$FOLHADEPAGAMENTO',100)");
                                    } 
                                    if ($PATRIMONIO <> NULL){
                                        $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                        VALUES('$codprojeto','$PATRIMONIO',12)");
                                        } 
                                        if ($CONTROLADORIA <> NULL){
                                            $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                            VALUES('$codprojeto','$CONTROLADORIA',40)");
                                        }                                          
                                                 if ($COMERCIALVENDAS <> NULL){
                                                     $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                     VALUES('$codprojeto','$COMERCIALVENDAS',40)");
                                                     } 
                                            if ($RECEBÍVEIS <> NULL){
                                                $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                VALUES('$codprojeto','$RECEBÍVEIS',20)");
                                                } 
                                                if ($SAC <> NULL){
                                                    $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                    VALUES('$codprojeto','$SAC',12)");
                                                    } 
                                                    if ($QUALIDADESGQ <> NULL){
                                                        $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                        VALUES('$codprojeto','$QUALIDADESGQ',12)");
                                                        } 
                                                        if ($ESCRITAFISCAL <> NULL){
                                                            $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                            VALUES('$codprojeto','$ESCRITAFISCAL',40)");
                                                            } 
                                                            if ($CONTABILIDADE <> NULL){
                                                                $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                                VALUES('$codprojeto','$CONTABILIDADE',80)");
                                                                } 
                                                                if ($WBI <> NULL){
                                                                    $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                                    VALUES('$codprojeto','$WBI',16)");
                                                                    } 
                                                                    if ($GERADORESRESULTADOS <> NULL){
                                                                        $result = mysqli_query ($conexao, "INSERT INTO tbitensprojeto(codprojeto,codmac_proc,qdadehoracont) 
                                                                        VALUES('$codprojeto','$GERADORESRESULTADOS',12)");
                                                                        } 
     }
?>
 <!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >PROCESSOS</title>
    </cabeca>
    <body>
    <h2>Itens do projeto cadastrados com sucesso!</h2>
    <a href="Home.html">Sair</a>
</body>
</html> 