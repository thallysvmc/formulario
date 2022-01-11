<?php

include_once ('config.php');

     $codprojeto = $_POST['codprojeto'];
     $qdadehora_proc = $_POST['qdadehora_proc'];
     $codmacroprocesso = $_POST['codmac_proc'];
     $codConsultor = $_POST['codconsultor'];
     $codcliente = $_POST['codcliente'];
     $data_med = $_POST['data_med'];
     $hmedida = $_POST['hmedida'];
     $obs = $_POST['obs'];


if (ISSET($_POST['submit'])) 
{
     $result = mysqli_query ($conexao, "UPDATE tbitensprojeto 
                                        SET qdadehora_proc= qdadehora_proc + '$qdadehora_proc' 
                                        WHERE codprojeto = '$codprojeto' 
                                        and codmac_proc = '$codmacroprocesso'");


           $result = mysqli_query ($conexao, "INSERT INTO tbmedicao(
           codConsultor,codcliente, qdadehora_proc, 
           hmedida,data_med,codprojeto,codmac_proc,obs)
            VALUES ('$codConsultor','$codcliente','$qdadehora_proc','$hmedida',
            '$data_med','$codprojeto','$codmacroprocesso','$obs')");


}
?>