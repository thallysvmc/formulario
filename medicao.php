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
     $codagenda = $_POST ['codagenda'];


if (ISSET($_POST['submit'])) 
{
     $result = mysqli_query ($conexao, "UPDATE tbitensprojeto 
                                        SET qdadehora_proc= qdadehora_proc + '$qdadehora_proc' 
                                        WHERE codprojeto = '$codprojeto' 
                                        and codmac_proc = '$codmacroprocesso'");


           $result = mysqli_query ($conexao, "INSERT INTO tbmedicao(
           codConsultor,codcliente, qdadehora_proc, 
           hmedida,data_med,codprojeto,codmac_proc,obs,codagenda)
            VALUES ('$codConsultor','$codcliente','$qdadehora_proc','$hmedida',
            '$data_med','$codprojeto','$codmacroprocesso','$obs','$codagenda')");


}
?>

<!DOCTYPE html>
<html lang="en">
    <cabeca>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE = edge">
        <meta name="viewport" content="widtth = devide-width,initial-scale = 1.0" >
        <title >Medições</title>
    </cabeca>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .box{
            color: white;
            position: fixed;
            top: 30%;
            left: 35%;
            /* transform: translate(-55%,-50%); */
            background-color: rgba(0, 0, 0, 0.6);
            padding: 55px;
            border-radius: 15px;
            width: 20%;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid #FD3B00;
            padding: 10px;
            border-radius: 10px;
            width: 10px;
        }

        #myVideo {
position: fixed; 
			right: 0; 
			bottom: 0;
			min-width: 100%; 
			min-height: 100%;
			width: auto; 
			height: auto; 
			z-index: -1000;
			background-size: cover; 
					
};

    </style>

<video autoplay muted loop id="myVideo">
    <source src="https://video.wixstatic.com/video/51f0fc_2e51ae98e46b47819d29186b3d9ac257/720p/mp4/file.mp4" type="video/mp4">
    </video>
    <body class="box">
    <h2>Medição cadastrada com sucesso!</h2>
    <a href="formulario.php">Gerar nova medição</a><br><br><br>
    <a href="Home.html">Voltar à pagina Home</a>
</body>
</html>